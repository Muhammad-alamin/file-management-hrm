<?php

# Including the Controller PHP file that is handling the Dashboard View Design
include("app/Http/Controllers/HomeController.php");

$home = new HomeController;
$eloquent = new Eloquent;

$columnName = "*";
$tableName = "sliders";

$sliderList = $eloquent->selectData($columnName, $tableName);

?>

<!-- YOUR PAGE DESIGN WILL GO BELOW -->


        <main class="main">
            <div class="home-top-container">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="home-slider owl-carousel owl-carousel-lazy">
							
								<?php 
								
								foreach($sliderList AS $eachSlider)
								{
								echo '
                                <div class="home-slide">
                                    <img class="owl-lazy" src="assets/images/lazy.png" data-src="files/sliders/'.$eachSlider['slider_file'].'" alt="slider image">
                                    <div class="home-slide-content">
                                        <h1>'.$eachSlider['slider_title'].'</h1>
                                        <!--<h3>woman clothing</h3>-->
                                        <!--<a href="category.html" class="btn btn-primary">Shop Now</a>-->
                                    </div>
                                </div>';
								}
								?>

                            </div><!-- End .home-slider -->
                        </div><!-- End .col-lg-8 -->

                        <div class="col-lg-4 top-banners">
                            <div class="banner banner-image">
                                <a href="#">
                                    <img src="assets/images/banners/banner-1.jpg" alt="banner">
                                </a>
                            </div><!-- End .banner -->

                            <div class="banner banner-image">
                                <a href="#">
                                    <img src="assets/images/banners/banner-2.jpg" alt="banner">
                                </a>
                            </div><!-- End .banner -->

                            <div class="banner banner-image">
                                <a href="#">
                                    <img src="assets/images/banners/banner-3.jpg" alt="banner">
                                </a>
                            </div><!-- End .banner -->
                        </div><!-- End .col-lg-4 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .home-top-container -->

            <div class="info-boxes-container">
                <div class="container">
                    <div class="info-box">
                        <i class="icon-shipping"></i>

                        <div class="info-box-content">
                            <h4>FREE SHIPPING & RETURN</h4>
                            <p>Free shipping on all orders over $99.</p>
                        </div><!-- End .info-box-content -->
                    </div><!-- End .info-box -->

                    <div class="info-box">
                        <i class="icon-us-dollar"></i>

                        <div class="info-box-content">
                            <h4>MONEY BACK GUARANTEE</h4>
                            <p>100% money back guarantee</p>
                        </div><!-- End .info-box-content -->
                    </div><!-- End .info-box -->

                    <div class="info-box">
                        <i class="icon-support"></i>

                        <div class="info-box-content">
                            <h4>ONLINE SUPPORT 24/7</h4>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div><!-- End .info-box-content -->
                    </div><!-- End .info-box -->
                </div><!-- End .container -->
            </div><!-- End .info-boxes-container -->

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
						
						<div class="home-product-tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="featured-products-tab">Featured Products</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="featured-products" role="tabpanel" aria-labelledby="featured-products-tab">
                                    <div class="row row-sm">
                                        <div class="col-6 col-md-3">
                                            <div class="product">
                                                <figure class="product-image-container">
                                                    <a href="product.html" class="product-image">
                                                        <img src="assets/images/products/product-1.jpg" alt="product">
                                                    </a>
                                                    <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                                        </div><!-- End .product-ratings -->
                                                    </div><!-- End .product-container -->
                                                    <h2 class="product-title">
                                                        <a href="product.html">Baseball Cap</a>
                                                    </h2>
                                                    <div class="price-box">
                                                        <span class="product-price">$28.00</span>
                                                    </div><!-- End .price-box -->

                                                    <div class="product-action">
                                                        <!--<a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                            <span>Add to Wishlist</span>
                                                        </a>-->

                                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                                            <span>Add to Cart</span>
                                                        </a>

                                                        <!--<a href="#" class="paction add-compare" title="Add to Compare">
                                                            <span>Add to Compare</span>
                                                        </a>-->
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product-details -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-md-4 -->
                                        
                                        <div class="col-6 col-md-3">
                                            <div class="product">
                                                <figure class="product-image-container">
                                                    <a href="product.html" class="product-image">
                                                        <img src="assets/images/products/product-2.jpg" alt="product">
                                                    </a>
                                                    <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                                    <span class="product-label label-sale">-20%</span>
                                                    <span class="product-label label-hot">New</span>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                                        </div><!-- End .product-ratings -->
                                                    </div><!-- End .product-container -->
                                                    <h2 class="product-title">
                                                        <a href="product.html">Dress Shoes</a>
                                                    </h2>
                                                    <div class="price-box">
                                                        <span class="old-price">$60.00</span>
                                                        <span class="product-price">$48.00</span>
                                                    </div><!-- End .price-box -->

                                                    <div class="product-action">
                                                        <!--<a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                            <span>Add to Wishlist</span>
                                                        </a>-->
                                                        
                                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                                            <span>Add to Cart</span>
                                                        </a>

                                                        <!--<a href="#" class="paction add-compare" title="Add to Compare">
                                                            <span>Add to Compare</span>
                                                        </a>-->
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product-details -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-md-4 -->

                                        <div class="col-6 col-md-3">
                                            <div class="product">
                                                <figure class="product-image-container">
                                                    <a href="product.html" class="product-image">
                                                        <img src="assets/images/products/product-3.jpg" alt="product">
                                                    </a>
                                                    <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:60%"></span><!-- End .ratings -->
                                                        </div><!-- End .product-ratings -->
                                                    </div><!-- End .product-container -->
                                                    <h2 class="product-title">
                                                        <a href="product.html">Leather Belt</a>
                                                    </h2>
                                                    <div class="price-box">
                                                        <span class="product-price">$850.00</span>
                                                    </div><!-- End .price-box -->

                                                    <div class="product-action">
                                                        <!--<a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                            <span>Add to Wishlist</span>
                                                        </a>-->
                                                        
                                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                                            <span>Add to Cart</span>
                                                        </a>

                                                        <!--<a href="#" class="paction add-compare" title="Add to Compare">
                                                            <span>Add to Compare</span>
                                                        </a>-->
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product-details -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-md-4 -->

                                        <div class="col-6 col-md-3">
                                            <div class="product">
                                                <figure class="product-image-container">
                                                    <a href="product.html" class="product-image">
                                                        <img src="assets/images/products/product-4.jpg" alt="product">
                                                    </a>
                                                    <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:40%"></span><!-- End .ratings -->
                                                        </div><!-- End .product-ratings -->
                                                    </div><!-- End .product-container -->
                                                    <h2 class="product-title">
                                                        <a href="product.html">Ratchet Belt</a>
                                                    </h2>
                                                    <div class="price-box">
                                                        <span class="product-price">$299.00</span>
                                                    </div><!-- End .price-box -->

                                                    <div class="product-action">
                                                        <!--<a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                            <span>Add to Wishlist</span>
                                                        </a>-->
                                                        
                                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                                            <span>Add to Cart</span>
                                                        </a>

                                                        <!--<a href="#" class="paction add-compare" title="Add to Compare">
                                                            <span>Add to Compare</span>
                                                        </a>-->
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product-details -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-md-4 -->

                                    </div><!-- End .row -->
                                </div><!-- End .tab-pane -->
                                
                            </div><!-- End .tab-content -->
                        </div><!-- End .home-product-tabs -->
						
						<div class="home-product-tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="featured-products-tab">Featured Products</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="featured-products" role="tabpanel" aria-labelledby="featured-products-tab">
                                    <div class="row row-sm">
                                        <div class="col-6 col-md-3">
                                            <div class="product">
                                                <figure class="product-image-container">
                                                    <a href="product.html" class="product-image">
                                                        <img src="assets/images/products/product-1.jpg" alt="product">
                                                    </a>
                                                    <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                                        </div><!-- End .product-ratings -->
                                                    </div><!-- End .product-container -->
                                                    <h2 class="product-title">
                                                        <a href="product.html">Baseball Cap</a>
                                                    </h2>
                                                    <div class="price-box">
                                                        <span class="product-price">$28.00</span>
                                                    </div><!-- End .price-box -->

                                                    <div class="product-action">
                                                        <!--<a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                            <span>Add to Wishlist</span>
                                                        </a>-->

                                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                                            <span>Add to Cart</span>
                                                        </a>

                                                        <!--<a href="#" class="paction add-compare" title="Add to Compare">
                                                            <span>Add to Compare</span>
                                                        </a>-->
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product-details -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-md-4 -->
                                        
                                        <div class="col-6 col-md-3">
                                            <div class="product">
                                                <figure class="product-image-container">
                                                    <a href="product.html" class="product-image">
                                                        <img src="assets/images/products/product-2.jpg" alt="product">
                                                    </a>
                                                    <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                                    <span class="product-label label-sale">-20%</span>
                                                    <span class="product-label label-hot">New</span>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                                        </div><!-- End .product-ratings -->
                                                    </div><!-- End .product-container -->
                                                    <h2 class="product-title">
                                                        <a href="product.html">Dress Shoes</a>
                                                    </h2>
                                                    <div class="price-box">
                                                        <span class="old-price">$60.00</span>
                                                        <span class="product-price">$48.00</span>
                                                    </div><!-- End .price-box -->

                                                    <div class="product-action">
                                                        <!--<a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                            <span>Add to Wishlist</span>
                                                        </a>-->
                                                        
                                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                                            <span>Add to Cart</span>
                                                        </a>

                                                        <!--<a href="#" class="paction add-compare" title="Add to Compare">
                                                            <span>Add to Compare</span>
                                                        </a>-->
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product-details -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-md-4 -->

                                        <div class="col-6 col-md-3">
                                            <div class="product">
                                                <figure class="product-image-container">
                                                    <a href="product.html" class="product-image">
                                                        <img src="assets/images/products/product-3.jpg" alt="product">
                                                    </a>
                                                    <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:60%"></span><!-- End .ratings -->
                                                        </div><!-- End .product-ratings -->
                                                    </div><!-- End .product-container -->
                                                    <h2 class="product-title">
                                                        <a href="product.html">Leather Belt</a>
                                                    </h2>
                                                    <div class="price-box">
                                                        <span class="product-price">$850.00</span>
                                                    </div><!-- End .price-box -->

                                                    <div class="product-action">
                                                        <!--<a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                            <span>Add to Wishlist</span>
                                                        </a>-->
                                                        
                                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                                            <span>Add to Cart</span>
                                                        </a>

                                                        <!--<a href="#" class="paction add-compare" title="Add to Compare">
                                                            <span>Add to Compare</span>
                                                        </a>-->
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product-details -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-md-4 -->

                                        <div class="col-6 col-md-3">
                                            <div class="product">
                                                <figure class="product-image-container">
                                                    <a href="product.html" class="product-image">
                                                        <img src="assets/images/products/product-4.jpg" alt="product">
                                                    </a>
                                                    <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:40%"></span><!-- End .ratings -->
                                                        </div><!-- End .product-ratings -->
                                                    </div><!-- End .product-container -->
                                                    <h2 class="product-title">
                                                        <a href="product.html">Ratchet Belt</a>
                                                    </h2>
                                                    <div class="price-box">
                                                        <span class="product-price">$299.00</span>
                                                    </div><!-- End .price-box -->

                                                    <div class="product-action">
                                                        <!--<a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                            <span>Add to Wishlist</span>
                                                        </a>-->
                                                        
                                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                                            <span>Add to Cart</span>
                                                        </a>

                                                        <!--<a href="#" class="paction add-compare" title="Add to Compare">
                                                            <span>Add to Compare</span>
                                                        </a>-->
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product-details -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-md-4 -->

                                    </div><!-- End .row -->
                                </div><!-- End .tab-pane -->
                                
                            </div><!-- End .tab-content -->
                        </div><!-- End .home-product-tabs -->
					
                        <div class="home-product-tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="featured-products-tab">Featured Products</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="featured-products" role="tabpanel" aria-labelledby="featured-products-tab">
                                    <div class="row row-sm">
                                        <div class="col-6 col-md-3">
                                            <div class="product">
                                                <figure class="product-image-container">
                                                    <a href="product.html" class="product-image">
                                                        <img src="assets/images/products/product-1.jpg" alt="product">
                                                    </a>
                                                    <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                                        </div><!-- End .product-ratings -->
                                                    </div><!-- End .product-container -->
                                                    <h2 class="product-title">
                                                        <a href="product.html">Baseball Cap</a>
                                                    </h2>
                                                    <div class="price-box">
                                                        <span class="product-price">$28.00</span>
                                                    </div><!-- End .price-box -->

                                                    <div class="product-action">
                                                        <!--<a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                            <span>Add to Wishlist</span>
                                                        </a>-->

                                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                                            <span>Add to Cart</span>
                                                        </a>

                                                        <!--<a href="#" class="paction add-compare" title="Add to Compare">
                                                            <span>Add to Compare</span>
                                                        </a>-->
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product-details -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-md-4 -->
                                        
                                        <div class="col-6 col-md-3">
                                            <div class="product">
                                                <figure class="product-image-container">
                                                    <a href="product.html" class="product-image">
                                                        <img src="assets/images/products/product-2.jpg" alt="product">
                                                    </a>
                                                    <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                                    <span class="product-label label-sale">-20%</span>
                                                    <span class="product-label label-hot">New</span>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                                        </div><!-- End .product-ratings -->
                                                    </div><!-- End .product-container -->
                                                    <h2 class="product-title">
                                                        <a href="product.html">Dress Shoes</a>
                                                    </h2>
                                                    <div class="price-box">
                                                        <span class="old-price">$60.00</span>
                                                        <span class="product-price">$48.00</span>
                                                    </div><!-- End .price-box -->

                                                    <div class="product-action">
                                                        <!--<a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                            <span>Add to Wishlist</span>
                                                        </a>-->
                                                        
                                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                                            <span>Add to Cart</span>
                                                        </a>

                                                        <!--<a href="#" class="paction add-compare" title="Add to Compare">
                                                            <span>Add to Compare</span>
                                                        </a>-->
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product-details -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-md-4 -->

                                        <div class="col-6 col-md-3">
                                            <div class="product">
                                                <figure class="product-image-container">
                                                    <a href="product.html" class="product-image">
                                                        <img src="assets/images/products/product-3.jpg" alt="product">
                                                    </a>
                                                    <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:60%"></span><!-- End .ratings -->
                                                        </div><!-- End .product-ratings -->
                                                    </div><!-- End .product-container -->
                                                    <h2 class="product-title">
                                                        <a href="product.html">Leather Belt</a>
                                                    </h2>
                                                    <div class="price-box">
                                                        <span class="product-price">$850.00</span>
                                                    </div><!-- End .price-box -->

                                                    <div class="product-action">
                                                        <!--<a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                            <span>Add to Wishlist</span>
                                                        </a>-->
                                                        
                                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                                            <span>Add to Cart</span>
                                                        </a>

                                                        <!--<a href="#" class="paction add-compare" title="Add to Compare">
                                                            <span>Add to Compare</span>
                                                        </a>-->
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product-details -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-md-4 -->

                                        <div class="col-6 col-md-3">
                                            <div class="product">
                                                <figure class="product-image-container">
                                                    <a href="product.html" class="product-image">
                                                        <img src="assets/images/products/product-4.jpg" alt="product">
                                                    </a>
                                                    <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                                </figure>
                                                <div class="product-details">
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:40%"></span><!-- End .ratings -->
                                                        </div><!-- End .product-ratings -->
                                                    </div><!-- End .product-container -->
                                                    <h2 class="product-title">
                                                        <a href="product.html">Ratchet Belt</a>
                                                    </h2>
                                                    <div class="price-box">
                                                        <span class="product-price">$299.00</span>
                                                    </div><!-- End .price-box -->

                                                    <div class="product-action">
                                                        <!--<a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                                            <span>Add to Wishlist</span>
                                                        </a>-->
                                                        
                                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                                            <span>Add to Cart</span>
                                                        </a>

                                                        <!--<a href="#" class="paction add-compare" title="Add to Compare">
                                                            <span>Add to Compare</span>
                                                        </a>-->
                                                    </div><!-- End .product-action -->
                                                </div><!-- End .product-details -->
                                            </div><!-- End .product -->
                                        </div><!-- End .col-md-4 -->

                                    </div><!-- End .row -->
                                </div><!-- End .tab-pane -->
                                
                            </div><!-- End .tab-content -->
                        </div><!-- End .home-product-tabs -->

                        <div class="banners-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="banner banner-image">
                                        <a href="#">
                                            <img src="assets/images/banners/banner-4.jpg" alt="banner">
                                        </a>
                                    </div><!-- End .banner -->

                                    <div class="banner banner-image">
                                        <a href="#">
                                            <img src="assets/images/banners/banner-5.jpg" alt="banner">
                                        </a>
                                    </div><!-- End .banner -->
                                </div><!-- End .col-md-4 -->

                                <div class="col-md-8">
                                    <div class="banner banner-image">
                                        <a href="#">
                                            <img src="assets/images/banners/banner-6.jpg" alt="banner">
                                        </a>
                                    </div><!-- End .banner -->
                                </div><!-- End .col-md-4 -->
                            </div><!-- End .row -->
                        </div><!-- End .banners-group -->
                    </div><!-- End .col-lg-9 -->
  
                </div><!-- End .row -->
            </div><!-- End .container -->
			

            <div class="mb-4"></div><!-- margin -->

            <div class="partners-container">
                <div class="container">
                    <div class="partners-carousel owl-carousel owl-theme">
                        <a href="#" class="partner">
                            <img src="assets/images/logos/1.png" alt="logo">
                        </a>
                        <a href="#" class="partner">
                            <img src="assets/images/logos/2.png" alt="logo">
                        </a>
                        <a href="#" class="partner">
                            <img src="assets/images/logos/3.png" alt="logo">
                        </a>
                        <a href="#" class="partner">
                            <img src="assets/images/logos/4.png" alt="logo">
                        </a>
                        <a href="#" class="partner">
                            <img src="assets/images/logos/5.png" alt="logo">
                        </a>
                        <a href="#" class="partner">
                            <img src="assets/images/logos/2.png" alt="logo">
                        </a>
                        <a href="#" class="partner">
                            <img src="assets/images/logos/1.png" alt="logo">
                        </a>
                    </div><!-- End .partners-carousel -->
                </div><!-- End .container -->
            </div><!-- End .partners-container -->
        </main><!-- End .main -->
