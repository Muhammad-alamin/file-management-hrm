<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Porto - Bootstrap eCommerce Template</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">
        
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/icons/favicon.ico">
    
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>
<body>

<?php
###############################################################################################

# Including the Model Class that has ready-made functions to handle MySQL without writing SQL codes
include("app/Models/Eloquent.php");

$eloquent = new Eloquent;

$columnName = "*";
$tableName = "categories";

$categoryList = $eloquent->selectData($columnName, $tableName);

###############################################################################################

include("app/Http/Controllers/TopController.php");
$topController = new TopController;

if( isset($_REQUEST['p']) && isset($_REQUEST['q']) )
{
	if( !empty($_SESSION['SMCH_customer_id']) )
	{
		$cartAddResult = $topController->addToCart($_SESSION['SMCH_customer_id'], $_REQUEST['p'], $_REQUEST['q']);
	}
}
###############################################################################################

$cartSummary = $topController->showCartSummary(@$_SESSION['SMCH_customer_id']);

###############################################################################################
?>

    <div class="page-wrapper">
        <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-left header-dropdowns">
					
						<!--
                        <div class="header-dropdown">
                            <a href="#">USD</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#">EUR</a></li>
                                    <li><a href="#">USD</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="header-dropdown">
                            <a href="#"><img src="assets/images/flags/en.png" alt="England flag">ENGLISH</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#"><img src="assets/images/flags/en.png" alt="England flag">ENGLISH</a></li>
                                    <li><a href="#"><img src="assets/images/flags/fr.png" alt="France flag">FRENCH</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="dropdown compare-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="icon-retweet"></i> Compare (2)
                            </a>

                            <div class="dropdown-menu" >
                                <div class="dropdownmenu-wrapper">
                                    <ul class="compare-products">
                                        <li class="product">
                                            <a href="#" class="btn-remove" title="Remove Product"><i class="icon-cancel"></i></a>
                                            <h4 class="product-title"><a href="product.html">Lady White Top</a></h4>
                                        </li>
                                        <li class="product">
                                            <a href="#" class="btn-remove" title="Remove Product"><i class="icon-cancel"></i></a>
                                            <h4 class="product-title"><a href="product.html">Blue Women Shirt</a></h4>
                                        </li>
                                    </ul>

                                    <div class="compare-actions">
                                        <a href="#" class="action-link">Clear All</a>
                                        <a href="#" class="btn btn-primary">Compare</a>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						-->
                    </div>

                    <div class="header-right">
                        <p class="welcome-msg">
							<?php

								if(!empty($_SESSION['SMCH_customer_login_time']))
								{
									echo "Welcome " . $_SESSION['SMCH_customer_name'];
								}
								else
								{
									echo "Welcome to SuperMarket!";
								}
							?>
						</p>

                        <div class="header-dropdown dropdown-expanded">
                            <a href="#">Links</a>
                            <div class="header-menu">
                                <ul>
									<?php
										if(!empty($_SESSION['SMCH_customer_login_time']))
										{
											# LOGGED IN STATE
											echo '<li><a href="dashboard.php">MY DASHBOARD </a></li>';
											echo '<li><a href="?logout=yes">LOGOUT </a></li>';
										}
										else
										{
											# GUEST STATE
											echo '<li><a href="register.php">REGISTER </a></li>
												<li><a href="login.php">LOGIN </a></li>';
										}
									?>
                                    
                                    <!--<li><a href="#">DAILY DEAL</a></li>
                                    <li><a href="#">MY WISHLIST </a></li>
                                    <li><a href="blog.html">BLOG</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="#" class="login-link">LOG IN</a></li>-->
                                </ul>
                            </div><!-- End .header-menu -->
                        </div><!-- End .header-dropown -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-top -->

            <div class="header-middle">
                <div class="container">
                    <div class="header-left">
                        <a href="index.php" class="logo">
                            <img src="assets/images/logo.png" alt="Porto Logo">
                        </a>
                    </div><!-- End .header-left -->

                    <div class="header-center">
                        <div class="header-search">
                            <a href="#" class="search-toggle" role="button"><i class="icon-magnifier"></i></a>
                            <form action="search.php" method="post">
                                <div class="header-search-wrapper">
                                    <input type="search" class="form-control" name="q" id="q" autocomplete="none" placeholder="Search your Product Name here" required />

                                    <button class="btn" type="submit" name="search_product"><i class="icon-magnifier"></i></button>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
                    </div><!-- End .headeer-center -->

                    <div class="header-right">
                        <button class="mobile-menu-toggler" type="button">
                            <i class="icon-menu"></i>
                        </button>
                        <div class="header-contact">
                            <span>Call us now</span>
                            <a href="tel:#"><strong>+8801955778822</strong></a>
                        </div><!-- End .header-contact -->
						

                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <span class="cart-count">
								<?php 
									if($cartSummary == 0)
										echo $cartSummary;
									else
										echo count($cartSummary);
								?>
								</span>
                            </a>

                            <div class="dropdown-menu" >
                                <div class="dropdownmenu-wrapper">
                                    <div class="dropdown-cart-header">
                                        <span>
										<?php 
											if($cartSummary == 0)
												echo $cartSummary;
											else
												echo count($cartSummary);
										?>
										Items</span>

                                        <a href="cart.html">View Cart</a>
                                    </div>
                                    <div class="dropdown-cart-products">
									
									<?php 
									$cartTotal = 0; $subTotal = 0;
									if($cartSummary > 0)
									{
										foreach($cartSummary AS $eachCartItem)
										{
											echo '
											<div class="product">
												<div class="product-details">
													<h4 class="product-title">
														<a href="product.html">'.$eachCartItem['product_name'].'</a>
													</h4>

													<span class="cart-product-info">
														<span class="cart-product-qty">'.$eachCartItem['product_quantity'].'</span>
														x '.$GLOBALS['CURRENCY'] . $eachCartItem['regular_price'].'
													</span>
												</div>

												<figure class="product-image-container">
													<a href="product.html" class="product-image cart-summary-image">
														<img src="files/products/'.$eachCartItem['product_default_image'].'" alt="product">
													</a>
													<a href="#" class="btn-remove" title="Remove Product"><i class="icon-cancel"></i></a>
												</figure>
											</div>
											';
											
											$subTotal = $eachCartItem['product_quantity'] * $eachCartItem['regular_price'];
											
											$cartTotal = $cartTotal + $subTotal;
										}
									}
									?>

                                    </div>

                                    <div class="dropdown-cart-total">
                                        <span>Total</span>

                                        <span class="cart-total-price"><?php echo $GLOBALS['CURRENCY'].$cartTotal; ?></span>
                                    </div>

                                    <div class="dropdown-cart-action">
                                        <a href="cart.php" class="btn btn-block">Shopcart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->

            <div class="header-bottom sticky-header">
                <div class="container">
                    <nav class="main-nav">
                        <ul class="menu sf-arrows">
                            <li class="active"><a href="index.php">Home</a></li>
                            <!--<li>
                                <a href="category.html" class="sf-with-ul">Categories</a>
                                <div class="megamenu megamenu-fixed-width">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="menu-title">
                                                        <a href="#">Variations 1<span class="tip tip-new">New!</span></a>
                                                    </div>
                                                    <ul>
                                                        <li><a href="category.html">Fullwidth Banner<span class="tip tip-hot">Hot!</span></a></li>
                                                        <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                                                        <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                                                        <li><a href="category.html">Left Sidebar</a></li>
                                                        <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                                                        <li><a href="category-flex-grid.html">Product Flex Grid</a></li>
                                                        <li><a href="category-horizontal-filter1.html">Horizontal Filter1</a></li>
                                                        <li><a href="category-horizontal-filter2.html">Horizontal Filter2</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="menu-title">
                                                        <a href="#">Variations 2</a>
                                                    </div>
                                                    <ul>
                                                        <li><a href="#">Product List Item Types</a></li>
                                                        <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll</a></li>
                                                        <li><a href="category-3col.html">3 Columns Products</a></li>
                                                        <li><a href="category.html">4 Columns Products <span class="tip tip-new">New</span></a></li>
                                                        <li><a href="category-5col.html">5 Columns Products</a></li>
                                                        <li><a href="category-6col.html">6 Columns Products</a></li>
                                                        <li><a href="category-7col.html">7 Columns Products</a></li>
                                                        <li><a href="category-8col.html">8 Columns Products</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="banner">
                                                <a href="#">
                                                    <img src="assets/images/menu-banner-2.jpg" alt="Menu banner">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="megamenu-container">
                                <a href="product.html" class="sf-with-ul">Products</a>
                                <div class="megamenu">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="menu-title">
                                                        <a href="#">Variations</a>
                                                    </div>
                                                    <ul>
                                                        <li><a href="product.html">Horizontal Thumbnails</a></li>
                                                        <li><a href="product-full-width.html">Vertical Thumbnails<span class="tip tip-hot">Hot!</span></a></li>
                                                        <li><a href="product.html">Inner Zoom</a></li>
                                                        <li><a href="product-addcart-sticky.html">Addtocart Sticky</a></li>
                                                        <li><a href="product-sidebar-left.html">Accordion Tabs</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="menu-title">
                                                        <a href="#">Variations</a>
                                                    </div>
                                                    <ul>
                                                        <li><a href="product-sticky-tab.html">Sticky Tabs</a></li>
                                                        <li><a href="product-simple.html">Simple Product</a></li>
                                                        <li><a href="product-sidebar-left.html">With Left Sidebar</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="menu-title">
                                                        <a href="#">Product Layout Types</a>
                                                    </div>
                                                    <ul>
                                                        <li><a href="product.html">Default Layout</a></li>
                                                        <li><a href="product-extended-layout.html">Extended Layout</a></li>
                                                        <li><a href="product-full-width.html">Full Width Layout</a></li>
                                                        <li><a href="product-grid-layout.html">Grid Images Layout</a></li>
                                                        <li><a href="product-sticky-both.html">Sticky Both Side Info<span class="tip tip-hot">Hot!</span></a></li>
                                                        <li><a href="product-sticky-info.html">Sticky Right Side Info</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="banner">
                                                <a href="#">
                                                    <img src="assets/images/menu-banner.jpg" alt="Menu banner" class="product-promo">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="sf-with-ul">Pages</a>

                                <ul>
                                    <li><a href="cart.html">Shopping Cart</a></li>
                                    <li><a href="#">Checkout</a>
                                        <ul>
                                            <li><a href="checkout-shipping.html">Checkout Shipping</a></li>
                                            <li><a href="checkout-shipping-2.html">Checkout Shipping 2</a></li>
                                            <li><a href="checkout-review.html">Checkout Review</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Dashboard</a>
                                        <ul>
                                            <li><a href="dashboard.html">Dashboard</a></li>
                                            <li><a href="my-account.html">My Account</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="#">Blog</a>
                                        <ul>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="single.html">Blog Post</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="#" class="login-link">Login</a></li>
                                    <li><a href="forgot-password.html">Forgot Password</a></li>
                                </ul>
                            </li>-->
							<?php 
							
							if(count($categoryList) > 0)
							{
								
							foreach($categoryList AS $eachCategory)
							{
								##### Main Menu Start
								echo '
								<li><a href="#" class="sf-with-ul">'.$eachCategory['category_name'].'</a>';
								
								##### Sub Menu Load
								
									$columnName = "*";
									$tableName = "subcategories";
									$whereValue["category_id"] = $eachCategory['id'];

									$subcatList = $eloquent->selectData($columnName, $tableName, $whereValue);
									
									echo '<ul>';
									foreach($subcatList AS $eachSubcat)
									{
										echo '<li><a href="catalog.php?id='.$eachSubcat['id'].'">'.$eachSubcat['subcategory_name'].'</a></li>';
									}
									echo '</ul>';

								##### Main Menu End
								echo '
								</li>';
							}
							
							}
							?>
                            <!--<li class="float-right buy-effect"><a href="#"><span>Buy Porto!</span></a></li>-->
                            <li class="float-right"><a href="#">Special Offer!</a></li>
                        </ul>
                    </nav>
                </div><!-- End .header-bottom -->
            </div><!-- End .header-bottom -->
        </header><!-- End .header -->
		
