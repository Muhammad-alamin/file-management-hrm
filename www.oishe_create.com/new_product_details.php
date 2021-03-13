<?php
include("app/Http/Controllers/View.php");
 
$view = new View;
 
	$view->includeView("top");
	$view->loadContent("new_product_details");
	$view->includeView("tail");
?>