<?php

# Including the Controller PHP file that is handling the Dashboard View Design
include("app/Http/Controllers/SubcatController.php");

# Including the Model Class that has ready-made functions to handle MySQL without writing SQL codes
include("app/Models/Eloquent.php");

$subcat = new SubcatController;
$eloquent = new Eloquent;

# Delete a Subcategory
if(isset($_POST['admin_delete']))
	$deleteResult = $admin->deleteAdmin($_POST['admin_id']);

# Get the List of Subcategories
$subcatList = $subcat->getSubcatList();

?>
        <!-- page heading start-->
        <div class="page-heading">
            <h3>
                List of Sub-Categories
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Manage Sub-Category</a>
                </li>
                <li class="active"> Sub-Category List </li>
            </ul>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
			<div class="row">
			<div class="col-sm-12">
			<section class="panel">
			<header class="panel-heading">
				List of Sub-Categories
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
				<th>Parent Category Name</th>
				<th>Sub-Category Name</th>
				<th>Sub-Category Status</th>
				<th>Action</th>
			</tr>
			</thead>
			<tbody>
			
				
				<?php 
				$n = 1;
				foreach($subcatList AS $eachRow)
				{
				echo '
					<tr>
						<td>'.$n++.'</td>
						<td>'.$eachRow['category_name'].'</td>
						<td>'.$eachRow['subcategory_name'].'</td>
						<td>'.$eachRow['subcategory_status'].'</td>
						<td>
							<form method="post" action="admin-edit.php">
							<input type="hidden" name="admin_id" value="'.@$eachRow['id'].'" />
							<button name="admin_edit" class="btn btn-warning btn-xs" type="submit">Edit</button>
							</form>
							
							<form method="post" action="">
							<input type="hidden" name="admin_id" value="'.@$eachRow['id'].'" />
							<button name="admin_delete" class="btn btn-danger btn-xs" type="submit">Delete</button>
							</form>
						</td>
					</tr>
				';
				}
				?>
			
			</tbody>
			<tfoot>
			<tr>
				<th>ID</th>
				<th>Parent Category Name</th>
				<th>Sub-Category Name</th>
				<th>Sub-Category Status</th>
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