<?php 
/*
if(!empty($_SESSION['SMCH_customer_id']))
{
	if( !empty(@$_REQUEST['p'] && !empty(@$_REQUEST['q'])) )
	{
		echo '
		<div class="container-fluid custom-cart">
			<div class="alert alert-success ">
			Thank you for adding the product!
			</div>
		</div>
		';
	}
}
*/

if( isset($_REQUEST['p']) && isset($_REQUEST['q']) )
{
	# ONE IF TO CHECK IF CUSTOMER IS NOT LOGGED IN
	if( empty($_SESSION['SMCH_customer_id']) )
	{
		$_SESSION['SMCH_return_from_login'] = $GLOBALS['PAGE_NAME'];
		
		echo '
		<div class="container-fluid custom-cart">
			<div class="alert alert-danger" role="alert">
			Please <a href="login.php" class="alert-link">Login</a> before you add any item to cart!
			</div>
		</div>
		';
	}
	
	# ANOTHER IF TO SHOW SUCCESS MESSAGE
	if(@$cartAddResult > 0)
	{
		echo '
		<div class="container-fluid custom-cart">
			<div class="alert alert-success" role="alert">
			Your product is added to <a href="cart.php" class="alert-link">Cart</a>. Thanks!
			</div>
		</div>
		';
	}

}


?>