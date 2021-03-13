<html>
<body>

<?php
///////////// PDF GENERATOR BY NIRJHOR /////////////
if (isset($_GET['pdf']))
{
    runFunction();
}
function runFunction()
{
	require_once("library/pdf-generator/dompdf_config.inc.php");
	
$html = 
<<<HTML
<div style="color: #3041AB;
	font-size: 14;" align="center">
<h3># WELCOME TO INVOICE #</h3>
<br />
<b>Product Name:</b> Web Hosting<br />
<b>Package Name:</b> GOLD PLAN<br />
<b>Server Type:</b> Linux/PHP<br />
<b>Product Price:</b> 15 USD / Year<br />
<br />
Thanks<br />
SuperbNexus Inc.
</div>

HTML;

	$dompdf = new DOMPDF();
	$dompdf->load_html($html);
	$dompdf->render();
	$dompdf->stream("Invoice - " . date("d-m-Y h:i:s") . ".pdf");
}
///////////// PDF GENERATOR BY NIRJHOR /////////////
?>

<?php

echo "<a href='".$_SERVER['PHP_SELF']."?pdf'>[ CLICK HERE ]</a>";

?>

</body>
</html>