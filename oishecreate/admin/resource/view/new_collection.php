<?php

# Including the Controller PHP file that is handling the Dashboard View Design
include("app/Http/Controllers/ProductController.php");

# Including the Model Class that has ready-made functions to handle MySQL without writing SQL codes
include("app/Models/Eloquent.php");

$product = new ProductController;
$eloquent = new Eloquent;

# Get Category List using Eloquent


if(isset($_POST['new_collection__create']))
{
	# Check Product Image before Uploading
	$imageResult = $product->checkImage(@$_FILES['product_default_image']['type'], @$_FILES['product_default_image']['size'], @$_FILES['product_default_image']['error']);

    

	if($imageResult == true)
	{
		# Saving Slider to Database
		$tableName = "new_collection";

		$columnValue["product_name"] = $_POST['product_name'];
		$columnValue["product_summary"] = $_POST['product_summary'];
		$columnValue["product_details"] = $_POST['product_details'];
		$columnValue["regular_price"] = $_POST['regular_price'];
		$columnValue["discounted_price"] = $_POST['discounted_price'];
		$columnValue["discount_end_date"] = $_POST['discount_end_date'] . " " . $_POST['discount_end_time'];
		$columnValue["product_quantity"] = $_POST['product_quantity'];
		$columnValue["product_default_image"] = "PRODUCT_" . date("YmdHis") . "_" . rand(100000, 999999) . "_" . $_FILES['product_default_image']['name'];
		$columnValue["product_status"] = $_POST['product_status'];
		$result = $eloquent->insertData($tableName, $columnValue);
		
		if($result['NO_OF_ROW_INSERTED'] > 0)
			move_uploaded_file($_FILES['product_default_image']['tmp_name'], "../files/products/" . $columnValue["product_default_image"]);
	}
	else 
		$result = "WRONG_FILE";

}
    
?>
        <!-- page heading start-->
        <div class="page-heading">
            <h3>
                Create Product
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Manage Product</a>
                </li>
                <li class="active"> Create Product </li>
            </ul>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Create a new Product for your Store
                        </header>
                        <div class="panel-body">
						
							<?php 
							if(isset($_POST['new_collection__create']))
							{
								if($result > 0)
								{
									echo '
										<div class="alert alert-success">
											The Product is saved successfully!
										</div>
									';
								}
								else
								{
									echo '
										<div class="alert alert-danger">
											Sorry! Unable to create the Product! 
										</div>
									';
								}
							}
							
							?>
						
                            <div class="form">
                                <form class="cmxform form-horizontal adminex-form" id="signupForm" method="post" action="" enctype="multipart/form-data">
									
									
									
                                    <div class="form-group ">
                                        <label for="product_name" class="control-label col-lg-2">Product Name</label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" id="product_name" name="product_name" type="text" required />
                                        </div>
                                    </div>
									
                                    <div class="form-group ">
                                        <label for="email" class="control-label col-lg-2">Product Summary</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="email" name="product_summary" type="html" required />
                                        </div>
                                    </div>
									
									<div class="form-group ">
                                        <label for="email" class="control-label col-lg-2">Product Details</label>
                                        <div class="col-lg-10">
                                            <textarea name="product_details" class="wysihtml5 form-control" rows="9" required></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group ">
                                        <label for="password" class="control-label col-lg-2">Product Quantity</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="password" name="product_quantity" type="text(numeric)" required />
                                        </div>
                                    </div>
									<div class="form-group ">
                                        <label for="password" class="control-label col-lg-2">Regular Price</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="password" name="regular_price" type="text(float)" required />
                                        </div>
                                    </div>
									<div class="form-group ">
                                        <label for="password" class="control-label col-lg-2">Discounted Price</label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="password" name="discounted_price" type="text(float)" />
                                        </div>
                                    </div>
									
									<div class="form-group">
										<label class="control-label col-md-2">Discount Ending Day</label>
										<div class="col-md-10">
											<input name="discount_end_date" class="form-control form-control-inline input-medium nirjhor-datepicker default-date-picker"  size="16" type="text" value="" />
											<code>Select date (Format: Year-Month-Date) from above field</code>
										</div>
									</div>
									
									<div class="form-group">
                                        <label class="control-label col-md-2">Discount Ending Time</label>
                                        <div class="col-md-10">
                                            <div class="input-group bootstrap-timepicker">
                                                <input name="discount_end_time" type="text" class="form-control timepicker-24">
                                                    <span class="input-group-btn">
                                                    <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                    
									<div class="form-group ">
                                        <label for="product_status" class="control-label col-lg-2">Product Status</label>
                                        <div class="col-lg-10">
                                            <select id="product_status" name="product_status" class="form-control m-bot15" required>
												<option>Active</option>
												<option>Inactive</option>
											</select>
                                        </div>
                                    </div>
									
                                <div class="form-group last">
                                    <label class="control-label col-md-2">Product Image</label>
                                    <div class="col-md-10">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                   <span class="btn btn-default btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                   <input name="product_default_image" type="file" class="default" required />
                                                   </span>
                                                <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a>
                                            </div>
                                        </div>
                                        <br/>
                                        <span class="label label-danger ">NOTE!</span>
                                             <span>
                                             Attached image thumbnail is
                                             supported in Latest Firefox, Chrome, Opera,
                                             Safari and Internet Explorer 10 only
                                             </span>
                                    </div>
                                </div>
                                    
                                    

                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button name="new_collection__create" class="btn btn-primary" type="submit">Submit</button>
                                            <a href="product-list.php"><button class="btn btn-default" type="button">Cancel</button></a>
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
<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
