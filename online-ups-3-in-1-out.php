<?php include("header.php");?>
<div class="rs-breadcrumbs">
    <div class="breadcrumbs-image">
         <img src="images/inner-pages/breadcums/products.webp" alt="breadcum">
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="breadcrumbs-text">
                    <h1 class="breadcrumbs-title">Online Ups 3 In 1 Out</h1>
                    <ul class="breadcrumbs-subtitle">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="javascript:;">Online Ups 3 In 1 Out</a></li>
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
											$data = glob("images/inner-pages/products/online-ups/online-ups-3-in-1-out/*.*");
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
										$data = glob("images/inner-pages/products/online-ups/online-ups-3-in-1-out/*.*");
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
                            <div class="revealOut innerh1"><span class="revealIn">Online Ups 3 In 1 Out</span></div>
                        </h1>
                        <hr>

                        <div class="inner-content">
                            <p>
                                SAPT offers the largest selection of power management and protection solutions available
                                in the industry. From the desktop to the data center, from AC-powered to DC-powered
                                equipment, SAPT is your one-stop partner for all your power needs.</p>

                            <p>The advance IGBT inverter, coupled with an isolation transformer, enhances the
                                reliability and load adaptability. This unique construction for input and output
                                isolation provides the advantages of noise rejection as well as clean and safe neutral
                                line to the load.</p>
                        </div>

                        <h4>Features</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="feature-list">
                                    <ul>
                                        <li>Fully Digital Signal Processing using the latest DSP technology</li>
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

                     <table class="table table-bordered table-striped table-hover producttable">
                            <tbody>
                                <tr>
                                    <th rowspan="3" align="center" valign="middle"><strong>CAPACITY</strong></th>
                                    <td>kVA</td>
                                    <td>7.5</td>
                                    <td>10</td>
                                    <td>15</td>
                                    <td>20</td>
                                    <td>25</td>
                                    <td>30</td>
                                </tr>
                                <tr>
                                    <td>kW</td>
                                    <td>6.75</td>
                                    <td>9</td>
                                    <td>13.5</td>
                                    <td>18</td>
                                    <td>22.5</td>
                                    <td>27</td>
                                </tr>
                                <tr>
                                    <td>TYPE</td>
                                    <td colspan="6" align="center">Low Frequency Transformer based True On line Double
                                        Conversion</td>
                                </tr>
                                <tr>
                                    <th rowspan="6" align="center" valign="middle"><strong>INPUT</strong></th>
                                    <td>Phase</td>
                                    <td colspan="6" align="center">Three Phase + N (Four Wire)</td>
                                </tr>
                                <tr>
                                    <td>Input PF</td>
                                    <td colspan="6" align="center">0.9 (Standard) /1 (Customized)</td>
                                </tr>
                                <tr>
                                    <td>Input Voltage Range</td>
                                    <td colspan="6" align="center">415 VAC ± 25%</td>
                                </tr>
                                <tr>
                                    <td>Input Frequency</td>
                                    <td colspan="6" align="center">50Hz ± 10%</td>
                                </tr>
                                <tr>
                                    <td>Input Ripple</td>
                                    <td colspan="6" align="center">&lt; 5%</td>
                                </tr>
                                <tr>
                                    <td>Soft Start</td>
                                    <td colspan="6" align="center">0 1 ~ 00 % 5 Second</td>
                                </tr>
                                <tr>
                                    <th rowspan="8" align="center" valign="middle"><strong>OUTPUT</strong></th>
                                    <td>Nominal Voltage</td>
                                    <td colspan="6" align="center">220V/230V/240V AC, 1P+N</td>
                                </tr>
                                <tr>
                                    <td>Output Voltage Regulation</td>
                                    <td colspan="6" align="center">±1 % for Linear &amp; Non Linear Load</td>
                                </tr>
                                <tr>
                                    <td>Output Frequency</td>
                                    <td colspan="6" align="center">50Hz ± 0.5%</td>
                                </tr>
                                <tr>
                                    <td>Crest Factor</td>
                                    <td colspan="6" align="center">&gt; 3:1</td>
                                </tr>
                                <tr>
                                    <td>Output THD</td>
                                    <td colspan="6" align="center">Pure Sine Wave</td>
                                </tr>
                                <tr>
                                    <td>Dynamic Characteristics</td>
                                    <td colspan="6" align="center">Instant Voltage &lt; ±5% (From 0 to 100%), recover
                                        time &lt; 10ms</td>
                                </tr>
                                <tr>
                                    <td>Overload Capacity</td>
                                    <td colspan="6" align="center">At 115% Load Normal Work, 125% Load 10 Minute, 150%
                                        Load 1 Minute, 200% Load 1 Second</td>
                                </tr>
                                <tr>
                                    <td>Inverter Efficiency</td>
                                    <td colspan="6" align="center">More than 93% (Full Load)</td>
                                </tr>
                                <tr>
                                    <th rowspan="7" align="center" valign="middle"><strong>BATTERY</strong></th>
                                    <td>Nominal DC Voltage</td>
                                    <td align="center">360</td>
                                    <td align="center">360</td>
                                    <td align="center">360</td>
                                    <td align="center">360</td>
                                    <td align="center">360</td>
                                    <td align="center">360</td>
                                </tr>
                                <tr>
                                    <td>Float Charging Voltage</td>
                                    <td align="center">406</td>
                                    <td align="center">406</td>
                                    <td align="center">406</td>
                                    <td align="center">406</td>
                                    <td align="center">406</td>
                                    <td align="center">406</td>
                                </tr>
                                <tr>
                                    <td>Equalized Charging Voltage</td>
                                    <td align="center">426</td>
                                    <td align="center">426</td>
                                    <td align="center">426</td>
                                    <td align="center">426</td>
                                    <td align="center">426</td>
                                    <td align="center">426</td>
                                </tr>
                                <tr>
                                    <td>Charging Current</td>
                                    <td colspan="6" align="center">2 – 10 Amp Settable</td>
                                </tr>
                                <tr>
                                    <td>Low Voltage Alarm</td>
                                    <td align="center">315</td>
                                    <td align="center">315</td>
                                    <td align="center">315</td>
                                    <td align="center">315</td>
                                    <td align="center">315</td>
                                    <td align="center">315</td>
                                </tr>
                                <tr>
                                    <td>Low Voltage Trip</td>
                                    <td align="center">300</td>
                                    <td align="center">300</td>
                                    <td align="center">300</td>
                                    <td align="center">300</td>
                                    <td align="center">300</td>
                                    <td align="center">300</td>
                                </tr>
                                <tr>
                                    <td>High Voltage Trip</td>
                                    <td align="center">435</td>
                                    <td align="center">435</td>
                                    <td align="center">435</td>
                                    <td align="center">435</td>
                                    <td align="center">435</td>
                                    <td align="center">435</td>
                                </tr>
                                <tr>
                                    <th rowspan="3" align="center" valign="middle"><strong>BYPASS</strong></th>
                                    <td>Phase</td>
                                    <td colspan="6" align="center">Single Phase (P+N)</td>
                                </tr>
                                <tr>
                                    <td>Manual</td>
                                    <td colspan="6" align="center">Maintenance Bypass Switch Provided</td>
                                </tr>
                                <tr>
                                    <td>Static</td>
                                    <td colspan="6" align="center">No Break</td>
                                </tr>
                                <tr>
                                    <th rowspan="4" align="center" valign="middle"><strong>PROTECTION</strong></th>
                                    <td>Input Protection</td>
                                    <td colspan="6" align="center">Input Voltage, Frequency Under/Over limit Protection
                                    </td>
                                </tr>
                                <tr>
                                    <td>Output Protection</td>
                                    <td colspan="6" align="center">Over Current, Short-circuit, Over/Under Voltage</td>
                                </tr>
                                <tr>
                                    <td>Battery Protection</td>
                                    <td colspan="6" align="center">Over Current, Short-circuit, Over/Under Voltage</td>
                                </tr>
                                <tr>
                                    <td>Temperature Protection</td>
                                    <td colspan="6" align="center">Inverter over temperature Protection</td>
                                </tr>
                                <tr>
                                    <th rowspan="8" align="center" valign="middle"><strong>GENERAL PARAMETERS</strong>
                                    </th>
                                    <td>Working Environment</td>
                                    <td colspan="6" align="center">Temp: 10 -55 °C, Relative humidity: 30% – 90%</td>
                                </tr>
                                <tr>
                                    <td>Communication Interface</td>
                                    <td colspan="6" align="center">RS232/RS485, optional dry contact, SNMP card(For
                                        remote)</td>
                                </tr>
                                <tr>
                                    <td>Parallel Operation</td>
                                    <td colspan="6" align="center">Hot stand by</td>
                                </tr>
                                <tr>
                                    <td>Protection Level</td>
                                    <td colspan="6" align="center">IP21</td>
                                </tr>
                                <tr>
                                    <td>Safety performance</td>
                                    <td colspan="6" align="center">V in-n, V out-n 2 Vac, creepage&lt;1 mA, Insulating
                                        resistance &gt;2 MΩ (500V DC)</td>
                                </tr>
                                <tr>
                                    <td>Noise (dB)</td>
                                    <td colspan="2" align="center">50 – 55</td>
                                    <td colspan="2" align="center">55 – 60</td>
                                    <td colspan="2" align="center">55 – 60</td>
                                </tr>
                                <tr>
                                    <td>Dimension W X H X D (mm)</td>
                                    <td colspan="3" align="center">390 X 680 X 680</td>
                                    <td colspan="3" align="center">580 X 990 X 750</td>
                                </tr>
                                <tr>
                                    <td>Weight (kg)</td>
                                    <td align="center">98</td>
                                    <td align="center">110</td>
                                    <td align="center">145</td>
                                    <td align="center">165</td>
                                    <td align="center">190</td>
                                    <td align="center">260</td>
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