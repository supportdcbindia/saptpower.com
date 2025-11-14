<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

session_start();
error_reporting(0);

$contact_page = "https://saptpower.com/contact.php";

$subject_line= "Lead From SAPT POWERTRONICS PVT. LTD. Corporate Website";
$from_email = "sales@saptpower.com";
$to_email = "sales@saptpower.com";
$thanks_page = "https://saptpower.com/thankyou.php";

function send_request($data){
  return true;
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
$fname= htmlspecialchars(stripslashes(trim($_POST['name'])));
$cname= htmlspecialchars(stripslashes(trim($_POST['cname'])));
$email= htmlspecialchars(stripslashes(trim($_POST['email'])));
$message = htmlspecialchars(stripslashes(trim($_POST['message'])));
$phone= htmlspecialchars(stripslashes(trim($_POST['number'])));
$country= htmlspecialchars(stripslashes(trim($_POST['city'])));

// $allowed_origins = array('https://dolphinlasermachine.com/', 'https://saptpower.com/', 'http://dolphinlasermachine.com/', 'http://saptpower.com/','https://dolphinlasermachine.com', 'https://saptpower.com', 'http://dolphinlasermachine.com', 'http://saptpower.com');
// if (!in_array($_SERVER['HTTP_ORIGIN'], $allowed_origins)) {
//     header('location:'.$contact_page);
// }
$curlArr = array_merge($_POST,$_SERVER);
$curlArr['sitename'] = $_SERVER['HTTP_HOST'];
/*$curlArr['type'] = "catalogue";*/
$curlArr['save'] = false;
$response = send_request($curlArr);
if($response->result){
  $curlArr = array_merge($_POST,$_SERVER);
  $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
  $curlArr['save'] = true;
  $curlArr['bcoz'] = "API CONDITION FAIL";
  $curlArr['status'] = "FAIL";
  $response = send_request($curlArr);
  header('location:'.$contact_page);
}else{
  try{
  if(isset($fname) && trim($fname)!=='' && isset($email) && trim($email)!=='' && isset($message) && trim($message)!=='' && isset($phone) && trim($phone)!=='' && isset($country) && trim($country)!==''){
      if ($_POST['captcha'] != ""){
          if (!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)) {
              //echo "ERROR junk email detact";
              $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
              $curlArr['save'] = true;
              $curlArr['bcoz'] = "JUNK DETACT";
              $curlArr['status'] = "FAIL";
              $response = send_request($curlArr);
              header('location:'.$contact_page);
              
          } else {
              preg_match_all('#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $message, $msg_match);
              preg_match_all('/[\._a-zA-Z0-9-]+@[\._a-zA-Z0-9-]+/i', $message, $msg_match_email);
              $junk_word = "#\b(DarrellRomLL|MADARCHOD|fuck|Fuck|Hey|Body|Revolution|Medico|Postura|Posture|Corrector|50%|OFF|FREE|Worldwide|Shipping|Shipping|medicopostura|online|Thank|CAREDOGBEST|Website|Re-designing|SEO|optimization|promotion|marketing|Marketing|Search|Optimization|advertisements|advertisement|advertising|adversement|Advertisement|graphic|design|traffic|advertisers|advertise|Advertising|campaigns|Domain|Domains|cheap|dollar|poker|Websites|redesigning|WordPress|newspapers|Eric|sunglasses|Girls|masturbating|porn|Nude|Sex|Naked|Women|website|fantastic|sorry|Google|doc|ADELIAPUTRI|blog|Petr|Velkov|Moscow|Cryptaxbot|http|https|errors|Joe|Celine|Bhoshdiwalo|Bhoshdi|Bhoshd|Bhosh|Madarchod|Madar|madarchod|madar|bhoshdiwalo|bhoshdi|bhoshd|bhosh|Instagram|instagram)\b#";
              preg_match_all($junk_word, $message, $matches_words);
              //print_r($msg_match_email[0]);
              //echo count($msg_match_email[0]);exit;
              if (count($msg_match[0]) > 0 || count($msg_match_email[0]) > 0 || count($matches_words[0]) > 0) {
                  //echo "ERROR junk msg";
                  $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
                  $curlArr['save'] = true;
                  $curlArr['bcoz'] = "JUNK DETACT";
                  $curlArr['status'] = "FAIL";
                  $response = send_request($curlArr);
                  header('location:'.$contact_page);
              } else {

                
                ## Inquiry insert into the CRM - END

                  require_once ('phpmailer/class.phpmailer.php');
                  $message_body='<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
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
            <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Name:</td>
            <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>'.$fname.'</b></td>
          </tr>
          <tr>
            <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Company Name:</td>
            <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>'.$cname.'</b></td>
          </tr>
          
          
          <tr>
            <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Email:</td>
            <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>'.$email.'</b></td>
          </tr>
          
          <tr>
            <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Mobile:</td>
            <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>'.$phone.'</b></td>
          </tr>
          
          <tr>
            <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">City:</td>
            <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>'.$country.'</b></td>
          </tr>
          
          
          <tr>
            <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Message:</td>
            <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000;line-height:17px"><b>'.$message.'</b></td>
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
                  $mail->IsSMTP(); // telling the class to use SMTP
                  try {
                    $mail->Host= "mail.smtp2go.com"; // SMTP server
                    $mail->SMTPDebug= 0;                     // enables SMTP debug information (for testing)
                    $emailArr = array("dcbindia@dcbindia.in","dcb@dcbindia.in");
                    if(in_array($email,$emailArr)){
                        $mail->AddAddress('dcbrainsinquiry@gmail.com', $subject_line);
                        $mail->SetFrom($from_email, $subject_line);
                        $mail->addReplyTo($email, $subject_line);
                        
                    }else{
                        $mail->AddAddress($to_email, $subject_line);
                        $mail->SetFrom($from_email, $subject_line);
                        $mail->AddBCC('dcbrainsinquiry@gmail.com', $subject_line);
                        $mail->addReplyTo($email, $subject_line);
                    }

                    
                    $mail->Port = 80;
                    $mail->Subject = $subject_line;
                    $mail->SMTPAuth = true;
                    $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
                    $mail->Username = "saptpower";  
                    $mail->Password = "vM7pLBD72NOmBb8u";
                    $mail->MsgHTML($message_body);
                    //$mail->AddAttachment('images/phpmailer.gif');      // attachment
                   // $mail->AddAttachment('images/phpmailer_mini.gif'); // attachment
                    $mail->Send();
                    $cookie_name = "inquierymodel";
                    $cookie_value = "inquiryset";
                    setcookie($cookie_name, $cookie_value, time() + (86400 * 1), "/"); // 86400 = 1 day
                    $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
                    $curlArr['save'] = true;
                    $curlArr['bcoz'] = "MAIL SEND SUCCUSS";
                    $curlArr['status'] = "SUCCESS";
                    $response = send_request($curlArr);
                    header('location:'.$thanks_page);
                    //echo "Message Sent OK<p></p>\n";
                  }
                  catch(phpmailerException $e) {
                      $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
                      $curlArr['save'] = true;
                      $curlArr['bcoz'] = "MAIL SETTING NOT WORKING";
                      $curlArr['Exception'] = $e->errorMessage();
                      $curlArr['status'] = "FAIL";
                      $response = send_request($curlArr);
                      echo $e->errorMessage(); //Pretty error messages from PHPMailer
                      
                  }
                  catch(Exception $e) {
                    $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
                      $curlArr['save'] = true;
                      $curlArr['bcoz'] = "MAIL SETTING NOT WORKING";
                      $curlArr['Exception'] = $e->getMessage();
                      $curlArr['status'] = "FAIL";
                      $response = send_request($curlArr);
                      echo $e->getMessage(); //Boring error messages from anything else!
                      
                  }
              }
          }
      } else { 
        $curlArr = array_merge($_POST,$_SERVER);
        $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
        $curlArr['save'] = true;
        $curlArr['bcoz'] = "CAPTCHA MISMATCH";
        $curlArr['status'] = "FAIL";
        $response = send_request($curlArr);
        ?>
      <script>
          if (confirm("You have enter Wrong Captcha.....Please Enter Correct Captcha Code")) {
              window.location.href = "<?=$contact_page;?>";
          } else {
              window.location.href = "<?=$contact_page;?>";
          }
      </script>
      <?php
      }
  } else { 
    $curlArr = array_merge($_POST,$_SERVER);
    $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
    $curlArr['save'] = true;
    $curlArr['bcoz'] = "REQUIRED DETAIL MISSING";
    $curlArr['status'] = "FAIL";
    $response = send_request($curlArr);
    
    ?>
          <script>
              if (confirm("Please Enter All Details Correct..")) {
                  window.location.href = "<?=$contact_page;?>";
              } else {
                  window.location.href = "<?=$contact_page;?>";
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
