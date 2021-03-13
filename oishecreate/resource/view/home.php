<?php

# Including the Controller PHP file that is handling the Dashboard View Design
include("app/Http/Controllers/HomeController.php");

$home = new HomeController;
$eloquent = new Eloquent;

$columnName = "*";
$tableName = "sliders";

$sliderList = $eloquent->selectData($columnName, $tableName);


$columnName = "*";
$tableName = "new_collection";

$productList = $eloquent->selectData($columnName, $tableName);

?>

<!-- YOUR PAGE DESIGN WILL GO BELOW -->

<!-- Slider Part Start-->

    <div class="slider-area">
        <div class="row height-100-percent align-items-center">
            <div class="slider-active-1 owl-carousel nav-style-2">
                <?php 
        foreach ($sliderList as $eachSlider) {
            echo '
                <div class="single-slider bg-img slider-height-2 align-items-center custom-d-flex" style="background-image:url(files/sliders/' .$eachSlider['slider_file'].');">
                    <div class="container">
                        <div class="col-lg-12 col-md-12 col-12 ml-auto">
                            <div class="slider-content-4 slider-animated-4">
                                <h1 class="animated" style="color: #000000;">' .$eachSlider['slider_title'].'</h1>
                                            
                            </div>
                        </div>
                    </div>
                </div>'
                ;
        }
        
         ?>
            </div>
        </div>
    </div>'
                
    </div>

        <div class="new-collection-area pt-100 pb-100">
            <div class="container">
                <div class="new-collection-top">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="new-collection-img mr-100">
                                <a class="default-overlay" href="shop-left-sidebar.html"><img src="files/timeline/timeline1.jpg" alt="product"></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="new-collection-content mrg-top-xs mrg-top-none-sm">
                                <span class="wow fadeInUp" data-wow-delay="0.2s">New Collections</span>
                                <h2 class="wow fadeInUp" data-wow-delay="0.3s">Bow linen skirt</h2>
                                <p class="wow fadeInUp" data-wow-delay="0.4s">Phasellus ut felis odio.Nullam ut nunc a magna varius varius. Fusce ut magna ut felis tempor eleifend. Fusce hendrerit, ex ac finibus pulvinar, tortor felis egestas turpis, id pellentesque ligula</p>
                                <div class="new-collection-btn pt-80">
                                    <a class="wow fadeInUp" data-wow-delay="0.5s" href="shop-left-sidebar.html">Discover Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="new-collection-top pt-100">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="new-collection-content mrg-bottom-xs mrg-bottom-none-sm">
                                <span class="wow fadeInUp" data-wow-delay="0.2s">New Collections</span>
                                <h2 class="wow fadeInUp" data-wow-delay="0.3s">Net tote bag</h2>
                                <p class="wow fadeInUp" data-wow-delay="0.4s">Phasellus ut felis odio.Nullam ut nunc a magna varius varius. Fusce ut magna ut felis tempor eleifend. Fusce hendrerit, ex ac finibus pulvinar, tortor felis egestas turpis, id pellentesque ligula</p>
                                <div class="new-collection-btn pt-80">
                                    <a class="wow fadeInUp" data-wow-delay="0.5s" href="shop-left-sidebar.html">Discover Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="new-collection-img ml-100">
                                <a class="default-overlay" href="shop-left-sidebar.html"><img src="files/timeline/timeline4.jpg" alt="product"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>









        <div class="product-area">
            <div class="custom-container">
                <div class="section-title-2 text-center mb-40">
                    <h2>New Collection</h2>
                </div>
                <div class="row no-gutters">
                    
                            <?php 
                            foreach ($productList as  $eachProduct) {
                                 echo '
                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="product-wrap mb-30">
                            <div class="product-wrap-padding">
                                <div class="product-img mb-25"style="width:300px; height:300px;">
                                    <a href="newproductdetails.php?id='.$eachProduct['id'].'">
                                        <img class="default-img" src="files/products/'.$eachProduct['product_default_image'].'" alt="">
                                        <img class="hover-img" src="default-img" src="files/products/'.$eachProduct['product_default_image'].'" alt="">
                                    </a>
                                    
                                </div>
                                <div class="product-content text-center">
                                    <h3><a href="newproductdetails.php?id='.$eachProduct['id'].'">'.$eachProduct['product_name'].'</a></h3>
                                    <div class="product-price">
                                        <span>'.$eachProduct['regular_price'].'</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            ';
                             } 
                            
                            ?>
                            
                    
                </div>
            </div>
        </div>
        

        