<?php

# Including the Controller PHP file that is handling the Dashboard View Design
include("app/Http/Controllers/AdminController.php");

# Including the Model Class that has ready-made functions to handle MySQL without writing SQL codes
include("app/Models/Eloquent.php");

$admin = new AdminController;

# We are getting Admin ID from Admin List Page through POST method. 
# We are saving this value in a Session varaible so that we can reuse it.
if(isset($_POST['admin_edit']))
	$_SESSION['SMC_admin_id_update'] = $_POST['admin_id'];

# Updating Data on Admin Edit Form Submission
if(isset($_POST['admin_update']))
{
	$updateStatus = $admin->updateAdmin($_SESSION['SMC_admin_id_update'], $_POST['admin_name'], $_POST['admin_email'], $_POST['admin_type'], $_POST['admin_status']);
}

# Function to show Data from Database on the Admin Edit Form
if(isset($_POST['admin_edit']) || !empty($_SESSION['SMC_admin_id_update']))
{
	$adminInfo = $admin->getAdminData($_SESSION['SMC_admin_id_update']);
}


?>
        <!-- page heading start-->
        <div class="page-heading">
            <h3>
                Edit Admin Account
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Manage Admin</a>
                </li>
                <li class="active"> Edit Admin </li>
            </ul>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Update information in the following form to Edit Admin Account
                        </header>
                        <div class="panel-body">
						
							<?php 
							if(isset($_POST['admin_update']))
							{
								if($updateStatus > 0)
								{
									echo '
										<div class="alert alert-success">
											The Admin Account is updated successfully!
										</div>
									';
								}
								else
								{
									echo '
										<div class="alert alert-danger">
											Sorry! Unable to updated the Admin Account!
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
                                            <input class=" form-control" id="firstname" name="admin_name" type="text" value="<?php echo @$adminInfo['admin_name']; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="email" class="control-label col-lg-2">Admin Email</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="email" name="admin_email" type="email" value="<?php echo @$adminInfo['admin_email']; ?>" />
                                        </div>
                                    </div>
									
									<div class="form-group ">
                                        <label for="admin_type" class="control-label col-lg-2">Admin Type</label>
                                        <div class="col-lg-10">
                                            <select name="admin_type" id="admin_type" class="form-control m-bot15">
												<option
												<?php
													if($adminInfo['admin_type'] == "Admin")
														echo " selected";
												?>
												>Admin</option>
												<option
												<?php
													if($adminInfo['admin_type'] == "Operator")
														echo " selected";
												?>
												>Operator</option>
											</select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group ">
                                        <label for="password" class="control-label col-lg-2">Admin Status</label>
                                        <div class="col-lg-10">
                                            <select name="admin_status" class="form-control m-bot15">
												<option
												<?php
													if($adminInfo['admin_status'] == "Active")
														echo " selected";
												?>
												>Active</option>
												<option
												<?php
													if($adminInfo['admin_status'] == "Inactive")
														echo " selected";
												?>
												>Inactive</option>
											</select>
                                        </div>
                                    </div>
                                    

                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button name="admin_update" class="btn btn-primary" type="submit">Submit</button>
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