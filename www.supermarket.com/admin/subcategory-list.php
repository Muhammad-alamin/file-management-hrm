<?php
include("app/Http/Controllers/View.php");
 
$view = new View;
 
	$view->includeView("top");
	$view->loadContent("subcategory-list");
	$view->includeView("tail");
?>