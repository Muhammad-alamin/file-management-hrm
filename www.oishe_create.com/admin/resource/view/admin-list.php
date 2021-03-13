<?php

# Including the Controller PHP file that is handling the Dashboard View Design
include("app/Http/Controllers/AdminController.php");

# Including the Model Class that has ready-made functions to handle MySQL without writing SQL codes
include("app/Models/Eloquent.php");

$admin = new AdminController;
$eloquent = new Eloquent;

# Delete an Admin
if(isset($_POST['admin_delete']))
	$deleteResult = $admin->deleteAdmin($_POST['admin_id']);

# Get the List of Admins
$columnName = "*";
$tableName = "admins";
$adminList = $eloquent->selectData($columnName, $tableName);

?>
        <!-- page heading start-->
        <div class="page-heading">
            <h3>
                List of Admin
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Manage Admin</a>
                </li>
                <li class="active"> Admin List </li>
            </ul>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
		
		<div class="row">
        <div class="col-sm-12">
        <section class="panel">
        <header class="panel-heading">
            List of Admin
            <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-times"></a>
             </span>
        </header>
        <div class="panel-body">
		
		<?php 
		if(isset($_POST['admin_delete']))
		{
			if($deleteResult > 0)
				echo 
				'<div class="alert alert-success">
					The Account Profile is deleted successfully!
				</div>';
			else
				echo 
				'<div class="alert alert-danger">
					Sorry! Unable to delete the Admin Account!
				</div>';
		}
		?>
		
        <div class="adv-table">
        <table  class="display table table-bordered table-striped" id="dynamic-table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Admin Name</th>
            <th>Email</th>
            <th>Admin Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
		
		<?php 
		$n = 1;
		foreach($adminList AS $eachRow)
		{
		echo '
        <tr>
            <td>'.$n.'</td>
            <td>'.$eachRow['admin_name'].'</td>
            <td>'.$eachRow['admin_email'].'</td>
			<td>'.$eachRow['admin_status'].'</td>
			<td>
            <button class="btn btn-primary btn-xs" type="submit">Reset Password</button>
			
			<form method="post" action="admin-edit.php">
			<input type="hidden" name="admin_id" value="'.$eachRow['id'].'" />
			<button name="admin_edit" class="btn btn-warning btn-xs" type="submit">Edit</button>
			</form>
			
			<form method="post" action="">
			<input type="hidden" name="admin_id" value="'.$eachRow['id'].'" />
			<button name="admin_delete" class="btn btn-danger btn-xs" type="submit">Delete</button>
			</form>
			</td>
        </tr>
		';
		$n++;
		}
		?>
		
        </tbody>
        <tfoot>
        <tr>
            <th>Admin ID</th>
            <th>Admin Name</th>
            <th>Email</th>
            <th>Admin Status</th>
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
