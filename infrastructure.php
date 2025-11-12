<?php include("header.php");?>
<div class="rs-breadcrumbs">
    <div class="breadcrumbs-image">
        <img src="images/breadcums/about-us.webp">
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="breadcrumbs-text">
                    <h1 class="breadcrumbs-title">Infrastructure</h1>
                    <ul class="breadcrumbs-subtitle">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="javascript:;">Infrastructure</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="contact-details">
    <div class="container pb-70">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <p class="history-one__text">To meet our customers’ needs and provide them with excellent products,
                    we have a well-equipped infrastructural unit that is divided into various divisions, each of
                    which is responsible for its departmental operations. We have the latest technology equipment
                    that we needed to effectively achieve our job tasks. Our team has been able to enjoy ease and
                    comfort during operating hours since the whole operation has been kept coordinated and
                    organised.
                </p>
            </div>
        </div>
        <div class="row">
            <?php
                            $nb_elem_per_page = 100;
                            $page = isset($_GET['page'])?intval($_GET['page']-1):0;
                            $data = glob("images/infrastructure/*.*");
                            $number_of_pages = intval(count($data)/$nb_elem_per_page)+1;
                            ?>
            <?php
                            foreach (array_slice($data, $page*$nb_elem_per_page, $nb_elem_per_page) as $p) {
                            ?>
            <div class="col-md-3 col-sm-3 col-xs-12 mb-3">
                <a class="fancybox" data-fancybox="gallery" rel="gallery1" href="<?php echo $p; ?>">
                    <img src="<?php echo $p; ?>" alt="image" class="img-rounded img-fluid img-thumbnail">
                </a>
            </div>
            <?php
                            }
                            ?>
        </div>
    </div>
</section>

<?php include("footer.php");?>