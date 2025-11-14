<?php include("header.php");?>
<div class="rs-breadcrumbs">
    <div class="breadcrumbs-image">
        <img src="images/Thank-You.webp">
    </div>
</div>
<section class="contact-details">
    <div class="container pb-70">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <a id="lnnk" href="pdf/catalague.pdf" download>
                    <h4 class="text-center" style="color: #000;"><b>" Thank You For Inquiry We Will Reply You Within 24
                            Hours"</b></h4>
                    <div class="message thnak4" style="display:grid;margin:0px 0 100px;text-align:center;color: #000;">
                        <img src="images/download_gif.gif" class="mx-auto">
                        <span class="font-weight">Click Here For Your Requested Catalogue Download</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<?php include("footer.php");?>
<script>
var hreff = jQuery("#lnnk").attr('href');
setTimeout(
    function() {
        window.location = hreff;
    }, 5000);
</script>