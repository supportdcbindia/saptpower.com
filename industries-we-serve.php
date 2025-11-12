<?php include("header.php");?>
<div class="rs-breadcrumbs">
    <div class="breadcrumbs-image">
       <img src="images/inner-pages/breadcums/industries.webp" alt="breadcum">
        <div class="breadcrumbs-inner">
            <div class="container">
                <div class="breadcrumbs-text">
                    <h1 class="breadcrumbs-title">Industries We Serve</h1>
                    <ul class="breadcrumbs-subtitle">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="javascript:;">Industries We Serve</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="industries-sec space">
    <div class="container">
        <div class="row gy-4">

           <?php 
              $data = glob('./images/inner-pages/industry/*.*')
           ?>
           <?php 
             foreach($data as $b){
           ?>
            <div class="col-md-6 col-xl-4 portfolio-item category-1">
                <a href="javascript:;" class="work-popup">
                    <div class="portfolio-box">
                        <!-- Image -->
                       <img class="d-block w-100" alt="..." src="<?php echo $b; ?>">
                        <!-- Category -->
                        <!-- Caption -->
                        <div class="portfolio-caption">
                            <h1><?php echo str_replace("-"," ",str_replace(".webp","", str_replace("./images/inner-pages/industry/","",$b))); ?></h1>
                        </div>
                    </div>
                </a>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<?php include("footer.php");?>
