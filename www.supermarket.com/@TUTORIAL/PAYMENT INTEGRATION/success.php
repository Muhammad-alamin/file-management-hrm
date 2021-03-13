<?php
session_start();
include("SSLCommerz.php");

$sslc = new SSLCommerz();
$tran_id = $_SESSION['payment_values']['tran_id'];
$amount = $_SESSION['payment_values']['amount'];
$currency = $_SESSION['payment_values']['currency'];

        $validation = $sslc->orderValidate($tran_id, $amount, $currency, $_POST);

        if ($validation == TRUE) 
        {	
			echo "Payment is Successful";
        } 
        else 
        {
            echo "Payment is not Successfully";
        }

?>