<footer class="main-footer footer">
    <div class="upper-box">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="widget about-widget">
                        <div class="logo"><a href="index.php"><img src="images/logo/saptpower-footer.webp" alt=""></a>
                        </div>
                        <div class="text">
                            “Powering industries with reliable power-conditioning solutions since 2016.<br>
                             Trusted partner for Pharma, Medical, and Engineering sectors.”
                        </div>
                        <!-- <ul class="social-links">
                            <li><a
                                    href="javascript:;"><span
                                        class="fab fa-facebook-f"></span></a></li>
                            <li><a href="javascript:;"><span
                                        class="fab fa-instagram"></span></a></li>
                            <li><a href="javascript:;"><span
                                        class="fab fa-youtube"></span></a></li>
                            <li><a href="javascript:;"><span
                                        class="fab fa-linkedin"></span></a></li>
                        </ul> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="widget links-widget">
                        <h4 class="widget_title">Quick Links</h4>
                        <div class="widget-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list">
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="company-profile.php">About Us</a></li>
                                        <li><a href="products.php">Products</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list">
                                        <li><a href="industries-we-serve.php">Industries We Serve</a></li>
                                        <li><a href="client.php">Client</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-widget widget">
                        <h4 class="widget_title">Get In Touch</h4>
                        <ul>
                            <li><i class="fa fa-map-marker-alt"></i>
                                68, Gangotri Estate Nr. Ramol Overbridge, Phase 4, GIDC Vatwa, Ahmedabad-382445, Gujarat.
                            </li>
                            <li><i class="fa fa-phone"></i><a href="tel:+917069043999"
                                    onclick="gtag('event', 'send', { 'event_category': 'click on Mobile', 'event_action': 'Mobile', 'event_label': '+91 70690 43999' });">
                                    +91 70690 43999</a>
                            </li>
                            <li><i class="fa fa-envelope"></i> <a
                                    href="mailto:sales@saptpower.com">sales@saptpower.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer-bottom">
    <div class="auto-container">
        <div class="wrapper-box">
            <div class="row m-0 align-items-center justify-content-center">
                <div class="copyright-text">Copyright © <?php echo date("Y");?> SAPT Power All
                    Rights Reserved.
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
<script src="js/jquery.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/wow.js"></script>
<script src="js/aos.js"></script> 
<script src="js/appear.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/slick-animation.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/script.js"></script>
<script src="js/jquery.validate.min.js?ver=<?php echo time(); ?>"></script>
<script src="js/index.js?ver=<?php echo time(); ?>"></script>
<script src="js/form-buzz.js?ver=<?php echo time(); ?>"></script>


<script src='https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.4/jquery.fancybox.pack.js'></script>
<script src="js/odometer.min.js"></script>
<script src="js/gsap.min.js"></script>
<script src="js/ScrollTrigger.min.js"></script>
<script src="js/ScrollSmoother.min.js"></script> 


<script>
    AOS.init();
  </script>


<script>
jQuery(document).ready(function() {
    jQuery("a.fancybox").fancybox()
});
</script>
<script>
jQuery(document).ready(function() {
    //FANCYBOX
    //https://github.com/fancyapps/fancyBox
    jQuery(".fancybox").fancybox({
        openEffect: 'elastic',
        closeEffect: "elastic",
    });
});
</script>
<script>
jQuery(function($) {
    var path = window.location.href;
    jQuery(".main-menu .navigation > li").each(function() {
        if (this.href === path) {
            jQuery(this).addClass("current");
        }
    });
});
</script>
<script>
var myCarousel = document.querySelector('#carousel-custom')
var carousel = new bootstrap.Carousel(myCarousel, {
    interval: 3000,
    pause: false
})
</script>
<script>
window.onload = (event) => {
    myFunction(event)
};

function myFunction(event) {


    let myvid = document.getElementById("myvid");

    //# if BIGGER THAN the 800 pixels
    if (screen.width > 1600) {
        myvid.src = "video/dolphin-laser-video.mp4";
    }

    //# if SMALLER THAN or EQUAL-TO the 800 pixels
    if (screen.width <= 1440) {
        myvid.src = "video/1440X900-dolphin-laser-video.mp4";
    }

    //# load URL (for playback)
    myvid.load();

}
function myFunction(event) {


    let myvid1 = document.getElementById("myvid1");

    //# if BIGGER THAN the 800 pixels
    if (screen.width > 1600) {
        myvid1.src = "images/company-profile/dolphin-laser-about.mp4";
    }

    //# if SMALLER THAN or EQUAL-TO the 800 pixels
    if (screen.width <= 1440) {
        myvid1.src = "images/company-profile/dolphin-laser-about.mp4";
    }

    //# load URL (for playback)
    myvid1.load();

}
</script>

<script>
  window.onload = function () {
    setTimeout(() => {
      document.getElementById('customer').innerHTML = 3000;
      document.getElementById('project').innerHTML = 800;
      document.getElementById('experience').innerHTML = 12;
    //   document.getElementById('award').innerHTML = 1200;
    }, 1000); // Delay to trigger odometer animation
  };
</script>

<script>
    (function ($) {
    "use strict";

    // Get Device width
    let device_width = window.innerWidth;

      if (device_width > 100) {
        let skewSetter = gsap.quickTo(".portfolio__item-5 img", "skewY"),
        clamp = gsap.utils.clamp(-15, 15);
        const smoother = ScrollSmoother.create({
          smooth: 1.35,
          effects: device_width < 1025 ? true : true,
          smoothTouch: false,
          normalizeScroll: false,
          ignoreMobileResize: true,
          onUpdate: self => skewSetter(clamp(self.getVelocity() / -80)),
          onStop: () => skewSetter(0)
        });
      };
    })(jQuery);
</script>


<script>
    $('.tab-link').click( function() {
	
	var tabID = $(this).attr('data-tab');
	
	$(this).addClass('active').siblings().removeClass('active');
	
	$('#tab-'+tabID).addClass('active').siblings().removeClass('active');
});
</script>


</body>

</html>