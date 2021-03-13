<?php

# Including the Controller PHP file that is handling the Dashboard View Design
include("app/Http/Controllers/NewProductDetailsController.php");

$Product = new NewProductDetailsController;



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
                            <h3>$29.00</h3>
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
        <div class="related-product-area pb-45">
            <div class="custom-container">
                <div class="section-title-6 text-center mb-50">
                    <h2>Related Products</h2>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="product-wrap mb-50">
                            <div class="product-img mb-25">
                                <a href="product-details.html">
                                    <img class="default-img" src="assets/images/product/product-21.jpg" alt="">
                                    <img class="hover-img" src="assets/images/product/product-21-2.jpg" alt="">
                                    <span class="badge-green badge-right">Feature</span>
                                </a>
                                <div class="product-action">
                                    <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="dl-icon-view"></i><span>Quick Shop</span></a>
                                    <a data-toggle="tooltip" title="Add to Cart" href="#"><i class=" dl-icon-cart29"></i></a>
                                    <a data-toggle="tooltip" title="Add to Wishlist" href="#"><i class="dl-icon-heart4"></i></a>
                                    <a data-toggle="tooltip" title="Add to Compare" href="#"><i class="dl-icon-compare"></i></a>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h3><a href="product-details.html">Crisscross strap jumpsuit</a></h3>
                                <div class="product-price">
                                    <span>$5000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="product-wrap mb-50">
                            <div class="product-img mb-25">
                                <a href="product-details.html">
                                    <img class="default-img" src="assets/images/product/product-22.jpg" alt="">
                                    <img class="hover-img" src="assets/images/product/product-22-2.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="dl-icon-view"></i><span>Quick Shop</span></a>
                                    <a data-toggle="tooltip" title="Add to Cart" href="#"><i class=" dl-icon-cart29"></i></a>
                                    <a data-toggle="tooltip" title="Add to Wishlist" href="#"><i class="dl-icon-heart4"></i></a>
                                    <a data-toggle="tooltip" title="Add to Compare" href="#"><i class="dl-icon-compare"></i></a>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h3><a href="product-details.html">Trousers With Belt</a></h3>
                                <div class="product-price">
                                    <span>$23.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="product-wrap mb-50">
                            <div class="product-img mb-25">
                                <a href="product-details.html">
                                    <img class="default-img" src="assets/images/product/product-23.jpg" alt="">
                                    <img class="hover-img" src="assets/images/product/product-23-2.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="dl-icon-view"></i><span>Quick Shop</span></a>
                                    <a data-toggle="tooltip" title="Add to Cart" href="#"><i class=" dl-icon-cart29"></i></a>
                                    <a data-toggle="tooltip" title="Add to Wishlist" href="#"><i class="dl-icon-heart4"></i></a>
                                    <a data-toggle="tooltip" title="Add to Compare" href="#"><i class="dl-icon-compare"></i></a>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h3><a href="product-details.html">Stripe textured dress</a></h3>
                                <div class="product-price">
                                    <span>$23.99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                        <div class="product-wrap mb-50">
                            <div class="product-img mb-25">
                                <a href="product-details.html">
                                    <img class="default-img" src="assets/images/product/product-24.jpg" alt="">
                                    <img class="hover-img" src="assets/images/product/product-24-2.jpg" alt="">
                                </a>
                                <div class="product-action">
                                    <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="dl-icon-view"></i><span>Quick Shop</span></a>
                                    <a data-toggle="tooltip" title="Add to Cart" href="#"><i class=" dl-icon-cart29"></i></a>
                                    <a data-toggle="tooltip" title="Add to Wishlist" href="#"><i class="dl-icon-heart4"></i></a>
                                    <a data-toggle="tooltip" title="Add to Compare" href="#"><i class="dl-icon-compare"></i></a>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <h3><a href="product-details.html">Printed cotton-blend t-shirt</a></h3>
                                <div class="product-price">
                                    <span>$70.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>