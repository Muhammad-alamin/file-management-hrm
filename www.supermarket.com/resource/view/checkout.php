<?php

# Including the Controller PHP file that is handling the Dashboard View Design
include("app/Http/Controllers/CheckoutController.php");
include("app/Http/Controllers/SSLCommerz.php");

$checkout = new CheckoutController;
$eloquent = new Eloquent;

# Loading Catalog Information using Custom Controller
if(isset($_POST['submit_order']))
{
	$cartDetails = $checkout->acceptOrder($_SESSION['SMCH_customer_id'], $_POST['cart_total'], $_POST['delivery_charge']);

	$_SESSION['SMCH_customer_last_cart_total'] = $_POST['cart_total'] + $_POST['delivery_charge'];
}
################### PAYMENT INTEGRATION ###################
if(isset($_GET['pay']))
{

if ($_SERVER['SERVER_NAME'] == "localhost") {
    $server_name = 'http://localhost/www.supermarket.com/';
} else {
    $server_name = 'http://www.supermarket.com/';
}

$post_data = array();
$post_data['total_amount'] = $_SESSION['SMCH_customer_last_cart_total'];
$post_data['currency'] = $GLOBALS['CURRENCY_NAME'];
$post_data['tran_id'] = $_SESSION['SMCH_customer_last_order_id'];
$post_data['success_url'] = $server_name . "status.php";
$post_data['fail_url'] = $server_name . "status.php";
$post_data['cancel_url'] = $server_name . "cancel.php";

# CUSTOMER INFORMATION
$post_data['cus_name'] = $_SESSION['SMCH_customer_name'];
$post_data['cus_email'] = $_SESSION['SMCH_customer_email'];
$post_data['cus_add1'] = "Dhaka, Bangladesh";
$post_data['cus_add2'] = "";
$post_data['cus_city'] = "";
$post_data['cus_state'] = "";
$post_data['cus_postcode'] = "";
$post_data['cus_country'] = "Bangladesh";
$post_data['cus_phone'] = $_SESSION['SMCH_customer_mobile'];
$post_data['cus_fax'] = "";

# SHIPMENT INFORMATION
$post_data['ship_name'] = $_SESSION['SMCH_customer_name'];
$post_data['ship_add1 '] = "Dhaka, Bangladesh";
$post_data['ship_add2'] = "";
$post_data['ship_city'] = "";
$post_data['ship_state'] = "";
$post_data['ship_postcode'] = "";
$post_data['ship_country'] = "Bangladesh";

# OPTIONAL PARAMETERS
$post_data['value_a'] = "ref001";
$post_data['value_b'] = "ref002";
$post_data['value_c'] = "ref003";
$post_data['value_d'] = "ref004";


$_SESSION['payment_values'] = array();
$_SESSION['payment_values']['tran_id'] = $post_data['tran_id'];
$_SESSION['payment_values']['amount'] = $post_data['total_amount'];
$_SESSION['payment_values']['currency'] = $post_data['currency'];


    $sslc = new SSLCommerz();
    # initiate(Transaction Data , Whether redirect or Display in Page)
    $payment_options = $sslc->initiate($post_data, false);

    if (!is_array($payment_options)) 
    {
        print_r($payment_options);
        $payment_options = array();

        echo '<h3>Card Payment</h3>';
        echo "<ul class='payOptions'>";

        if (array_key_exists("cards", $payment_options) && !empty($payment_options['cards'])) 
        {
            foreach ($payment_options['cards'] as $row) {
                echo '<li>' . $row['link'] . '</li>';
            }
        }
        echo "</ul>";
        echo '<h3>Mobile Payment</h3>';
        echo "<ul class='payOptions'>";
        if (array_key_exists("mobile", $payment_options) && !empty($payment_options['mobile'])) {
            foreach ($payment_options['mobile'] as $row) {
                echo '<li>' . $row['link'] . '</li>';
            }
        }
        echo "</ul>";
        echo '<h3>Internet Banking</h3>';
        echo "<ul class='payOptions'>";
        if (array_key_exists("internet", $payment_options) && !empty($payment_options['internet'])) {
            foreach ($payment_options['internet'] as $row) {
                echo '<li>' . $row['link'] . '</li>';
            }
        }
        echo "</ul>";
        echo '<h3>Other Options</h3>';
        echo "<ul class='payOptions'>";
        if (array_key_exists("others", $payment_options) && !empty($payment_options['others'])) {
            foreach ($payment_options['others'] as $row) {
                echo '<li>' . $row['link'] . '</li>';
            }
        }
        echo "</ul>";
    }
}
################### PAYMENT INTEGRATION ###################

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
					if(isset($_POST['submit_order']))
					{
						if($cartDetails == "ORDER_SAVED")
						{
							echo '
							<div class="alert alert-success">
								<img src="files/common/order_submitted.png" class="custom-order-submitted" />
								Thank you for submitting your Order.
								
								Now, please proceed towards Payment Gateway to Pay for your submitted Order!
								<a href="?pay=yes"><button class="btn btn-success">Pay Online Now</button></a>
							</div>
							';
						}
						else
						{
							echo '
							<div class="alert alert-danger">
								<img src="files/common/order_submitted.png" class="custom-order-submitted" />
								Sorry! Unable to Save!
							</div>
							';
						}
					}
					?>
                    </div>
                </div>
            </div>
			
            <div class="mb-6"></div>
        </main>