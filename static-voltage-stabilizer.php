<?php include("header.php");?>
<div class="rs-breadcrumbs">
    <div class="breadcrumbs-image">
        <img src="images/inner-pages/breadcums/products.webp" alt="breadcum">
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="breadcrumbs-text">
                    <h1 class="breadcrumbs-title">STATIC VOLTAGE STABILIZER</h1>
                    <ul class="breadcrumbs-subtitle">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="javascript:;">STATIC VOLTAGE STABILIZER</a></li>
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
											$data = glob("images/inner-pages/products/voltage-stabilizer/static-voltage-stabilizer/*.*");
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
										$data = glob("images/inner-pages/products/voltage-stabilizer/static-voltage-stabilizer/*.*");
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
                            <div class="revealOut innerh1"><span class="revealIn">Static Voltage Stabilizer</span></div>
                        </h1>
                        <hr>

                        <div class="inner-content">
                            <p>
                                Static Voltage Stabilizer is an IGBT based PWM type buckboost voltage stabilizer which
                                has tight regulation and fast correction speed which is impossible to obtain using
                                conventional methods such as servo voltage stabilizers, SCR / triac type stabilizer,
                                relay type stabilizer etc.</p>

                            <p>
                                This is specially useful in places where we need very fast correction speed, constant
                                output voltage, overload current limiting and short circuit protection, soft start, high
                                voltage cut-off and low voltage cut-off, automatic bypass, no wear and tear, long life
                                and maintenance free which is impossible with other conventional relay type or servo
                                control stabilizers.
                            </p>
                            <P>Since the circuit is fully solid state (no mechanical or moving parts) there will not be
                                any wear and tear like the brush tear in servo stabilizer or relay degrading in relay
                                based stabilizer. </P>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="feature-list feature-col-12">
                                    <h4>Features</h4>
                                    <ul>
                                        <li>Direct AC-AC conversion without rectifying to DC improves the efficiency,
                                            reliability and reduces the components.</li>
                                        <li>Rapid cycle by cycle correction of output. It can correct sudden fluctuation
                                            in the line voltage.</li>
                                        <li>Output regulation of +/-1% which is impossible in conventional stabilizer.
                                        </li>
                                        <li>Remote management</li>
                                        <li>No distortion in output waveform.</li>
                                        <li>Automatic bypass incase of failure.</li>
                                        <li>Fully solid state. No moving part, hence more life and no maintenance.</li>
                                        <li>Compact size and light weight</li>
                                        <li>20KHz PWM control</li>
                                        <li>IGBT power stage. Highly reliable.</li>
                                        <li>Silent operation</li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-list feature-col-12">
                                    <h4>Highlights</h4>
                                    <ul>
                                        <li>All protections included - low voltage, high voltage, overload and short
                                            circuit</li>
                                        <li>Discrete IGBT up to 30KVA single phase and 90KVA three phase</li>
                                        <li>Single PCB for control stage, IGBT driver section and power stage.</li>
                                        <li>Individual contactor for three phase system (optional)</li>
                                        <li>Instantaneous correction speed - over 20000V per second</li>
                                        <li>Single contactor for three phase system</li>
                                        <li>Single LCD for three phases</li>

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
                                        <th rowspan="2" align="center" valign="middle"><strong>Electrical</strong></th>
                                        <td>Capacity</td>
                                        <td>
                                            <p>1kVA to 30kVA (1-Phase)</p>
                                            <p>10kVA to 200kVA (3-Phase)</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Regulator</td>
                                        <td>High Frequency 20kHz IGBT driven voltage regulation converter</td>
                                    </tr>
                                    <tr>
                                        <th rowspan="2" align="center" valign="middle"><strong>Input</strong></th>
                                        <td>
                                            <p>Nominal Voltage</p>
                                            <p>Range</p>
                                        </td>
                                        <td>
                                            <p>180V – 280V (1-Phase)</p>
                                            <p>340V – 480V (3-Phase)</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Frequency</td>
                                        <td>47–53 Hz</td>
                                    </tr>
                                    <tr>
                                        <th rowspan="4" align="center" valign="middle"><strong>Output</strong></th>
                                        <td>Nominal Voltage</td>
                                        <td>
                                            <p>220/230/240V (1-Phase)</p>
                                            <p>380/400/415V (3-Phase)</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Efficiency</td>
                                        <td>Over 97%</td>
                                    </tr>
                                    <tr>
                                        <td>Regulation</td>
                                        <td>+/- 1%</td>
                                    </tr>
                                    <tr>
                                        <td>Rate of Correction</td>
                                        <td>20000V/Sec</td>
                                    </tr>
                                    <tr>
                                        <th align="center" valign="middle"><strong>Indication</strong></th>
                                        <td>Display</td>
                                        <td>Input Voltage, Output Voltage and Load Percentage</td>
                                    </tr>
                                    <tr>
                                        <th rowspan="2" align="center" valign="middle"><strong>Environmental</strong>
                                        </th>
                                        <td>Temperature</td>
                                        <td>0°C to +55°C</td>
                                    </tr>
                                    <tr>
                                        <td>Cooling Medium</td>
                                        <td>Air Cooled</td>
                                    </tr>
                                    <tr>
                                        <th rowspan="5" align="center" valign="middle"><strong>Protective
                                                Features</strong></th>
                                        <td>OV/UV cutoff</td>
                                        <td>Automatic trip in event of High / Low / Missing Voltage, Auto reset</td>
                                    </tr>
                                    <tr>
                                        <td>Overload & Short Circuit Protection</td>
                                        <td>Through Suitable Rated input CB and Output Through Contactor</td>
                                    </tr>
                                    <tr>
                                        <td>Soft Switch On</td>
                                        <td>
                                            <p>This feature ensures that output voltage is never higher than input
                                                voltage upon switch-on, before it commences full stabilization</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Automatic Bypass</td>
                                        <td>Automatic Bypass will activate when there is a fault condition</td>
                                    </tr>
                                    <tr>
                                        <td>Surge Protections</td>
                                        <td>By Input and Output filter card</td>
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