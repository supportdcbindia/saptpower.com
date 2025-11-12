<?php include("header.php");?>
<div class="rs-breadcrumbs">
    <div class="breadcrumbs-image">
        <img src="images/inner-pages/breadcums/products.webp" alt="breadcum">
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="breadcrumbs-text">
                    <h1 class="breadcrumbs-title">ELECTRO PLATING RECTIFIER</h1>
                    <ul class="breadcrumbs-subtitle">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="javascript:;">ELECTRO PLATING RECTIFIER</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="contact-details">
    <div class="container-fluid ">
        <div class="row">
            <div class="card">
                <div class="card-top">
                    <div class="card-top__left col-md-5  col-xs-12" style="">
                        <div class="sidebar__inner" style="position: relative; transform: translate3d(0px, 0px, 0px);">
                            <div class="sidebar__inner-top">
                                <div id="carousel-custom" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-outer">
                                        <div class="carousel-inner image-box">
                                            <?php
											$nb_elem_per_page = 50;
											$page = isset($_GET['page'])?intval($_GET['page']-1):0;
											$data = glob("./images/inner-pages/products/electro-plating-rectifier/*.*");
											$number_of_pages = intval(count($data)/$nb_elem_per_page)+1;
											?>
                                            <?php
											$first = true;
											foreach (array_slice($data, $page*$nb_elem_per_page, $nb_elem_per_page) as $p) {
											?>
                                            <div class="carousel-item  <?php if($first){ echo 'active'; $first = false;} ?>"
                                                id="my1">
                                                <a class="fancybox thumbnail" rel="ligthbox" href="<?php echo $p; ?>"
                                                    alt="Fiber Laser Marking Machine"
                                                    title="Fiber Laser Marking Machine">
                                                    <img src="<?php echo $p; ?>" alt="Fiber Laser Marking Machine"
                                                        title="Fiber Laser Marking Machine" class="img-fluid w-100" />
                                                </a>
                                            </div>
                                            <?php
											}
											?>
                                        </div>
                                        <?php
										$nb_elem_per_page = 50;
										$page = isset($_GET['page'])?intval($_GET['page']-1):0;
										$data = glob("./images/inner-pages/products/electro-plating-rectifier/*.*");
										$number_of_pages = intval(count($data)/$nb_elem_per_page)+1;
										if(count($data) > 1){
										?>
                                        <a class="left carousel-control" href="#carousel-custom" data-bs-slide="prev">
                                            <span class="fa fa-arrow-left"></span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel-custom" data-bs-slide="next">
                                            <span class="fa fa-arrow-right"></span>
                                        </a>
                                        <?php } ?>
                                    </div>
                                    <?php
									$first = true;
									$i=0;
									if(count($data) > 1){
									?>
                                    <ol class="carousel-indicators meartlab">
                                        <?php
										foreach (array_slice($data, $page*$nb_elem_per_page, $nb_elem_per_page) as $p) {
										?>
                                        <li data-bs-target="#carousel-custom" data-bs-slide-to="<?php echo $i; ?>"
                                            class="<?php if($first){ echo 'active'; $first = false;} ?>">
                                            <img src="<?php echo $p; ?>" alt="Fiber Laser Marking Machine"
                                                title="Fiber Laser Marking Machine" />
                                        </li>
                                        <?php
										$i++;
										}
										?>
                                    </ol>
                                    <?php
									}
									?>
                                </div>
                            </div>
                            <?php include("inner-inquiry-button.php");?>
                        </div>
                    </div>
                    <div class="card-top__right col-md-7 col-xs-12">
                        <h1>
                            <div class="revealOut innerh1"><span class="revealIn">Electro Plating Rectifier</span></div>
                        </h1>
                        <hr>

                        <div class="inner-content">
                            <div class="feature-list feature-col-12">
                                <h4>Features</h4>
                                <ul>
                                    <li>Circuit board are anti corrosion treated, screws are stainless steel material
                                    </li>
                                    <li>Power saving (high efficiency≥90%)</li>
                                    <li>Much less process time needed
                                    </li>
                                    <li>Low ripple at all output current</li>
                                    <li>Special treatment in corrosive factory</li>
                                    <li>Digital control, software programming</li>
                                    <li>High stability to load variation</li>
                                    <li>Long time high control accuacy (≥0.5%)</li>
                                    <li>RS485 communication Optional</li>
                                    <li>Amperehour for dosing system control</li>
                                    <li>Timer function for automatic running</li>
                                    <li>Resolution 1A and 0.1A</li>
                                    <li>Accurate output value setting</li>

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="table space pb-0">
            <div class="row">
                <h4>Functions</h4>
                <div class="col-md-12">
                    <div class="feature-list">
                        <ul>
                            <li>In case of power failure, after power resuming, the rectifier could switch on
                                automatically and start rising up to set current.</li>
                            <li>Keep last time setting mode and output value when power-on again</li>
                            <li>Constant current, constant voltage setting
                            </li>
                            <li>Local, remote control setting</li>
                            <li>Output current or voltage setting</li>
                            <li>Amperehour control for dosing system (Optional)</li>
                            <li>Time setting</li>
                            <li>Timer reset</li>
                            <li>Amperehour reset</li>
                            <li>START/STOP</li>
                            <li>Rectifier stop delay time setting</li>
                            <li>Protection shield function</li>
                            <li>DC output voltage, current, display</li>
                            <li>Rectifier running status display</li>
                            <li>Alarm indication and sound</li>
                            <li>Alarm type: Audible and visual alarm</li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="table space">
                    <h4>Specification</h4>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover producttable">
                          
                                <tbody>
                                    <tr>
                                        <th><strong><span class="markedContent"><span dir="ltr"
                                                        role="presentation">Rectifier type</span></span></strong></th>
                                        <td>I<span class="markedContent"><span dir="ltr" role="presentation">GBT high
                                                    frequency rectifier, </span><span dir="ltr"
                                                    role="presentation">modular structure</span></span></td>
                                    </tr>
                                    <tr>
                                       <th><strong><span class="markedContent"><span dir="ltr"
                                                        role="presentation">Working duty</span></span></strong></td>
                                        <td><span class="markedContent"><span dir="ltr" role="presentation">100% 24
                                                    hours continuous running</span></span></td>
                                    </tr>
                                    <tr>
                                     <th><strong><span class="markedContent"><span dir="ltr"
                                                        role="presentation">Supply voltage</span></span></strong></td>
                                        <td><span class="markedContent"><span dir="ltr" role="presentation">415W AC ±10%
                                                    3 phase 3 wire, 50-60Hz</span></span></td>
                                    </tr>
                                    <tr>
                                      <th><strong><span class="markedContent"><span dir="ltr"
                                                        role="presentation">Rated output voltage</span></span></strong>
                                        </td>
                                        <td><span class="markedContent"><span dir="ltr" role="presentation">DC 8V,
                                                    12V</span></span></td>
                                    </tr>
                                    <tr>
                                        <th><strong><span class="markedContent"><span dir="ltr"
                                                        role="presentation">Rated output current</span></span></strong>
                                        </th>
                                        <td><span class="markedContent"><span dir="ltr" role="presentation">DC 500, 750,
                                                    1000, 1500, 2000 Amp</span></span></td>
                                    </tr>
                                    <tr>
                                        <th><strong><span class="markedContent"><span dir="ltr"
                                                        role="presentation">Output range</span></span></strong></th>
                                        <td><span class="markedContent"><span dir="ltr"
                                                    role="presentation">0-100%</span></span></td>
                                    </tr>
                                    <tr>
                                        <th><strong><span class="markedContent"><span dir="ltr"
                                                        role="presentation">Control Accuracy</span></span></strong></th>
                                        <td><span class="markedContent"><span dir="ltr"
                                                    role="presentation">≤±0.5%</span></span></td>
                                    </tr>
                                    <tr>
                                        <th><strong><span class="markedContent"><span dir="ltr"
                                                        role="presentation">Power factor</span></span></strong></th>
                                        <td><span class="markedContent"><span dir="ltr"
                                                    role="presentation">≥0.94</span></span></td>
                                    </tr>
                                    <tr>
                                        <th><strong><span class="markedContent"><span dir="ltr"
                                                        role="presentation">Efficiency</span></span></strong></th>
                                        <td><span class="markedContent"><span dir="ltr" role="presentation">typical 90%
                                                    at rated output</span></span></td>
                                    </tr>
                                    <tr>
                                        <th><strong><span class="markedContent"><span dir="ltr"
                                                        role="presentation">Current ripple</span></span></strong></th>
                                        <td><span class="markedContent"><span dir="ltr" role="presentation">≥2% of rated
                                                    output current at constant </span><span dir="ltr"
                                                    role="presentation">current mode</span></span><span
                                                class="markedContent"><span dir="ltr" role="presentation">,
                                                </span></span><span class="markedContent"><span dir="ltr"
                                                    role="presentation">low ripple in whole range </span><span dir="ltr"
                                                    role="presentation">provide good plating quality.</span></span></td>
                                    </tr>
                                    <tr>
                                        <th><strong><span class="markedContent"><span dir="ltr"
                                                        role="presentation">Control mode</span></span></strong></th>
                                        <td><span class="markedContent"><span dir="ltr" role="presentation">constant
                                                    current / constant voltage</span></span></td>
                                    </tr>
                                    <tr>
                                        <th><strong><span class="markedContent"><span dir="ltr"
                                                        role="presentation">Cooling</span></span></strong></th>
                                        <td><span class="markedContent"><span dir="ltr" role="presentation">Forced air
                                                    cooling,</span></span></td>
                                    </tr>
                                    <tr>
                                        <th><strong><span class="markedContent"><span dir="ltr"
                                                        role="presentation">Protections</span></span></strong></th>
                                        <td><span class="markedContent"><span dir="ltr" role="presentation">Output
                                                    overcurrent protection </span><span dir="ltr"
                                                    role="presentation">Short circuit protection </span><span dir="ltr"
                                                    role="presentation">Over heat protection </span><span dir="ltr"
                                                    role="presentation">input over/under voltage protection</span><br
                                                    role="presentation"><span dir="ltr" role="presentation">IGBT Driving
                                                    protection</span></span></td>
                                    </tr>
                                    <tr>
                                        <th><strong><span class="markedContent"><span dir="ltr"
                                                        role="presentation">Ambient temperature</span></span></strong>
                                        </th>
                                        <td><span class="markedContent"><span dir="ltr" role="presentation">Max. 400,
                                                    derated operation up to 5011</span></span></td>
                                    </tr>
                                    <tr>
                                        <th><strong><span class="markedContent"><span dir="ltr"
                                                        role="presentation">Altitude</span></span></strong></th>
                                        <td><span class="markedContent"><span dir="ltr" role="presentation">≤2000m
                                                    altitude.</span><br role="presentation"><span dir="ltr"
                                                    role="presentation">3De-rated operation if higher.</span></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><strong><span class="markedContent"><span dir="ltr"
                                                        role="presentation">Humidity</span></span></strong></th>
                                        <td><span class="markedContent"><span dir="ltr" role="presentation">Max. 90% RH,
                                                    non-condensing</span></span></td>
                                    </tr>
                                </tbody>
                            </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include("footer.php");?>