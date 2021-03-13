<?php

# Including the Controller PHP file that is handling the Dashboard View Design
include("app/Http/Controllers/CartController.php");

$cart = new CartController;
$eloquent = new Eloquent;

# Loading Catalog Information using Custom Controller
$cartDetails = $cart->getCartDetails($_SESSION['SMCH_customer_id']);

?>

        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav mb-1">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                    </ol>
                </div><!-- End .container -->
            </nav>


            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="cart-table-container">
                            <table class="table table-cart">
                                <thead>
                                    <tr>
                                        <th class="product-col">Product</th>
                                        <th class="price-col">Price</th>
                                        <th class="qty-col">Qty</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
								
								<?php
								$cartTotal = 0;
								$subTotal = 0;
								foreach($cartDetails AS $eachCartItem)
								{
									echo '
                                    <tr class="product-row">
                                        <td class="product-col">
                                            <figure class="product-image-container">
                                                <a href="product.html" class="product-image">
                                                    <img src="files/products/'.$eachCartItem['product_default_image'].'" alt="product">
                                                </a>
                                            </figure>
                                            <h2 class="product-title">
                                                <a href="product.html">'.$eachCartItem['product_name'].'</a>
                                            </h2>
                                        </td>
                                        <td>'.$GLOBALS['CURRENCY'].$eachCartItem['regular_price'].'</td>
                                        <td>
                                            <input value="'.$eachCartItem['product_quantity'].'" class="vertical-quantity form-control" type="text">
                                        </td>
                                        <td>'.$GLOBALS['CURRENCY'].$eachCartItem['product_quantity']*$eachCartItem['regular_price'].'</td>
                                    </tr>
                                    <tr class="product-action-row">
                                        <td colspan="4" class="clearfix">
                                            <!-- <div class="float-left">
                                                <a href="#" class="btn-move">Move to Wishlist</a>
                                            </div> -->
                                            
                                            <div class="float-right">
                                                <!--<a href="#" title="Edit product" class="btn-edit"><span class="sr-only">Edit</span><i class="icon-pencil"></i></a>-->
                                                <a href="#" title="Remove product" class="btn-remove"><span class="sr-only">Remove</span></a>
                                            </div><!-- End .float-right -->
                                        </td>
                                    </tr>
									';
									
									$subTotal = $eachCartItem['product_quantity']*$eachCartItem['regular_price'];
									$cartTotal = $cartTotal + $subTotal;
								}
								?>

                                </tbody>

                                <tfoot>
                                    <tr>
                                        <td colspan="4" class="clearfix">
                                            <div class="float-left">
                                                <a href="index.php" class="btn btn-outline-secondary">Continue Shopping</a>
                                            </div>

                                            <div class="float-right">
                                                <a href="#" class="btn btn-outline-secondary btn-clear-cart">Clear Shopping Cart</a>
                                                <a href="#" class="btn btn-outline-secondary btn-update-cart">Update Shopping Cart</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div><!-- End .cart-table-container -->
						<!--
                        <div class="cart-discount">
                            <h4>Apply Discount Code</h4>
                            <form action="#">
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm" placeholder="Enter discount code"  required>
                                    <div class="input-group-append">
                                        <button class="btn btn-sm btn-primary" type="submit">Apply Discount</button>
                                    </div>
                                </div>
                            </form>
                        </div>
						-->
                    </div>

                    <div class="col-lg-4">
                        <div class="cart-summary">
                            <h3>Summary</h3>

                            <!--<h4>
                                <a data-toggle="collapse" href="#total-estimate-section" class="collapsed" role="button" aria-expanded="false" aria-controls="total-estimate-section">Estimate Shipping and Tax</a>
                            </h4>

                            <div class="collapse" id="total-estimate-section">
                                <form action="#">
                                    <div class="form-group form-group-sm">
                                        <label>Country</label>
                                        <div class="select-custom">
                                            <select class="form-control form-control-sm">
                                                <option value="USA">United States</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="China">China</option>
                                                <option value="Germany">Germany</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group form-group-sm">
                                        <label>State/Province</label>
                                        <div class="select-custom">
                                            <select class="form-control form-control-sm">
                                                <option value="CA">California</option>
                                                <option value="TX">Texas</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group form-group-sm">
                                        <label>Zip/Postal Code</label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div>

                                    <div class="form-group form-group-custom-control">
                                        <label>Flat Way</label>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="flat-rate">
                                            <label class="custom-control-label" for="flat-rate">Fixed $5.00</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-group-custom-control">
                                        <label>Best Rate</label>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="best-rate">
                                            <label class="custom-control-label" for="best-rate">Table Rate $15.00</label>
                                        </div>
                                    </div>
                                </form>
                            </div>-->
							
							<form method="post" action="checkout.php">

                            <table class="table table-totals">
                                <tbody>
                                    <tr>
                                        <td>Subtotal</td>
                                        <td><?php echo $GLOBALS['CURRENCY'].$cartTotal; ?></td>
                                    </tr>

                                    <tr>
                                        <td>Delivery Charge</td>
                                        <td>
										<select name="delivery_charge" id="delivery_charge" required>
											<option value="">- Select a Delivery Option -</option>
											<option value="60">Inside Dhaka - TK 60</option>
											<option value="120">Outside Dhaka - TK 120</option>
										</select>
										</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td>Order Total</td>
                                        <td>
											<span id="order_total"></span>
										</td>
                                    </tr>
                                </tfoot>
                            </table>

                            <div class="checkout-methods">
                                <button name="submit_order" class="btn btn-block btn-sm btn-primary" type="submit">Go to Checkout</button>
                                <!--<a href="#" class="btn btn-link btn-block">Check Out with Multiple Addresses</a>-->
								
								<input type="hidden" name="cart_total" value="<?php echo $cartTotal; ?>" />
							</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<script src="assets/js/jquery.min.js"></script>
			<script>
				$('#delivery_charge').on('change', function() {
					
					var delivery_charge = this.value;
					
					if(delivery_charge < 1)
						var delivery_charge = 0;
					
					var cart_total = <?php echo $cartTotal; ?>;
					var grand_total = eval ( parseInt(delivery_charge) + parseInt(cart_total) );
					
					$('#order_total').html("৳" + grand_total);
				});
			</script>

            <div class="mb-6"></div>
        </main>