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
											$data = glob("./images/online-ups/online-ups-3-in-1-out.webp");
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
										$data = glob("./images/online-ups/online-ups-3-in-1-out.webp");
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
                                    <span class="revealIn">Online Ups 3 In 1 Out</span>
                                </div>
                            </h1>
                            <img src="./images/logo/nova.webp" alt="logo" style="height: 45px;">

                        </div>
                        
                        <hr>

                        <div class="inner-content">
                            <p>
                                SAPT introduces the PowerXcel NOVA Series, a robust and reliable 3-Phase Input, I-Phase
                                Output Online UPS with a built-in isolation transformer, SCR-based rectifier, and
                                IGBT-based inverter.</p>

                            <p>Designed for critical applications, this UPS offers stable, noise-free, and high-quality
                                power, ensuring complete protection for sensitive equipment and industrial loads.</p>
                        </div>

                        <h4>Features</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="feature-list">
                                    <ul>
                                        <li>True Online Double Conversion Technology</li>
                                        <li>Fully Digital Signal Processing using the latest DSP Technology</li>
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
                                    <td>kVA</td>
                                    <td>10</td>
                                    <td>15</td>
                                    <td>20</td>
                                    <td colspan="3">30</td>
                                </tr>
                                <tr>
                                    <td>kW</td>
                                    <td>8</td>
                                    <td>12</td>
                                    <td>16</td>
                                    <td colspan="3">24</td>
                                </tr>
                                <tr>
                                    <td>TYPE</td>
                                    <td colspan="6" align="center">Low Frequency Isolation Transformer Based</td>
                                </tr>
                                <tr>
                                    <th rowspan="6" align="center" valign="middle"><strong>INPUT</strong></th>
                                    <td>Phase</td>
                                    <td colspan="6" align="center">Three Phase (3P+N)</td>
                                </tr>
                                <tr>

                                </tr>
                                <tr>
                                    <td>Input Voltage Range</td>
                                    <td colspan="6" align="center">415V AC ± 25%</td>
                                </tr>
                                <tr>
                                    <td>Input Frequency</td>
                                    <td colspan="6" align="center">50HZ ± 5%</td>
                                </tr>
                                <tr>
                                    <td>Input Ripple</td>
                                    <td colspan="6" align="center">
                                        < 5%</td>
                                </tr>
                                <tr>
                                    <td>Soft Start</td>
                                    <td colspan="6" align="center">0~100% 5 second</td>
                                </tr>
                                <tr>
                                    <th rowspan="8" align="center" valign="middle"><strong>OUTPUT</strong></th>
                                    <td>Nominal Voltage</td>
                                    <td colspan="6" align="center">220/230/240V AC, (IP+N)</td>
                                </tr>
                                <tr>
                                    <td>Regulation</td>
                                    <td colspan="6" align="center">±1% for Linear & Non-Linear Load</td>
                                </tr>
                                <tr>
                                    <td>Output Frequency</td>
                                    <td colspan="6" align="center">50HZ ± 0.5%</td>
                                </tr>
                                <tr>
                                    <td>Crest Factor</td>
                                    <td colspan="6" align="center">&gt; 3:1</td>
                                </tr>
                                <tr>
                                    <td>Power Factor</td>
                                    <td colspan="6" align="center">0.8</td>
                                </tr>
                                <tr>
                                    <td>Output THD</td>
                                    <td colspan="6" align="center">Linear Load < 3%, Non-Linear Load < 5%</td>
                                </tr>
                                <tr>
                                    <td>Efficiency</td>
                                    <td colspan="6" align="center">At 115% Load Normal Work, 125% Load 10 Minute, 150%
                                        Load 1 Minute, 200% Load 1 Second</td>
                                </tr>
                                <tr>
                                    <td>Inverter Efficiency</td>
                                    <td colspan="6" align="center">Up to 85% (Full Load)</td>
                                </tr>
                                <tr>
                                    <th rowspan="7" align="center" valign="middle"><strong>BATTERY</strong></th>
                                    <td>DC Voltage</td>
                                    <td align="center" colspan="6">360</td>
                                </tr>
                                <tr>
                                    <td>Number of Battery</td>
                                    <td align="center" colspan="6">30</td>
                                </tr>
                                <tr>
                                    <td>Charging Current</td>
                                    <td align="center" colspan="6">1-10 Amp (Settable)</td>
                                </tr>
                                <tr></tr>
                                <tr></tr>
                                <tr></tr>
                                <tr></tr>
                                <tr>
                                    <th rowspan="3" align="center" valign="middle"><strong>BYPASS</strong></th>
                                    <td>Phase</td>
                                    <td colspan="6" align="center">Single Phase (IP+N)</td>
                                </tr>
                                <tr>
                                    <td>Manual</td>
                                    <td colspan="6" align="center">Maintenance Bypass Switch Provided</td>
                                </tr>
                                <tr>
                                    <td>Static</td>
                                    <td colspan="6" align="center">No Break (Optional)</td>
                                </tr>
                                <tr>
                                    <th rowspan="4" align="center" valign="middle"><strong>PROTECTION</strong></th>
                                    <td>Input Protection</td>
                                    <td colspan="6" align="center">Input Voltage, Frequency Under/Over limit Protection
                                    </td>
                                </tr>
                                <tr>
                                    <td>Output Protection</td>
                                    <td colspan="6" align="center">Over Current, Short-Circuit, Over/Under Voltage</td>
                                </tr>
                                <tr>
                                    <td>Battery Protection</td>
                                    <td colspan="6" align="center">Over Charge, Over Discharge protection</td>
                                </tr>
                                <tr>
                                    <td>Temperature Protection</td>
                                    <td colspan="6" align="center">Inverter Over Temperature Protection</td>
                                </tr>
                                <tr>
                                    <th rowspan="8" align="center" valign="middle"><strong>GENERAL PARAMETERS</strong>
                                    </th>
                                    <td>Working Environment</td>
                                    <td colspan="6" align="center">Temp: 10-550 C, Relative Humidity : 30-90%</td>
                                </tr>
                                <tr>
                                    <td>Display</td>
                                    <td colspan="6" align="center">LCD + Physical Button</td>
                                </tr>
                                <tr>
                                    <td>Alarm</td>
                                    <td colspan="6" align="center">Low Battery, Abnormal AC Input, UPS Failure, etc.
                                    </td>
                                </tr>
                                <tr>
                                    <td>Noise (dB)</td>
                                    <td colspan="6" align="center">
                                        < 55</td>
                                </tr>
                                <tr>
                                </tr>
                                <tr>
                                    <td>Dimensions (L*W*H)</td>
                                    <td colspan="2" align="center">690 X 386 X 719</td>
                                    <td colspan="2" align="center">689 X 387 X 856</td>
                                    <td colspan="2" align="center">779 X 412 X 1001</td>
                                </tr>
                                <tr>
                                </tr>
                                <tr>
                                    <td>Weight (kg)</td>
                                    <td align="center">100</td>
                                    <td align="center">116</td>
                                    <td align="center">142</td>
                                    <td align="center" colspan="2">214</td>
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