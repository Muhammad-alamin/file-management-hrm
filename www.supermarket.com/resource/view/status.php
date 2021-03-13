<?php

# Including the Controller PHP file that is handling the Dashboard View Design
include("app/Http/Controllers/CheckoutController.php");
include("app/Http/Controllers/SSLCommerz.php");

$checkout = new CheckoutController;
$eloquent = new Eloquent;

################### PAYMENT VERIFICATION ###################
$sslc = new SSLCommerz();
$tran_id = $_SESSION['payment_values']['tran_id'];
$amount = $_SESSION['payment_values']['amount'];
$currency = $_SESSION['payment_values']['currency'];

$validation = $sslc->orderValidate($tran_id, $amount, $currency, $_POST);

if($validation == TRUE)
{
	$checkout->updatePaymentStatus($_SESSION['SMCH_customer_last_order_id']);
}

################### PAYMENT VERIFICATION ###################

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
                    <div class="col-lg-12">
					<?php

						if ($validation == TRUE) 
						{
							echo '
							<div class="alert alert-success">
								<img src="files/common/order_submitted.png" class="custom-order-submitted" />
								Thank you for your Payment. Soon you will receive your Order!
							</div>
							';
						}
						else
						{
							echo '
							<div class="alert alert-danger">
								Sorry! Something went wrong! Unable to receive your Payment!
							</div>
							';
						}

					?>
                    </div>
                </div>
            </div>
			
            <div class="mb-6"></div>
        </main>