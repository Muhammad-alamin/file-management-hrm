<?php

# Including the Controller PHP file that is handling the Dashboard View Design
include("app/Http/Controllers/SubcatController.php");

# Including the Model Class that has ready-made functions to handle MySQL without writing SQL codes
include("app/Models/Eloquent.php");

$subcat = new SubcatController;
$eloquent = new Eloquent;

	## READYMADE ELOQUENT ## GET CATEGORY DATA ## 
	$columnName["1"] = "id";
	$columnName["2"] = "category_name";
	$tableName = "categories";
	$getList = $eloquent->selectData($columnName, $tableName);
	
	## SAVE SUBCATEGORY ##
	if(isset($_POST['subcat_create']))
	{
		$tableName = "subcategories";
		$columnValue["category_id"] = $_POST['category_id'];
		$columnValue["subcategory_name"] = $_POST['subcat_name'];
		$columnValue["subcategory_status"] = $_POST['subcat_status'];
		
		$queryResult = $eloquent->insertData($tableName, $columnValue);
	}
	
?>
        <!-- page heading start-->
        <div class="page-heading">
            <h3>
                Create Subcategory
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Manage Subcategory</a>
                </li>
                <li class="active"> Create Subcategory </li>
            </ul>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Create a Subcategory from here
                        </header>
                        <div class="panel-body">
						
							<?php 
							if(isset($_POST['subcat_create']))
							{
								if($queryResult['NO_OF_ROW_INSERTED'] > 0)
								{
									echo '
										<div class="alert alert-success">
											The Subcategory is created successfully!
										</div>
									';
								}
								else
								{
									echo '
										<div class="alert alert-danger">
											Sorry! Unable to create the Subcategory!
										</div>
									';
								}
							}
							
							?>
						
                            <div class="form">
                                <form class="cmxform form-horizontal adminex-form" id="signupForm" method="post" action="">
                                    <div class="form-group ">
                                        <label for="category_id" class="control-label col-lg-2">Category Name</label>
                                        <div class="col-lg-10">
                                            <select name="category_id" id="category_id" class="form-control m-bot15">
												<?php 
													foreach($getList AS $eachRow)
													{
														echo "<option value='".$eachRow['id']."'>" . $eachRow['category_name'] . "</option>";
													}
												?>
											</select>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="email" class="control-label col-lg-2">Subcategory Name</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="email" name="subcat_name" type="text" />
                                        </div>
                                    </div>
                                    
									<div class="form-group ">
                                        <label for="password" class="control-label col-lg-2">Subcategory Type</label>
                                        <div class="col-lg-10">
                                            <select name="subcat_status" class="form-control m-bot15">
												<option>Active</option>
												<option>Inactive</option>
											</select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button name="subcat_create" class="btn btn-primary" type="submit">Submit</button>
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