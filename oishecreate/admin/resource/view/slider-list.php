<?php

# Including the Controller PHP file that is handling the Dashboard View Design
include("app/Http/Controllers/SliderController.php");

# Including the Model Class that has ready-made functions to handle MySQL without writing SQL codes
include("app/Models/Eloquent.php");

$admin = new SliderController;
$eloquent = new Eloquent;

# Delete an Admin
if(isset($_POST['admin_delete']))
	$deleteResult = $admin->deleteAdmin($_POST['admin_id']);

# Get the List of Admins
$columnName = "*";
$tableName = "sliders";
$sliderList = $eloquent->selectData($columnName, $tableName);

?>
        <!-- page heading start-->
        <div class="page-heading">
            <h3>
                List of Image Slider
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Manage Slider</a>
                </li>
                <li class="active">List of Image Slider</li>
            </ul>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
		
		<div class="row">
        <div class="col-sm-12">
        <section class="panel">
        <header class="panel-heading">
            List of Sliders
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span>
        </header>
        <div class="panel-body">
        <div class="adv-table">
        <table  class="display table table-bordered table-striped" id="dynamic-table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Slider Title</th>
            <th>Slider</th>
            <th>Slider Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        
            <?php
				$n = 1;
				foreach($sliderList AS $eachRow)
				{
				echo '<tr>
					<td>'.$n++.'</td>
					<td>'.$eachRow['slider_title'].'</td>
					<td><img src="../files/sliders/'.$eachRow['slider_file'].'" class="img-responsive nir-tbl-img" /></td>
					<td>'.$eachRow['slider_status'].'</td>
					<td>
					<a href="slider-create.php"><button class="btn btn-warning btn-xs" type="button">Edit</button></a>
					<a href="slider-create.php"><button class="btn btn-danger btn-xs" type="button">Delete</button></a>
					</td>
					</tr>
				';
				}
			?>
        
        </tbody>
        <tfoot>
        <tr>
            <th>ID</th>
            <th>Slider Title</th>
            <th>Slider</th>
            <th>Slider Status</th>
            <th>Action</th>
        </tr>
        </tfoot>
        </table>
        </div>
        </div>
        </section>
        </div>
        </div>
		
		</div>
        <!--body wrapper end-->
