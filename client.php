<?php include("header.php");?>
<div class="rs-breadcrumbs">
    <div class="breadcrumbs-image">
        <img src="images/inner-pages/breadcums/our-clients.webp" alt="breadcum">
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="breadcrumbs-text">
                    <h1 class="breadcrumbs-title">Our Clients</h1>
                    <ul class="breadcrumbs-subtitle">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="javascript:;">Our Clients</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-description space">
    <div class="container">
        <div class="product-discription">
            <div class="row">
                <?php
                    $nb_elem_per_page = 100;
                    $page = isset($_GET['page'])?intval($_GET['page']-1):0;
                    $data = glob("images/clients/*.*");
                    $number_of_pages = intval(count($data)/$nb_elem_per_page)+1;
                    ?>
                <?php
                    foreach (array_slice($data, $page*$nb_elem_per_page, $nb_elem_per_page) as $p) {
                    ?>
                <div class="col-md-3 col-sm-3 col-6 mb-3">
                    <a class="fancybox" data-fancybox="gallery" rel="gallery1" href="<?php echo $p; ?>">
                        <img src="<?php echo $p; ?>" alt="image" class="img-rounded img-fluid single-brand" />
                    </a>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php include("footer.php");?>