<?php
session_start();
error_reporting(0);
function send_request($data){
  $curl = curl_init();
  curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://dcbindia.in/akismetcurl/akismet_check.php',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $data,
  ));
  $response = json_decode(curl_exec($curl));
  curl_close($curl);
  return $response;
}
$name = $_POST['name'];
$cname = $_POST['cname'];
$email = $_POST['email'];
$phone = $_POST['number'];
$city = $_POST['city'];
$path = $_POST['path'];
$path1 = explode("/", $path);


if ($_SERVER['HTTP_SEC_FETCH_SITE'] != "same-origin") {
  header('location:'.$contact_page);
}
$curlArr = array_merge($_POST,$_SERVER);
$curlArr['sitename'] = $_SERVER['HTTP_HOST'];
$curlArr['type'] = "catalogue";
$curlArr['save'] = false;
$response = send_request($curlArr);
if($response->result){
  $curlArr = array_merge($_POST,$_SERVER);
  $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
  $curlArr['type'] = "catalogue";
  $curlArr['save'] = true;
  $curlArr['bcoz'] = "API CONDITION FAIL";
  $curlArr['status'] = "FAIL";
  $response = send_request($curlArr);
  header('location:https://saptpower.com/contact.php');
}else{
  try{
    
  if(isset($name) && trim($name)!=='' && isset($email) && trim($email)!=='' && isset($phone) && trim($phone)!=='' && isset($city) && trim($city)!==''){
      if ($_POST['captcha'] != ""){
          if (!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)) {
              //echo "ERROR junk email detact";
              $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
              $curlArr['save'] = true;
              $curlArr['bcoz'] = "JUNK DETACT";
              $curlArr['status'] = "FAIL";
              $response = send_request($curlArr);
              header('location:https://saptpower.com/contact.php');
              
          }else {
          require_once ('phpmailer/class.phpmailer.php');
          $message_body = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
                              <html>
                                <head>
                                <meta http-equiv="content-type" content="text/html; charset=windows-1250">
                                <meta name="generator" content="PSPad editor, www.pspad.com">
                                <title></title>
                                <style type="text/css">span.go{display:none} .go{display:none}</style>
                                </head>
                                <body>
                                  <div style="font-family:arial;font-size:12px;font-weight:normal;color:#000000;background:#ffffff;border:10px solid #cccccc;width:600px;padding:20px;margin: 0px auto;">
                                  <table border="1" cellpadding="5" style="width:500px;font-family:arial;font-size:12px;font-weight:normal;color:#000000;border-collapse:collapse;border:1px solid #cccccc;border-color:#cccccc">
                                    <tbody>
                                      <tr>
                                        <td colspan="2" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000;border-bottom:3px solid #cccccc"><b>Enquiry Details</b></td>
                                      </tr>
                                      <tr>
                                        <td width="25%" align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Name:</td>
                                        <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>' . $name . '</b></td>
                                      </tr>
                                      <tr>
                                        <td width="25%" align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Company Name:</td>
                                        <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>' . $cname . '</b></td>
                                      </tr>
                                      <tr>
                                        <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Email:</td>
                                        <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>' . $email . '</b></td>
                                      </tr>
                                      <tr>
                                        <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Mobile:</td>
                                        <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>' . $phone . '</b></td>
                                      </tr>
                                      <tr>
                                        <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">City:</td>
                                        <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000;line-height:17px"><b>' . $city . '</b></td>
                                      </tr>
                                        <tr>
                                        <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Catalogue Name:</td>
                                        <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000;line-height:17px"><b>' . $path1[1] . '</b></td>
                                      </tr>
                                      <tr>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                                </body>
                              </html>
                              ';

          $mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch
          $mail->IsSMTP();
          try{
              $mail->Host= "mail.smtp2go.com"; // SMTP server
              $mail->SMTPDebug= 0;                     // enables SMTP debug information (for testing)
              $mail->AddAddress('sales@saptpower.com', 'New Catalogue Request From SAPT POWERTRONICS PVT. LTD. Corporate Corporate Website');
              $mail->SetFrom('sales@saptpower.com', 'New Catalogue Request From SAPT POWERTRONICS PVT. LTD. Corporate Corporate Website');
              $mail->AddBCC('dcbrainsinquiry@gmail.com', 'New Catalogue Request From SAPT POWERTRONICS PVT. LTD. Corporate Corporate Website');
              $mail->Port = 587;
              $mail->Subject = 'New Catalogue Request From SAPT POWERTRONICS PVT. LTD. Corporate Corporate Website';
              $mail->SMTPAuth = true;
              $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
              $mail->Username = "saptpower";  
                    $mail->Password = "vM7pLBD72NOmBb8u"; 
              $mail->MsgHTML($message_body);
              // $mail->AddAttachment('images/phpmailer.gif');      // attachment
              // $mail->AddAttachment('images/phpmailer_mini.gif'); // attachment
              $mail->Send();
              $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
              $curlArr['save'] = true;
              $curlArr['bcoz'] = "MAIL SEND SUCCUSS";
              $curlArr['status'] = "SUCCESS";
              $response = send_request($curlArr);
              header("location:thankyou-catalogue.php?varname=$path1[1]");

          }catch(phpmailerException $e){
              echo $e->errorMessage(); //Pretty error messages from PHPMailer
          }catch(Exception $e){
              echo $e->getMessage(); //Boring error messages from anything else!
          }
        }
      }else{
        $curlArr = array_merge($_POST,$_SERVER);
        $curlArr['type'] = "catalogue";
        $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
        $curlArr['save'] = true;
        $curlArr['bcoz'] = "CAPTCHA MISMATCH";
        $curlArr['status'] = "FAIL";
        $response = send_request($curlArr); 
?>
      <script>
        if (confirm("You have enter Wrong Captcha.....Please Enter Correct Captcha Code")) {
          window.location.href = "https://saptpower.com/contact.php";
        } else {
          window.location.href = "https://saptpower.com/contact.php";
        }
      </script>
<?php
      }
  }else{
    $curlArr = array_merge($_POST,$_SERVER);
    $curlArr['type'] = "catalogue";
    $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
    $curlArr['save'] = true;
    $curlArr['bcoz'] = "REQUIRED DETAIL MISSING";
    $curlArr['status'] = "FAIL";
    $response = send_request($curlArr);
?>
  <script>
    if (confirm("Please Enter All Details Correct..")) {
      window.location.href = "https://saptpower.com/contact.php";
    } else {
      window.location.href = "https://saptpower.com/contact.php";
    }
  </script>
<?php
  }
  }catch(Exception $e) {
      $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
      $curlArr['save'] = true;
      $curlArr['bcoz'] = "PHPMAILER NOT WORKING OR 500 INTERNAL ERROR";
      $curlArr['Exception'] = $e->getMessage();
      $curlArr['status'] = "FAIL";
      $response = send_request($curlArr);
      //echo $e->getMessage(); //Boring error messages from anything else!
      
  }
}
?>
