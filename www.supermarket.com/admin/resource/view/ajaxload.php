<?php

include("app/Http/Controllers/AjaxLoadController.php");
include("app/Models/Eloquent.php");

$ajaxLoad = new AjaxLoadController;
$eloquent = new Eloquent;

if($_REQUEST['category_id'])
{
	$columnName["1"] = "id";
	$columnName["2"] = "subcategory_name";
	$tableName = "subcategories";
	$whereValue["category_id"] = $_REQUEST['category_id'];
	$queryResult = $eloquent->selectData($columnName, $tableName, $whereValue);
	
	if(count($queryResult) > 0)
	{
		foreach($queryResult AS $eachRow)
		{
			echo "<option value='".$eachRow['id']."'>".$eachRow['subcategory_name']."</option>";
		}
	}
	else
	{
		echo "<option>No Subcategory Available</option>";
	}
}
