<?php include("header.php");?>
<div class="rs-breadcrumbs">
    <div class="breadcrumbs-image">
        <img src="images/inner-pages/breadcums/products.webp" alt="breadcum">
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="breadcrumbs-text">
                    <h1 class="breadcrumbs-title">SERVO VOLTAGE STABILIZER (3-Phase)</h1>
                    <ul class="breadcrumbs-subtitle">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="javascript:;">SERVO VOLTAGE STABILIZER (3-Phase)</a></li>
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
											$data = glob("images/inner-pages/products/voltage-stabilizer/servo-voltage-stabilizer-phase-3/*.*");
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
										$data = glob("images/inner-pages/products/voltage-stabilizer/servo-voltage-stabilizer-phase-3/*.*");
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
                            <div class="revealOut innerh1"><span class="revealIn">Servo Voltage Stabilizer
                                    (3-Phase)</span></div>
                        </h1>
                        <hr>

                        <div class="inner-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="feature-list feature-col-12">
                                        <h4>Features</h4>
                                        <ul>
                                            <li>Fast correction speed up to 60V/sec. Variable speed servo motor and proportional control circuit provide a response time of 10msec to correct voltage fluctuations without noise or oscillations in output</li>
                                            <li>Reduced power loss and resultant lower running cost yield higher cost savings and help the customer recover the cost difference in few months</li>
                                            <li>Specially designed high performance controller based control circuit for ultra high reliability</li>
                                            <li>All parameter like O/P V, I/P V, high, low cut-off, time delay, overload, set by front control</li>
                                            <li>Accuracy ± 1% from no load to full load</li>
                                            <li>Plug and play single control card for easy serviceability</li>
                                            <li>Auto/Manual operation facility</li>
                                            <li>High efficiency > 98%</li>
                                           
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
                                    <th  rowspan="2"><strong>Capacity</strong></th>
                                    <td>6kVA to 100kVA Air Cooled (Three Phase)</td>
                                </tr>
                                <tr>
                                    <td>50kVA to 2000kVA Oil Cooled (Three Phase)</td>
                                </tr>
                                <tr>
                                    <th rowspan="2"><strong>Input Voltage Range</strong></th>
                                    <td>300-460V, 340-480V, 360-460V &amp;</td>
                                </tr>
                                <tr>
                                    <td>340-460V AC 3-Phase 50Hz Phase to Phase</td>
                                </tr>
                                <tr>
                                    <th><strong>System</strong></th>
                                    <td>4 Wire</td>
                                </tr>
                                <tr>
                                    <th><strong>Input Frequency</strong></th>
                                    <td>47 to 53 Hz</td>
                                </tr>
                                <tr>
                                    <th><strong>Output Voltage Adjustable</strong></th>
                                    <td>380 to 415V AC</td>
                                </tr>
                                <tr>
                                    <th><strong>Speed of Correction</strong></th>
                                    <td>Up to 60V/Sec</td>
                                </tr>
                                <tr>
                                    <th><strong>Output Voltage Regulation</strong></th>
                                    <td>± 1% (No Load)</td>
                                </tr>
                                <tr>
                                    <th><strong>Ambient Temperature</strong></th>
                                    <td>0 to 55 °C</td>
                                </tr>
                                <tr>
                                    <th><strong>Overload Capacity</strong></th>
                                    <td>1.2</td>
                                </tr>
                                <tr>
                                    <th><strong>Waveform Distortion</strong></th>
                                    <td>True Reproduction of Input</td>
                                </tr>
                                <tr>
                                    <th><strong>Insulation</strong></th>
                                    <td>Class F</td>
                                </tr>
                                <tr>
                                    <th><strong>Short Circuit Period &amp; Percentage</strong></th>
                                    <td>300% for 250 msec</td>
                                </tr>
                                <tr>
                                    <th><strong>Climate Condition</strong></th>
                                    <td>90% Rh Max. Non Condensing at 50 °C</td>
                                </tr>
                                <tr>
                                    <th><strong>Type of Cooling</strong></th>
                                    <td>
                                        Natural Air cooled up to 100kVA and <br>
                                        Oil Cooled up to 2000kVA
                                    </td>
                                </tr>
                                <tr>
                                    <th><strong>Mode of System</strong></th>
                                    <td>Fully Automatic/Manual</td>
                                </tr>
                                <tr>
                                    <th><strong>Protection</strong></th>
                                    <td>
                                        Low Voltage Protection, High Voltage Protection and single Phasing
                                        Prevention
                                        through contactor at O/P, Overload Protection,<br> Short-circuit Protection and
                                        power
                                        ON/OFF of SCVS through MCB/MCCB at Input
                                    </td>
                                </tr>
                                <tr>
                                    <th><strong>Optional Features</strong></th>
                                    <td>Bypass switch at Input to bypass the equipment in case of emergency</td>
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