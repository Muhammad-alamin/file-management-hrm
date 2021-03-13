<?php
include("app/Http/Controllers/View.php");
 
$view = new View;
 
	$view->includeView("top");
	$view->loadContent("product-create");
	$view->includeView("tail");
?>