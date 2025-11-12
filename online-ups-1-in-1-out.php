<?php include("header.php");?>
<div class="rs-breadcrumbs">
    <div class="breadcrumbs-image">
        <img src="images/inner-pages/breadcums/products.webp" alt="product">
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="breadcrumbs-text">
                    <h1 class="breadcrumbs-title">Online Ups 1 In 1 Out</h1>
                    <ul class="breadcrumbs-subtitle">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="javascript:;">Online Ups 1 In 1 Out</a></li>
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
											$data = glob("images/inner-pages/products/online-ups/online-ups-1in-1-out/*.*");
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
										$data = glob("images/inner-pages/products/online-ups/online-ups-1in-1-out/*.*");
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
                    <div class="card-top__right col-md-7 col-sm-12 col-xs-12">
                        <h1>
                            <div class="revealOut innerh1"><span class="revealIn">Online Ups 1 In 1 Out</span></div>
                        </h1>
                        <hr>
                       
                        <div class="inner-content">
                            <p>SAPT offers the largest selection of power management and protection solutions available
                                in the industry. From the desktop to the data center, from AC-powered to DC-powered
                                equipment, SAPT is your one-stop partner for all your power needs.</p>

                            <p>The advance IGBT inverter, coupled with an isolation transformer, enhances the
                                reliability and load adaptability. This unique construction for input and output
                                isolation provides the advantages of noise rejection as well as clean and safe neutral
                                line to the load. </p>
                        </div>

                        <h4>Features</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="feature-list">
                                    <ul>
                                    <li>Fully Digital Signal Processing using the latest DSP technology </li>
                                    <li>IGBT Rectifier so high input power factor</li>
                                    <li>Dynamic Bypass with Eco mode</li>
                                    <li>Remote management</li>
                                    <li>Wide input voltage range</li>
                                    <li>Compatible with Engine Generator</li>
                                    <li>High reliability for Maximum System Availability</li>
                                    <li>Handles 3: Crest Factor Loads</li>
                                    <li>Intelligent Battery Management</li>
                                    <li>Large LCD Display and Mimic Panel for Real- time information</li>
                                    <li>Output isolation between UPS and Critical Load</li>
                                    <li>Low electro-magnetic interference</li>
                                    <li>Complies with international safety standards</li>
                                </ul>
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
                        <table class="table table-bordered table-striped table-hover producttable mb-0">
                            <tbody>
                                <tr>
                                    <th rowspan="3">
                                        <strong>CAPACITY</strong>
                                    </th>
                                    <td>kVA</td>
                                    <td>3kVA</td>
                                    <td>5kVA</td>
                                    <td>7.5kVA</td>
                                    <td>10kVA</td>
                                </tr>
                                <tr>
                                    <td>WATT</td>
                                    <td>2.7kW</td>
                                    <td>4.5kW</td>
                                    <td>6.75kW</td>
                                    <td>9kW</td>
                                </tr>
                                <tr>
                                    <td>TYPE</td>
                                    <td colspan="4">Low Frequency Transformer based True On line Double Conversion</td>
                                </tr>

                                <tr>
                                    <th rowspan="6" class="text-center align-middle"><strong>INPUT</strong></th>
                                    <td>Phase</td>
                                    <td colspan="4">Single Phase</td>
                                </tr>
                                <tr>
                                    <td>Input PF</td>
                                    <td colspan="4">0.9 (Standard) /1 (Customized)</td>
                                </tr>
                                <tr>
                                    <td>Input Voltage Range</td>
                                    <td colspan="4">230VAC ±25%</td>
                                </tr>
                                <tr>
                                    <td>Input Frequency</td>
                                    <td colspan="4">50Hz ± 10%</td>
                                </tr>
                                <tr>
                                    <td>Input Ripple</td>
                                    <td colspan="4">&lt; 5%</td>
                                </tr>
                                <tr>
                                    <td>Soft Start</td>
                                    <td colspan="4">0 ~100 % 5 Second</td>
                                </tr>

                                <tr>
                                     <th rowspan="8" class="text-center align-middle"><strong>OUTPUT</strong></td>
                                    <td>Nominal Voltage</td>
                                    <td colspan="4">220V/230V/240V AC, 1P+N</td>
                                </tr>
                                <tr>
                                    <td>Output Voltage Regulation</td>
                                    <td colspan="4">±1 % for Linear &amp; Non Linear Load</td>
                                </tr>
                                <tr>
                                    <td>Output Frequency</td>
                                    <td colspan="4">50Hz ± 0.5%</td>
                                </tr>
                                <tr>
                                    <td>Crest Factor</td>
                                    <td colspan="4">&gt; 3:1</td>
                                </tr>
                                <tr>
                                    <td>Output THD</td>
                                    <td colspan="4">Linear Load &lt; 3%, Non -Linear Load &lt; 5%</td>
                                </tr>
                                <tr>
                                    <td>Dynamic Characteristics</td>
                                    <td colspan="4">Instant Voltage &lt; ±5% (From 0 to</td>
                                </tr>
                                <tr>
                                    <td>Overload Capacity</td>
                                    <td colspan="4">At 115% Load Normal Work, 125% Load 10 Minute<br>150% Load 1 Minute,
                                        200% Load 1 Second</td>
                                </tr>
                                <tr>
                                    <td>Inverter Efficiency</td>
                                    <td colspan="4">More than 93% (Full Load)</td>
                                </tr>

                                <tr>
                                   <th rowspan="5" class="text-center align-middle"><strong>BATTERY</strong></td>
                                    <td>Nominal DC Voltage</td>
                                    <td>96V DC</td>
                                    <td>180V DC</td>
                                    <td>180V DC</td>
                                    <td>180V DC</td>
                                </tr>
                                <tr>
                                    <td>Charging Current</td>
                                    <td colspan="4">2-10 Amp Settable</td>
                                </tr>
                                <tr>
                                    <td>Low Voltage Alarm</td>
                                    <td>84</td>
                                    <td>158</td>
                                    <td>158</td>
                                    <td>158</td>
                                </tr>
                                <tr>
                                    <td>Low Voltage Trip</td>
                                    <td>80</td>
                                    <td>150</td>
                                    <td>150</td>
                                    <td>150</td>
                                </tr>
                                <tr>
                                    <td>High Voltage Trip</td>
                                    <td>116</td>
                                    <td>218</td>
                                    <td>218</td>
                                    <td>218</td>
                                </tr>

                                <tr>
                                   <th rowspan="3" class="text-center align-middle"><strong>BYPASS</strong></td>
                                    <td>Phase</td>
                                    <td colspan="4">Single Phase (P+N)</td>
                                </tr>
                                <tr>
                                    <td>Manual</td>
                                    <td colspan="4">Maintenance Bypass Switch Provided</td>
                                </tr>
                                <tr>
                                    <td>Static</td>
                                    <td colspan="4">No Break</td>
                                </tr>

                                <tr>
                                    <th rowspan="4" class="text-center align-middle"><strong>PROTECTION</strong></td>
                                    <td>Input Protection</td>
                                    <td colspan="4">Input Voltage, Frequency Under/Over limit Protection</td>
                                </tr>
                                <tr>
                                    <td>Output Protection</td>
                                    <td colspan="4">Over Current, Short-circuit, Over/Under Voltage</td>
                                </tr>
                                <tr>
                                    <td>Battery Protection</td>
                                    <td colspan="4">Over Charge, Over-discharge Protection</td>
                                </tr>
                                <tr>
                                    <td>Temperature Protection</td>
                                    <td colspan="4">Inverter Over Temperature Protection</td>
                                </tr>

                                <tr>
                                    <th rowspan="8" class="text-center align-middle">
                                        <strong>GENERAL<br>PARAMETERS</strong></td>
                                    <td>Working Environment</td>
                                    <td colspan="4">Temp: 10 - 55°C, Relative humidity : 30% – 90%</td>
                                </tr>
                                <tr>
                                    <td>Communication Interface</td>
                                    <td colspan="4">RS232/RS485, optional dry contact, SNMP card<br>(For remote control
                                        via internet)</td>
                                </tr>
                                <tr>
                                    <td>Parallel Operation</td>
                                    <td colspan="4">Hot standby</td>
                                </tr>
                                <tr>
                                    <td>Protection Level</td>
                                    <td colspan="4">IP21</td>
                                </tr>
                                <tr>
                                    <td>Safety performance</td>
                                    <td colspan="4">V in-n, V out-n 2000Vac, creepage&lt;10mA,<br>Insulating resistance
                                        &gt;2 MΩ (5 V DC)</td>
                                </tr>
                                <tr>
                                    <td>Noise (dB)</td>
                                    <td colspan="2">50-55</td>
                                    <td colspan="2">55-60</td>
                                </tr>
                                <tr>
                                    <td>Dimension W x H x D (mm)</td>
                                    <td colspan="2">345 x 565 x 610</td>
                                    <td colspan="2">390 x 680 x 680</td>
                                </tr>
                                <tr>
                                    <td>Weight (kg)</td>
                                    <td>55</td>
                                    <td>66</td>
                                    <td>91</td>
                                    <td>100</td>
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