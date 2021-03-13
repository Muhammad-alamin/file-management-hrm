<?php

/////////////
require_once("../library/pdf-generator/dompdf_config.inc.php");
	$fullName = $_REQUEST['fn'];
	$emailAddress = $_REQUEST['ea'];
	$totalItem = $_REQUEST['ti'];
	$totalPrice = (float) $_REQUEST['tp'];
	$invoiceId = $_REQUEST['ii'];
	//$songPrices = $_REQUEST['sp'];
	$date = date("d-m-Y h:i:s");

$html =  <<<HTML
<html>
<head>
</head>
<body>
<div>
<body>

<p align="center" style="font-family:Verdana;color:white;background-color:#006699;font-size: xx-large;"><b><br />eTunes.com.bd - the eTunes Music Portal</b> <br /><br /></p>

<p align="center" style="font-family:Verdana;color:white;background-color:gray">
<br />
INVOICE NUMBER # $invoiceId
<br /><br /><br />
<b>Invoice Date: $date</b> <br /><br />
<b>Full Name:</b> $fullName<br />
<b>Email Address:</b> $emailAddress<br /><br />
<b>Number of Ordered Songs:</b> $totalItem<br />
<b>Total Due:</b> $totalPrice TK<br />
<b>Payment Status:</b> Unpaid<br />
<br />
<b>NOTE:</b> If you do not pay within next 7 days, your Unpaid Invoice will be Cancelled.
<br /><br />
</p>

<p align="center" style="font-family:Verdana;color:white;background-color:#006699;font-size: small;"><b><br />All Right Reserved @ eTunes Music Portal</b> <br /><br /></p>

</body>
</html>
HTML;

	$dompdf = new DOMPDF();
	$dompdf->load_html($html);
	$dompdf->render();
	$dompdf->stream("Invoice for ".$fullName. " - ".$date.".pdf");
/////////////
?>