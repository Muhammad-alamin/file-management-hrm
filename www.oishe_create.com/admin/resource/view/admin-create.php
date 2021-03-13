<?php

# Including the Controller PHP file that is handling the Dashboard View Design
include("app/Http/Controllers/AdminController.php");

# Including the Model Class that has ready-made functions to handle MySQL without writing SQL codes
include("app/Models/Eloquent.php");

$admin = new AdminController;
$eloquent = new Eloquent;

if(isset($_POST['admin_create']))
{
	## READYMADE ELOQUENT 
	$tableName = "admins";
	$columnValue["admin_name"] = $_POST['admin_name'];
	$columnValue["admin_email"] = $_POST['admin_email'];
	$columnValue["admin_password"] = md5($_POST['admin_password']);
	$columnValue["admin_type"] = $_POST['admin_type'];
	$columnValue["created_at"] = date("Y-m-d H:i:s");
	$columnValue["admin_status"] = 'Active';

	$result = $eloquent->insertData($tableName, $columnValue);
}

?>
        <!-- page heading start-->
        <div class="page-heading">
            <h3>
                Create Admin
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Manage Admin</a>
                </li>
                <li class="active"> Create Admin </li>
            </ul>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Create an Admin User from here
                        </header>
                        <div class="panel-body">
						
							<?php 
							if(isset($_POST['admin_create']))
							{
								if($result['NO_OF_ROW_INSERTED'] > 0)
								{
									echo '
										<div class="alert alert-success">
											The Admin Account is created successfully!
										</div>
									';
								}
								else
								{
									echo '
										<div class="alert alert-danger">
											Sorry! Unable to create the Admin Account!
										</div>
									';
								}
							}
							
							?>
						
                            <div class="form">
                                <form class="cmxform form-horizontal adminex-form" id="signupForm" method="post" action="">
                                    <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-2">Admin Name</label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" id="firstname" name="admin_name" type="text" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="email" class="control-label col-lg-2">Admin Email</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="email" name="admin_email" type="email" />
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="form-group ">
                                        <label for="password" class="control-label col-lg-2">Admin Password</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="password" name="admin_password" type="password" />
                                        </div>
                                    </div>
                                    
									<div class="form-group ">
                                        <label for="password" class="control-label col-lg-2">Admin Type</label>
                                        <div class="col-lg-10">
                                            <select name="admin_type" class="form-control m-bot15">
												<option>Admin</option>
												<option>Operator</option>
											</select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button name="admin_create" class="btn btn-primary" type="submit">Submit</button>
                                            <a href="dashboard.php"><button class="btn btn-default" type="button">Cancel</button></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!--body wrapper end-->