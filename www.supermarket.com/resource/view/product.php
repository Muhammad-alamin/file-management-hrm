<?php

# Including the Controller PHP file that is handling the Dashboard View Design
include("app/Http/Controllers/ProductController.php");

$product = new ProductController;
$eloquent = new Eloquent;

if(!empty($_REQUEST['id']))
	$_SESSION['SMCH_product_page_id'] = $_REQUEST['id'];

# Loading Catalog Information using Custom Controller
$productDetails = $product->getProductPageDetails($_SESSION['SMCH_product_page_id']);

$relatedProductList = $product->getRelatedProducts($_SESSION['SMCH_product_page_id'], $productDetails['subcategory_id']);

?>

<!-- YOUR PAGE DESIGN WILL GO BELOW -->

        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#"><?php echo $productDetails['category_name']; ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $productDetails['subcategory_name']; ?></li>
                    </ol>
                </div><!-- End .container -->
            </nav>

            <div class="container">
                <div class="product-single-container product-single-default">
                    <div class="row">
                        <div class="col-lg-7 product-single-gallery">
                            <div class="sticky-slider">
                                <div class="product-slider-container product-item">
                                    <div class="product-single-carousel owl-carousel owl-theme">
                                        <div class="product-item">
                                            <img class="product-single-image" src="files/products/<?php echo $productDetails['product_default_image']; ?>" data-zoom-image="files/products/<?php echo $productDetails['product_default_image']; ?>"/>
                                        </div>
                                        <div class="product-item">
                                            <img class="product-single-image" src="assets/images/products/zoom/product-2-big.jpg" data-zoom-image="assets/images/products/zoom/product-2-big.jpg"/>
                                        </div>
                                        <div class="product-item">
                                            <img class="product-single-image" src="assets/images/products/zoom/product-3-big.jpg" data-zoom-image="assets/images/products/zoom/product-3-big.jpg"/>
                                        </div>
                                    </div>
                                    <!-- End .product-single-carousel -->
                                    <span class="prod-full-screen">
                                        <i class="icon-plus"></i>
                                    </span>
                                </div>

                                <div class="prod-thumbnail row owl-dots transparent-dots" id='carousel-custom-dots'>
                                    <div class="owl-dot">
                                        <img src="files/products/<?php echo $productDetails['product_default_image']; ?>"/>
                                    </div>
                                    <div class="owl-dot">
                                        <img src="assets/images/products/zoom/product-2.jpg"/>
                                    </div>
                                    <div class="owl-dot">
                                        <img src="assets/images/products/zoom/product-3.jpg"/>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .col-md-6 -->

                        <div class="col-lg-5">
                            <div class="product-single-details">
                                <h1 class="product-title"><?php echo $productDetails['product_name']; ?></h1>

                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:60%"></span><!-- End .ratings -->
                                    </div><!-- End .product-ratings -->

                                    <!--<a href="#" class="rating-link">( 6 Reviews )</a>-->
                                </div><!-- End .product-container -->

                                <div class="price-box">
                                    <span class="old-price"><?php echo $GLOBALS['CURRENCY'] . " " . $productDetails['regular_price']; ?></span>
                                    <span class="product-price"><?php echo $GLOBALS['CURRENCY'] . " " . $productDetails['discounted_price']; ?></span>
                                </div><!-- End .price-box -->

                                <div class="product-desc">
								<?php echo $productDetails['product_summary']; ?>
                                </div><!-- End .product-desc -->

                                <!--<div class="product-filters-container">
                                    <div class="product-single-filter">
                                        <label>Colors:</label>
                                        <ul class="config-swatch-list">
                                            <li class="active">
                                                <a href="#" style="background-color: #6085a5;"></a>
                                            </li>
                                            <li>
                                                <a href="#" style="background-color: #ab6e6e;"></a>
                                            </li>
                                            <li>
                                                <a href="#" style="background-color: #b19970;"></a>
                                            </li>
                                            <li>
                                                <a href="#" style="background-color: #11426b;"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>-->

                                <div class="product-action">
                                    <div class="product-single-qty">
                                        <input class="horizontal-quantity form-control" type="text">
                                    </div><!-- End .product-single-qty -->

                                    <a href="cart.html" class="paction add-cart" title="Add to Cart">
                                        <span>Add to Cart</span>
                                    </a>
                                    <!--<a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                        <span>Add to Wishlist</span>
                                    </a>
                                    <a href="#" class="paction add-compare" title="Add to Compare">
                                        <span>Add to Compare</span>
                                    </a>-->
                                </div>

                                <div class="product-single-share mb-4">
                                    <label>Share:</label>
                                    <!-- www.addthis.com share plugin-->
                                    <div class="addthis_inline_share_toolbox"></div>
                                </div><!-- End .product single-share -->
                            </div><!-- End .product-single-details -->

                            <div class="product-single-tabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="product-tab-desc" data-toggle="tab" href="#product-desc-content" role="tab" aria-controls="product-desc-content" aria-selected="true">Description</a>
                                    </li>
                                    <!--<li class="nav-item">
                                        <a class="nav-link" id="product-tab-tags" data-toggle="tab" href="#product-tags-content" role="tab" aria-controls="product-tags-content" aria-selected="false">Tags</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="product-tab-reviews" data-toggle="tab" href="#product-reviews-content" role="tab" aria-controls="product-reviews-content" aria-selected="false">Reviews</a>
                                    </li>-->
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel" aria-labelledby="product-tab-desc">
                                        <div class="product-desc-content">
                                            <?php echo $productDetails['product_details']; ?>
                                        </div><!-- End .product-desc-content -->
                                    </div><!-- End .tab-pane -->
            
                                    <!--<div class="tab-pane fade" id="product-tags-content" role="tabpanel" aria-labelledby="product-tab-tags">
                                        <div class="product-tags-content">
                                            <form action="#">
                                                <h4>Add Your Tags:</h4>
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-sm" required>
                                                    <input type="submit" class="btn btn-primary" value="Add Tags">
                                                </div>
                                            </form>
                                            <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                                        </div>
                                    </div>
            
                                    <div class="tab-pane fade" id="product-reviews-content" role="tabpanel" aria-labelledby="product-tab-reviews">
                                        <div class="product-reviews-content">
                                            <div class="collateral-box">
                                                <ul>
                                                    <li>Be the first to review this product</li>
                                                </ul>
                                            </div>
            
                                            <div class="add-product-review">
                                                <h3 class="text-uppercase heading-text-color font-weight-semibold">WRITE YOUR OWN REVIEW</h3>
                                                <p>How do you rate this product? *</p>
            
                                                <form action="#">
                                                    <table class="ratings-table">
                                                        <thead>
                                                            <tr>
                                                                <th>&nbsp;</th>
                                                                <th>1 star</th>
                                                                <th>2 stars</th>
                                                                <th>3 stars</th>
                                                                <th>4 stars</th>
                                                                <th>5 stars</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Quality</td>
                                                                <td>
                                                                    <input type="radio" name="ratings[1]" id="Quality_1" value="1" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="ratings[1]" id="Quality_2" value="2" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="ratings[1]" id="Quality_3" value="3" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="ratings[1]" id="Quality_4" value="4" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="ratings[1]" id="Quality_5" value="5" class="radio">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Value</td>
                                                                <td>
                                                                    <input type="radio" name="value[1]" id="Value_1" value="1" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="value[1]" id="Value_2" value="2" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="value[1]" id="Value_3" value="3" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="value[1]" id="Value_4" value="4" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="value[1]" id="Value_5" value="5" class="radio">
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Price</td>
                                                                <td>
                                                                    <input type="radio" name="price[1]" id="Price_1" value="1" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="price[1]" id="Price_2" value="2" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="price[1]" id="Price_3" value="3" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="price[1]" id="Price_4" value="4" class="radio">
                                                                </td>
                                                                <td>
                                                                    <input type="radio" name="price[1]" id="Price_5" value="5" class="radio">
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
            
                                                    <div class="form-group">
                                                        <label>Nickname <span class="required">*</span></label>
                                                        <input type="text" class="form-control form-control-sm" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Summary of Your Review <span class="required">*</span></label>
                                                        <input type="text" class="form-control form-control-sm" required>
                                                    </div>
                                                    <div class="form-group mb-2">
                                                        <label>Review <span class="required">*</span></label>
                                                        <textarea cols="5" rows="6" class="form-control form-control-sm"></textarea>
                                                    </div>
            
                                                    <input type="submit" class="btn btn-primary" value="Submit Review">
                                                </form>
                                            </div>
                                        </div>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-single-video" style="background-image: url('assets/images/products/single/extended/bg-4.jpg');">
                <div class="container">
                    <h3>Watch More</h3>
                    <a href="" class="video-btn">
                        Watch <img src="assets/images/products/single/extended/icon-play.png" alt="play">
                    </a>
                </div><!-- End .container -->
            </div><!-- End .product-single-video -->

            <div class="featured-section">
                <div class="container">
                    <h2 class="carousel-title">Related Products</h2>

                    <div class="featured-products owl-carousel owl-theme owl-dots-top">
					
					<?php 
					
						foreach($relatedProductList AS $eachRelatedProduct)
						{
						echo '
							<div class="product">
								<figure class="product-image-container">
									<a href="product.html" class="product-image">
										<img src="files/products/'.$eachRelatedProduct['product_default_image'].'" alt="product">
									</a>
									<!--<a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>-->
								</figure>
								<div class="product-details">
									<div class="ratings-container">
										<div class="product-ratings">
											<span class="ratings" style="width:80%"></span>
										</div>
									</div>
									<h2 class="product-title">
										<a href="product.html">'.$eachRelatedProduct['product_name'].'</a>
									</h2>
									<div class="price-box">
										<span class="product-price">'.$eachRelatedProduct['discounted_price'].'</span>
									</div>

									<div class="product-action">
										<!--<a href="#" class="paction add-wishlist" title="Add to Wishlist">
											<span>Add to Wishlist</span>
										</a>-->

										<a href="product.php?id='.$eachRelatedProduct['id'].'" class="paction add-cart" title="Add to Cart">
											<span>Add to Cart</span>
										</a>

										<!--<a href="#" class="paction add-compare" title="Add to Compare">
											<span>Add to Compare</span>
										</a>-->
									</div>
								</div>
							</div>
						';
						}
						?>
                        
                    </div><!-- End .featured-proucts -->
                </div><!-- End .container -->
            </div><!-- End .featured-section -->
        </main><!-- End .main -->
