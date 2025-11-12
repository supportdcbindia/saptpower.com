<?php include("header.php");?>
<div class="rs-breadcrumbs">
    <div class="breadcrumbs-image">
       <img src="images/inner-pages/breadcums/products.webp" alt="breadcum">
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="breadcrumbs-text">
                    <h1 class="breadcrumbs-title">ELEVATOR BACK-UP UPS</h1>
                    <ul class="breadcrumbs-subtitle">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="javascript:;">ELEVATOR BACK-UP UPS</a></li>
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
											$data = glob("./images/inner-pages/products/elevator-back-up-ups/*.*");
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
										$data = glob("./images/inner-pages/products/elevator-back-up-ups/*.*");
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
                            <div class="revealOut innerh1"><span class="revealIn">Elevator Back-Up Ups</span></div>
                        </h1>
                        <hr>

                        <div class="inner-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="feature-list feature-col-12">
                                        <h4>Features</h4>
                                        <ul>
                                            <li>State of art IGBT based PWM technology to increase crest factor
                                                Tolerance & Dynamic Stability</li>

                                            <li>Very low Total Harmonic Distortion 3% All necessary protection like
                                                Short circuit Over Temp., Battery Low/High, Mains MCB Tripped etc. with
                                                comprehensive display</li>
                                            <li>High Inrush capability to handle Lift during Startup</li>

                                            <li>100% Pure, Reliable and Regulated Power Unbalanced Load Handling
                                                Capability</li>
                                            <li>Runs heavy duty appliances/equipment</li>
                                            <li>Extended overload capability (upto 300%)</li>
                                            <li>Startup without mains (Cold Start)</li>
                                            <li>Generator compatible</li>
                                            <li>Extended power back-up Time</li>
                                            <li>Built-In Galvanic Isolation Transformer</li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                    <th rowspan="3"><strong>TYPE</strong></th>
                                    <td>Type</td>
                                    <td>3-Phase Input – 3 Phase Output</td>
                                </tr>
                                <tr>
                                    <td>Model</td>
                                    <td>POWERSERIES</td>
                                </tr>
                                <tr>
                                    <td>Capacity</td>
                                    <td>5kVA to 100kVA</td>
                                </tr>

                                <tr>
                                    <th rowspan="3"><strong>INPUT</strong></th>
                                    <td>No. of Phases</td>
                                    <td>3-Phase 4 Wire</td>
                                </tr>
                                <tr>
                                    <td>Voltage Range</td>
                                    <td>310V – 480V AC</td>
                                </tr>
                                <tr>
                                    <td>Input Frequency Range</td>
                                    <td>45 to 55Hz</td>
                                </tr>

                                <tr>
                                    <th rowspan="11"><strong>OUTPUT</strong></th>
                                    <td>Load PF Range</td>
                                    <td>0.8 Lagging</td>
                                </tr>
                                <tr>
                                    <td>Phase</td>
                                    <td>3-Phase 4 Wire</td>
                                </tr>
                                <tr>
                                    <td>Output Waveform</td>
                                    <td>Pure Sine Wave</td>
                                </tr>
                                <tr>
                                    <td>Voltage</td>
                                    <td>400V ± 2%</td>
                                </tr>
                                <tr>
                                    <td>Frequency</td>
                                    <td>50Hz ± 0.1%</td>
                                </tr>
                                <tr>
                                    <td>Load Crest Factor</td>
                                    <td>&gt;4:1</td>
                                </tr>
                                <tr>
                                    <td>Output Voltage THD</td>
                                    <td>≤3% on Linear Load</td>
                                </tr>
                                <tr>
                                    <td>Loading Capacity</td>
                                    <td>110% for 2 Minutes</td>
                                </tr>
                                <tr>
                                    <td>Transient Recovery</td>
                                    <td>±4% under full Load Change and corrected within 5 Cycles</td>
                                </tr>
                                <tr>
                                    <td>Phase Displacement</td>
                                    <td>120 ± 1</td>
                                </tr>
                                <tr>
                                    <td>Overload Capacity</td>
                                    <td>105% continuous, 300% for 60 Seconds</td>
                                </tr>

                                <tr>
                                    <th><strong>BY-PASS</strong></th>
                                    <td>Maintenance By-pass</td>
                                    <td>Available</td>
                                </tr>

                                <tr>
                                    <th rowspan="4"><strong>BATTERY</strong></th>
                                    <td>No. of 12V Batteries</td>
                                    <td>5 &amp; 7.5kVA (10) – 10 &amp; 15kVA (15) – 20 &amp; 25kVA (20) – 30 &amp;
                                        50kVA (30)</td>
                                </tr>
                                <tr>
                                    <td>Voltage</td>
                                    <td>120VDC – 360 VDC</td>
                                </tr>
                                <tr>
                                    <td>Battery Charging Current</td>
                                    <td>1 Amp to 10 Amp</td>
                                </tr>
                                <tr>
                                    <td>Battery Recommendation</td>
                                    <td>From 26Ah to 200Ah</td>
                                </tr>

                                <tr>
                                    <th rowspan="6"><strong>GENERAL PARAMETER</strong></th>
                                    <td>Indication</td>
                                    <td>All parameter shown in LCD Panel &amp; LED Indicator</td>
                                </tr>
                                <tr>
                                    <td>Protection</td>
                                    <td>Output Overload &amp; Short Circuit, Output under &amp; overvoltage, DC
                                        under &amp; overvoltage, Single Phasing &amp; Phase unbalance (for 3-Ph
                                        Input Only)</td>
                                </tr>
                                <tr>
                                    <td>Cooling</td>
                                    <td>Forced Air Cooling</td>
                                </tr>
                                <tr>
                                    <td>UPS Efficiency</td>
                                    <td>≥ 95%</td>
                                </tr>
                                <tr>
                                    <td>Working Environment</td>
                                    <td>Temp : -10 – 50°C, relative Humidity : 30% – 90%</td>
                                </tr>
                                <tr>
                                    <td>Acoustic noise</td>
                                    <td>Less than 55dB at 1 Meter</td>
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