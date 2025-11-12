<?php include("header.php");?>
<div class="rs-breadcrumbs">
    <div class="breadcrumbs-image">
       <img src="images/inner-pages/breadcums/products.webp" alt="breadcum">
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="breadcrumbs-text">
                    <h1 class="breadcrumbs-title">Isolation Tranformer</h1>
                    <ul class="breadcrumbs-subtitle">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="javascript:;">Isolation Tranformer</a></li>
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
											$data = glob("images/inner-pages/products/isolation-tranformer/*.*");
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
										$data = glob("images/inner-pages/products/isolation-tranformer/*.*");
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
                            <div class="revealOut innerh1"><span class="revealIn">Isolation Tranformer</span></div>
                        </h1>
                        <hr>

                        <div class="inner-content">
                            <table class="table table-bordered table-striped table-hover producttable">
                                <tbody>
                                    <tr>
                                        <th>Input Voltage</th>
                                        <td>230/415V (Acceptable ± 10%) 1/3+N</td>
                                    </tr>
                                    <tr>
                                         <th> Output Voltage</td>
                                        <td>230/415V (same as Input) 1/3 +N</td>
                                    </tr>
                                    <tr>
                                       <th>Transformer Ratio</td>
                                        <td>1:1 (or as per customer’s requirement)</td>
                                    </tr>
                                    <tr>
                                        <th>DC Galvanic Isolation</td>
                                        <td>over 100MΩ between windings or any winding to ground at 500V DC</td>
                                    </tr>
                                    <tr>
                                        <th>Breakdown strength common mode noise</td>
                                        <td>2500V AC for 2 Minute</td>
                                    </tr>
                                    <tr>
                                        <th>Rejection</td>
                                        <td>Better than 110 Db</td>
                                    </tr>
                                    <tr>
                                         <th>Coupling Capacitance</td>
                                        <td>0.005 to 0.009 pF</td>
                                    </tr>
                                    <tr>
                                        <th>Line Frequency</td>
                                        <td>47 to 63 Hz</td>
                                    </tr>
                                    <tr>
                                        <th>Load Regulation</td>
                                        <td>within and up-to 4%</td>
                                    </tr>
                                    <tr>
                                      <th>Cooling</td>
                                        <td>Air/Oil cooled</td>
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