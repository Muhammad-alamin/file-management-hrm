<?php

# Including the Controller PHP file that is handling the Dashboard View Design
include("app/Http/Controllers/ProductDetailsController.php");

$Product = new ProductDetailsController;



$productInfo = $Product->getProductInfo($_REQUEST['id']);


?>

<!-- YOUR PAGE DESIGN WILL GO BELOW -->

<!-- Slider Part Start-->
<div class="product-details-area border-top-2 mt-175 pt-100 pb-100">
            <div class="custom-container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-details-tab">
                            
                            <div class="pro-dec-big-img-slider-2 product-big-img-style product-dec-right">
                                <div class="easyzoom-style">
                                    <div class="easyzoom easyzoom--overlay">
                                        <a href="files/products/<?php echo $productInfo['product_default_image']; ?>">
                                            <img src="files/products/<?php echo $productInfo['product_default_image']; ?>"alt="">
                                        </a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-details-content product-details-ptb">
                            <div class="breadcrumb-content mb-35">
                                <ul>
                                    <li>
                                        <a href="index.html">Home </a>
                                    </li>
                                    <li> shop</li>
                                    <li></li>
                                </ul>
                            </div>
                            <h2> <?php echo $productInfo['product_name']; ?></h2>
                            <h3><?php echo $productInfo['regular_price']; ?></h3>
                            <div class="product-dec-peragraph">
                                <p><?php echo $productInfo['product_summary']; ?></p>
                            </div>
                            
                            <div class="description-review-wrapper">
                                <div class="panel-group" id="accordion1">
                                    <div class="panel pro-dec-accordion">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" href="#pro-dec-accordion1">
                                                    Description
                                                </a>
                                            </h4>
                                        </div>
                                        <div data-parent="#accordion1" id="pro-dec-accordion1" class="product-description-wrapper panel-collapse collapse show">
                                            <div class="panel-body">
                                                <p><?php echo $productInfo['product_details'] ; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        