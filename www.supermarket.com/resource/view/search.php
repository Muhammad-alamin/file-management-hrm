<?php

# Including the Controller PHP file that is handling the Dashboard View Design
include("app/Http/Controllers/SearchController.php");

$search = new SearchController;
$eloquent = new Eloquent;

if(!empty($_POST['q']))
	$_SESSION['SMCH_search_page_q'] = $_POST['q'];

# Loading Catalog Information using Custom Controller
$searchResult = $search->getSearchResult($_SESSION['SMCH_search_page_q']);

?>


        <main class="main">
            <div class="banner banner-cat" style="background-image: url('assets/images/banners/search.jpg');">
                <div class="banner-content container">
                    <!--<h2 class="banner-subtitle">check out over <span>200+</span></h2>-->
                    <h1 class="banner-title">
                        
                    </h1>
                    <!--<a href="#" class="btn btn-primary">Shop Now</a>-->
                </div>
            </div>
            
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Search</a></li>
                    </ol>
                </div><!-- End .container -->
            </nav>

            <div class="container">
                <!--<nav class="toolbox">
                    <div class="toolbox-left">
                        <div class="toolbox-item toolbox-sort">
                            <div class="select-custom">
                                <select name="orderby" class="form-control">
                                    <option value="menu_order" selected="selected">Default sorting</option>
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option value="date">Sort by newness</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to low</option>
                                </select>
                            </div>

                            <a href="#" class="sorter-btn" title="Set Ascending Direction"><span class="sr-only">Set Ascending Direction</span></a>
                        </div>
                    </div>

                    <div class="toolbox-item toolbox-show">
                            <label>Showing 1–9 of 60 results</label>
                        </div>

                    <div class="layout-modes">
                        <a href="category.html" class="layout-btn btn-grid active" title="Grid">
                            <i class="icon-mode-grid"></i>
                        </a>
                        <a href="category-list.html" class="layout-btn btn-list" title="List">
                            <i class="icon-mode-list"></i>
                        </a>
                    </div>
                </nav>-->

                <div class="row row-sm">
				
					<?php 
					
					if( count($searchResult) < 1)
					{
						echo '
							<div class="col-md-12 alert alert-danger">
								Sorry! More product are coming soon on this category, stay tuned!
							</div>
						';
					}
					
					foreach($searchResult AS $eachProduct)
					{
						echo '
					
						<div class="col-6 col-md-4 col-xl-2">
							<div class="product">
								<figure class="product-image-container">
									<a href="product.php?id='.$eachProduct['id'].'" class="product-image catalog-product-image">
										<img src="files/products/'.$eachProduct['product_default_image'].'" alt="product">
									</a>
									<!--<a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>-->
								</figure>
								<div class="product-details">
									<!--<div class="ratings-container">
										<div class="product-ratings">
											<span class="ratings" style="width:80%"></span>
										</div>
									</div>-->
									<h2 class="product-title">
										<a href="product.html">'.$eachProduct['product_name'].'</a>
									</h2>
									<div class="price-box">
										<span class="product-price">'. $GLOBALS['CURRENCY'] . " " . $eachProduct['regular_price']. '</span>
									</div>

									<div class="product-action">
										<!--<a href="#" class="paction add-wishlist" title="Add to Wishlist">-->

										<a href="?add='.$eachProduct['id'].'" class="paction add-cart" title="Add to Cart">
											<span>Add to Cart</span>
										</a>

										<!--<a href="#" class="paction add-compare" title="Add to Compare">-->
									</div>
								</div>
							</div>
						</div>

						';
					}
				?>
                    
                </div>

                <!--<nav class="toolbox toolbox-pagination">
                    <div class="toolbox-item toolbox-show">
                        <label>Showing 1–9 of 60 results</label>
                    </div>

                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link page-link-btn" href="#"><i class="icon-angle-left"></i></a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><span>...</span></li>
                        <li class="page-item"><a class="page-link" href="#">15</a></li>
                        <li class="page-item">
                            <a class="page-link page-link-btn" href="#"><i class="icon-angle-right"></i></a>
                        </li>
                    </ul>
                </nav>-->
            </div>

            <div class="mb-5"></div><!-- margin -->
        </main><!-- End .main -->