<?php include("header.php");?>
<div class="rs-breadcrumbs">
    <div class="breadcrumbs-image">
        <img src="images/breadcums/products.webp">
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="breadcrumbs-text">
                    <h1 class="breadcrumbs-title">3D Marking</h1>
                    <ul class="breadcrumbs-subtitle">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="javascript:;">3D Marking</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="contact-details">
    <div class="container-fluid pb-70">
        <div class="row">
            <div class="card">
                <div class="card-top">
                    <div class="card-top__left col-md-5 col-sm-5 col-xs-12" style="">
                        <div class="sidebar__inner" style="position: relative; transform: translate3d(0px, 0px, 0px);">
                            <div class="sidebar__inner-top">
                                <div id="carousel-custom" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-outer">
                                        <div class="carousel-inner image-box">
                                            <?php
                                            $nb_elem_per_page = 50;
                                            $page = isset($_GET['page'])?intval($_GET['page']-1):0;
                                            $data = glob("images/inner-product/3d-marking/*.*");
                                            $number_of_pages = intval(count($data)/$nb_elem_per_page)+1;
                                            ?>
                                            <?php
                                            $first = true;
                                            foreach (array_slice($data, $page*$nb_elem_per_page, $nb_elem_per_page) as $p) {
                                            ?>
                                            <div class="carousel-item  <?php if($first){ echo 'active'; $first = false;} ?>"
                                                id="my1">
                                                <a class="fancybox thumbnail" rel="ligthbox" href="<?php echo $p; ?>"
                                                    alt="3D Marking" title="3D Marking">
                                                    <img src="<?php echo $p; ?>" alt="3D Marking" title="3D Marking"
                                                        class="img-fluid w-100" />
                                                </a>
                                            </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <?php
                                        $nb_elem_per_page = 50;
                                        $page = isset($_GET['page'])?intval($_GET['page']-1):0;
                                        $data = glob("images/inner-product/3d-marking/*.*");
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
                                            <img src="<?php echo $p; ?>" alt="3D Marking" title="3D Marking" />
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
                    <div class="card-top__right col-md-7 col-sm-7 col-xs-12">
                        <h1>
                            <div class="revealOut innerh1"><span class="revealIn">3D Marking</span>
                            </div>
                        </h1>
                        <hr>
                        <h4>Specification</h4>
                        <div class="table-responsive mb-3">
                            <table class="table table-bordered table-striped table-hover producttable">
                                <tbody>
                                    <tr>
                                        <th>Laser Type</th>
                                        <td>Fiber Laser</td>
                                    </tr>
                                    <tr>
                                        <th>Laser Power</th>
                                        <td>60 W Optional 80 W, 100 W</td>
                                    </tr>
                                    <tr>
                                        <th>Working Area</th>
                                        <td>100x100 mm</td>
                                    </tr>
                                    <tr>
                                        <th>Supporting Files</th>
                                        <td>PLT, SVG, DXF JPEG, BMP, PNG etc.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <h4>Application</h4>
                        <div class="row">
                            <?php
                        $nb_elem_per_page = 20;
                        $page = isset($_GET['page'])?intval($_GET['page']-1):0;
                        $data = glob("images/inner-product/3d-marking/application/*.*");
                        $number_of_pages = intval(count($data)/$nb_elem_per_page)+1;
                        ?>
                            <?php
                        foreach (array_slice($data, $page*$nb_elem_per_page, $nb_elem_per_page) as $p) {
                        ?>
                            <div class="col-md-2 col-sm-2 col-xs-12 col-6 mb-3">
                                <a class="fancybox" data-fancybox="gallery" rel="gallery1" href="<?php echo $p; ?>">
                                    <img src="<?php echo $p; ?>" alt="image" class="img-rounded img-fluid">
                                </a>
                            </div>
                            <?php
                        }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<?php include("footer.php");?>