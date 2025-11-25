<?php include("header.php");?>
<div class="rs-breadcrumbs">
    <div class="breadcrumbs-image">
        <img src="images/inner-pages/breadcums/products.webp" alt="breadcum">
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="breadcrumbs-text">
                    <h1 class="breadcrumbs-title">PowerXcel EnergiX : Online UPS 3 In 3 10kVA - 60kVA</h1>
                    <ul class="breadcrumbs-subtitle">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="javascript:;">PowerXcel EnergiX : Online UPS 3 In 3 10kVA - 60kVA</a></li>
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
											$data = glob("./images/online-ups/online-ups-3-in-3-out/2.webp");
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
										$data = glob("./images/online-ups/online-ups-3-in-3-out/2.webp");
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
                        <div class="card1-header">
                            <h1 class="mb-0">
                                <div class="revealOut innerh1">
                                    <span class="revealIn">PowerXcel EnergiX : Online UPS 3 In 3 10kVA - 60kVA</span>
                                </div>
                            </h1>
                            <img src="./images/logo/energix.webp" alt="logo" style="height: 45px;">
                        </div>

                        <hr>

                        <div class="inner-content">
                            <p>SAPT presents the PowerXcel ENERGIX Series, a cutting-edge 3-Phase Online UPS featuring
                                an IGBT-based rectifier, IGBT-based inverter, and a built-in isolation transformer.</p>

                            <p>Designed for industrial, commercial, and mission-critical applications, this UPS delivers
                                high efficiency, superior power quality, and complete electrical isolation, ensuring
                                uninterrupted and reliable performance.</p>
                            <p>Power factor affects electricity consumption by influencing the amount of current drawn
                                from the grid. A low power factor increases current flow, leading to higher energy
                                losses, overheating of equipment, and higher electricity bill</p>
                            <p>By improving power factor correction systems, energy losses can be minimized, electricity
                                bills reduced, and overall power system efficiency enhanced.</p>
                        </div>

                        <h4>Features</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="feature-list">
                                    <ul>
                                        <li>True Online Double Conversion Technology</li>
                                        <li>Fully Digital Signal Processing using the latest DSP Technology</li>
                                        <li>PFC Based Rectifier</li>
                                        <li>Wide Input Voltage Range</li>
                                        <li>Compatible with Engine Generator</li>
                                        <li>LCD/LED Display</li>
                                        <li>IGBT Inverter with Multiloop Control</li>
                                        <li>Output Isolation Between UPS and Critical Load</li>
                                        <li>Wheel Desing for easy movement and relocation</li>
                                        <li>Compact and Versatile Desing</li>
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
                                    <td colspan="1">kVA</td>
                                    <td>10</td>
                                    <td>15</td>
                                    <td>20</td>
                                    <td>30</td>
                                    <td>40</td>
                                    <td>50</td>
                                    <td>60</td>
                                </tr>
                                <tr>
                                    <td>kW</td>
                                    <td>8</td>
                                    <td>12</td>
                                    <td>16</td>
                                    <td>24</td>
                                    <td>32</td>
                                    <td>40</td>
                                    <td>48</td>
                                </tr>
                                <tr>
                                    <td>TYPE</td>
                                    <td colspan="7" align="center">Low Frequency Isolation Transformer Based</td>
                                </tr>
                                <tr>
                                    <th rowspan="6" align="center" valign="middle"><strong>INPUT</strong></th>
                                    <td>Phase</td>
                                    <td colspan="7" align="center">Three Phase (3P+N)</td>
                                </tr>
                                <tr>
                                    <td>Input Voltage Range</td>
                                    <td colspan="7" align="center">415V AC ± 25%</td>
                                </tr>
                                <tr>
                                    <td>Input Frequency</td>
                                    <td colspan="7" align="center">50HZ ± 5%</td>
                                </tr>
                                <tr>
                                    <td>Power Factor</td>
                                    <td colspan="7" align="center">>0.95%</td>
                                </tr>
                                <tr>
                                    <td>Input Ripple</td>
                                    <td colspan="7" align="center">
                                        < 5%</td>
                                </tr>

                                <tr>
                                    <td>Soft Start</td>
                                    <td colspan="7" align="center">0~100% 5 second</td>
                                </tr>
                                <tr>
                                    <th rowspan="8" align="center" valign="middle"><strong>OUTPUT</strong></th>
                                    <td>Nominal Voltage</td>
                                    <td colspan="7" align="center">380/400/415V AC, (3P+N)</td>
                                </tr>
                                <tr>
                                    <td>Regulation</td>
                                    <td colspan="7" align="center">±1% for Linear & Non-Linear Load</td>
                                </tr>
                                <tr>
                                    <td>Output Frequency</td>
                                    <td colspan="7" align="center">50HZ ± 0.5%</td>
                                </tr>
                                <tr>
                                    <td>Crest Factor</td>
                                    <td colspan="7" align="center">&gt; 3:1</td>
                                </tr>
                                <tr>
                                    <td>Power Factor</td>
                                    <td colspan="7" align="center">0.8</td>
                                </tr>
                                <tr>
                                    <td>Output THD</td>
                                    <td colspan="7" align="center">Linear Load < 3%, Non-Linear Load < 5%</td>
                                </tr>
                                <tr>
                                    <td>Efficiency</td>
                                    <td colspan="7" align="center">Up to >95% (Full Load)</td>
                                </tr>
                                <tr> </tr>
                                <tr>
                                    <th rowspan="7" align="center" valign="middle"><strong>BATTERY</strong></th>
                                    <td>DC Voltage</td>
                                    <td align="center" colspan="7">360-384 VDC (selectable)</td>
                                </tr>
                                <tr>
                                    <td>Number of Battery</td>
                                    <td align="center" colspan="7">30-32 (Selectable)</td>
                                </tr>
                                <tr>
                                    <td>Charging Current</td>
                                    <td align="center" colspan="7">1-20 Amp (settable) - Expandable to 40Amp</td>
                                </tr>
                                <tr></tr>
                                <tr></tr>
                                <tr></tr>
                                <tr></tr>
                                <tr>
                                    <th rowspan="3" align="center" valign="middle"><strong>BYPASS</strong></th>
                                    <td>Phase</td>
                                    <td colspan="7" align="center">Single Phase (3P+N)</td>
                                </tr>
                                <tr>
                                    <td>Manual</td>
                                    <td colspan="7" align="center">Maintenance Bypass Switch Provided</td>
                                </tr>
                                <tr>
                                    <td>Static</td>
                                    <td colspan="7" align="center">No Break (Optional)</td>
                                </tr>
                                <tr>
                                    <th rowspan="4" align="center" valign="middle"><strong>PROTECTION</strong></th>
                                    <td>Input Protection</td>
                                    <td colspan="7" align="center">Input Voltage, Frequency Under/Over limit Protection
                                    </td>
                                </tr>
                                <tr>
                                    <td>Output Protection</td>
                                    <td colspan="7" align="center">Over Current, Short-Circuit, Over/Under Voltage</td>
                                </tr>
                                <tr>
                                    <td>Battery Protection</td>
                                    <td colspan="7" align="center">Over Charge, Over Discharge protection</td>
                                </tr>
                                <tr>
                                    <td>Temperature Protection</td>
                                    <td colspan="7" align="center">Inverter Over Temperature Protection</td>
                                </tr>
                                <tr>
                                    <th rowspan="8" align="center" valign="middle"><strong>GENERAL PARAMETERS</strong>
                                    </th>
                                    <td>Working Environment</td>
                                    <td colspan="7" align="center">Temp: 10-550 C, Relative Humidity : 30-90%</td>
                                </tr>
                                <tr>
                                    <td>Display</td>
                                    <td colspan="7" align="center">LCD + Physical Button</td>
                                </tr>
                                <tr>
                                    <td>Alarm</td>
                                    <td colspan="7" align="center">Low Battery, Abnormal AC Input, UPS Failure, etc.
                                    </td>
                                </tr>
                                <tr>
                                    <td>Noise (dB)</td>
                                    <td colspan="7" align="center">
                                        < 55</td>
                                </tr>
                                <tr>
                                </tr>
                                <tr>
                                    <td>Dimensions (L*W*H)</td>
                                    <td colspan="2" align="center">690 X 386 X 719</td>
                                    <td colspan="2" align="center">689 X 387 X 756</td>
                                    <td colspan="2" align="center">850 X 412 X 1001</td>
                                    <td colspan="2" align="center">854 X 462 X 1261</td>
                                </tr>
                                <tr>
                                </tr>
                                <tr>
                                    <td>Weight (kg)</td>
                                    <td align="center">122</td>
                                    <td align="center">152</td>
                                    <td align="center">160</td>
                                    <td align="center">214</td>
                                    <td align="center">272</td>
                                    <td align="center">330</td>
                                    <td align="center">351</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="industries-section process-section" data-aos="fade-up" data-aos-duration="3000">
    <div class="container-fluid">
        <div class="sec-title text-center">
            <span class="sub-title">Application</span>
            <h2>Industries We Serve</h2>
        </div>
        <div class="outer-box">
            <div class="ind-carousel owl-carousel owl-theme">
                <div class="item">
                    <img src="./images/online-ups/industry/chemical.webp" alt="">
                    <div class="overl-name">
                        <h2>Chemical
                        </h2>
                    </div>
                </div>
                <div class="item">
                    <img src="./images/online-ups/industry/commercial.webp" alt="">
                    <div class="overl-name">
                        <h2>Commercial
                        </h2>
                    </div>
                </div>
                <div class="item">
                    <img src="./images/online-ups/industry/industrial.webp" alt="">
                    <div class="overl-name">
                        <h2>Industrial
                        </h2>
                    </div>
                </div>
                <div class="item">
                    <img src="./images/online-ups/industry/it.webp" alt="">
                    <div class="overl-name">
                        <h2>IT
                        </h2>
                    </div>
                </div>
                <div class="item">
                    <img src="./images/online-ups/industry/machines.webp" alt="">
                    <div class="overl-name">
                        <h2>Machines
                        </h2>
                    </div>
                </div>
                <div class="item">
                    <img src="./images/online-ups/industry/pharma.webp" alt="">
                    <div class="overl-name">
                        <h2>Pharma
                        </h2>
                    </div>
                </div>
                <div class="item">
                    <img src="./images/online-ups/industry/plastic.webp" alt="">
                    <div class="overl-name">
                        <h2>Plastic
                        </h2>
                    </div>
                </div>
                <div class="item">
                    <img src="./images/online-ups/industry/printing.webp" alt="">
                    <div class="overl-name">
                        <h2>Printing
                        </h2>
                    </div>
                </div>
                <div class="item">
                    <img src="./images/online-ups/industry/process.webp" alt="">
                    <div class="overl-name">
                        <h2>Process
                        </h2>
                    </div>
                </div>
                <div class="item">
                    <img src="./images/online-ups/industry/textile.webp" alt="">
                    <div class="overl-name">
                        <h2>Textile
                        </h2>
                    </div>
                </div>
                <div class="item">
                    <img src="./images/online-ups/industry/aerospace.webp" alt="">
                    <div class="overl-name">
                        <h2>Aerospace
                        </h2>
                    </div>
                </div>
                <div class="item">
                    <img src="./images/online-ups/industry/transport.webp" alt="">
                    <div class="overl-name">
                        <h2>Transport
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include("footer.php");?>