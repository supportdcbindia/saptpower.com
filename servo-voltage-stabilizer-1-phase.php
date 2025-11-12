<?php include("header.php");?>
<div class="rs-breadcrumbs">
    <div class="breadcrumbs-image">
         <img src="images/inner-pages/breadcums/products.webp" alt="breadcum">
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="breadcrumbs-text">
                    <h1 class="breadcrumbs-title">SERVO VOLTAGE STABILIZER (1-Phase)</h1>
                    <ul class="breadcrumbs-subtitle">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="javascript:;">SERVO VOLTAGE STABILIZER (1-Phase)</a></li>
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
											$data = glob("images/inner-pages/products/voltage-stabilizer/servo-voltage-stabilizer-phase-1/*.*");
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
										$data = glob("images/inner-pages/products/voltage-stabilizer/servo-voltage-stabilizer-phase-1/*.*");
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
                            <div class="revealOut innerh1"><span class="revealIn">Servo Voltage Stabilizer (1-Phase)</span></div>
                        </h1>
                        <hr>

                        <div class="inner-content">
                             <table class="table table-bordered table-striped table-hover producttable">
                                <tbody>
                                    <tr>
                                        <th><strong>Capacity</strong></th>
                                        <td>1kVA to 20kVA Air Cooled</td>
                                    </tr>
                                    <tr>
                                       <th><strong>Input Voltage Range</strong></td>
                                        <td>110-270V, 140-270V, 170-270V</td>
                                    </tr>
                                    <tr>
                                        <th><strong>System</strong></td>
                                        <td>3 Wire (P,N+E)</td>
                                    </tr>
                                    <tr>
                                       <th><strong>Input Frequency</strong></td>
                                        <td>47 to 53 Hz</td>
                                    </tr>
                                    <tr>
                                      <th><strong>Output Voltage Adjustable</strong></td>
                                        <td>220 to 240V AC</td>
                                    </tr>
                                    <tr>
                                      <th><strong>Speed of Correction</strong></td>
                                        <td>Up to 60V/Sec</td>
                                    </tr>
                                    <tr>
                                       <th><strong>Output Voltage Regulation</strong></td>
                                        <td>± 1% (No Load)</td>
                                    </tr>
                                    <tr>
                                       <th><strong>Ambient Temperature</strong></td>
                                        <td>0 to 55 °C</td>
                                    </tr>
                                    <tr>
                                      <th><strong>Overload Capacity</strong></td>
                                        <td>1.2</td>
                                    </tr>
                                    <tr>
                                       <th><strong>Waveform Distortion</strong></td>
                                        <td>True Reproduction of Input</td>
                                    </tr>
                                    <tr>
                                      <th><strong>Insulation</strong></td>
                                        <td>Class F</td>
                                    </tr>
                                    <tr>
                                       <th><strong>Mode of System</strong></td>
                                        <td>Fully Automatic/Manual</td>
                                    </tr>
                                    <tr>
                                      <th><strong>Protection</strong></td>
                                        <td>
                                            Low Voltage Protection, High Voltage Protection and Overload Protection,
                                            <br>
                                            Short-circuit Protection and power ON/OFF of SCVS through MCB at Input
                                        </td>
                                    </tr>
                                    <tr>
                                      <th><strong>Optional Features</strong></td>
                                        <td>Bypass switch at Input to bypass the equipment in case of emergency</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<?php include("footer.php");?>