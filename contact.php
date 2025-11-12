<?php include("header.php");?>
<div class="rs-breadcrumbs">
    <div class="breadcrumbs-image">
        <img src="images/inner-pages/breadcums/contact-us.webp" alt="breadcum">
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="breadcrumbs-text">
                    <h1 class="breadcrumbs-title">Contact Us</h1>
                    <ul class="breadcrumbs-subtitle">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="javascript:;">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="contact-details">
    <div class="container pb-0">
        <div class="row">
            <div class="col-xl-4 col-lg-6">
                <div class="contact-details__right mb-5">
                    <div class="LCCCard_card__JE6Mv LCCCard_card__JE6Mv-new">
                        <ul class="list-unstyled contact-details__info">
                            <li>
                                <div class="icon">
                                    <span class="fa fa-map-marker-alt"></span>
                                </div>
                                <div class="text">
                                    <h6 class="mb-1">Visit anytime</h6>
                                    <span>68, Gangotri Estate Nr. Ramol Overbridge, Phase 4, GIDC Vatwa, Ahmedabad-382445, Gujarat.</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="contact-details__right mb-5">
                    <div class="LCCCard_card__JE6Mv LCCCard_card__JE6Mv-new">
                        <ul class="list-unstyled contact-details__info">
                            <li>
                                <div class="icon bg-theme-color2">
                                    <span class="fa fa-phone"></span>
                                </div>
                                <div class="text">
                                    <h6 class="mb-1">Have any question?</h6>
                                    <a href="tel:+918141660211">+91 81416 60211</a><br>
                                    <a href="tel:++919426835656">+91 94268 35656</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="contact-details__right mb-5">
                    <div class="LCCCard_card__JE6Mv LCCCard_card__JE6Mv-new">
                        <ul class="list-unstyled contact-details__info">
                            <li>
                                <div class="icon">
                                    <span class="fa fa-envelope"></span>
                                </div>
                                <div class="text">
                                    <h6 class="mb-1">Write email</h6>
                                    <a href="mailto:sales@saptpower.com">sales@saptpower.com</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<div class="contact-details mb-3 mb-lx-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 my-custom-modal">
                <div class="sec-title">
                    <span class="sub-title">Send us email</span>
                    <h2>Feel free to write</h2>
                </div>
                <form class="form-horizontal form3" action="inquiry-action.php" method="post" novalidate="novalidate">
                    <div class="form-group has-feedback">
                        <div class="col-md-12">
                            <input name="name" id="name" type="text" placeholder="Name" class="form-control">
                        </div>
                    </div>
                    <div class="form-group has-feedback">
                                    <div class="col-md-12">
                                        <input name="cname" id="cname" type="text" placeholder="Company Name"
                                            class="form-control">
                                    </div>
                                </div>
                    <div class="form-group has-feedback">
                        <div class="col-md-12">
                            <input name="email" id="email" type="text" placeholder="E-Mail Address"
                                class="form-control">
                        </div>
                    </div>
                    <div class="form-group has-feedback class-feedback">
                        <div class="col-md-12">
                            <input name="city" id="city" type="text" placeholder="City" class="form-control">
                        </div>
                    </div>
                    <div class="form-group has-feedback">
                        <div class="col-md-12">
                            <input name="number" id="number" type="tel" placeholder="Phone" maxlength="15"
                                minlength="10" class="form-control number21">
                        </div>
                    </div>
                    <div class="form-group has-feedback">
                        <div class="col-md-12">
                            <textarea class="form-control" name="message" id="message"
                                placeholder="Requirement"></textarea>
                        </div>
                    </div>
                    <div class="form-group has-feedback">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-8 col position-relative">
                                    <input name="captcha" id="captcha" placeholder="Captcha Code" class="form-control"
                                        type="text">
                                </div>
                                <div class="col-md-4 col">
                                    <img src="captcha.php" class="capside">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group has-feedback">
                        <div class="col-md-12 col-sm-3 col-xs-12">
                            <input name="submit" class="submit submitbutton" type="submit" value="Submit Now!">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<section class="map-section py-0">
   <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d470202.50168750837!2d72.649719!3d22.970215!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e889ad99082d5%3A0xa23f547758ca8de5!2sSAPT%20POWERTRONICS%20PVT%20LTD!5e0!3m2!1sen!2sus!4v1755935447782!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<?php include("footer.php");?>