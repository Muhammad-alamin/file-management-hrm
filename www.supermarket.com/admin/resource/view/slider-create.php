<?php

# Including the Controller PHP file that is handling the Dashboard View Design
include("app/Http/Controllers/SliderController.php");

# Including the Model Class that has ready-made functions to handle MySQL without writing SQL codes
include("app/Models/Eloquent.php");

$slider = new SliderController;
$eloquent = new Eloquent;

if(isset($_POST['slider_create']))
{
	# Check Slider before Uploading
	$imageResult = $slider->checkImage(@$_FILES['slider_file']['type'], @$_FILES['slider_file']['size'], @$_FILES['slider_file']['error']);

	if($imageResult == true)
	{
		# Saving Slider to Database
		$tableName = "sliders";
		$columnValue["slider_title"] = $_POST['slider_title'];
		$columnValue["slider_file"] = "SLIDER_" . date("YmdHis") . "_" . rand(100000, 999999) . "_" . $_FILES['slider_file']['name'];
		$columnValue["slider_sequence"] = $_POST['slider_sequence'];
		$columnValue["created_at"] = date("Y-m-d H:i:s");
		$columnValue["slider_status"] = 'Active';
		
		$result = $eloquent->insertData($tableName, $columnValue);
		
		if($result['NO_OF_ROW_INSERTED'] > 0)
			move_uploaded_file($_FILES['slider_file']['tmp_name'], "../files/sliders/" . $columnValue["slider_file"]);
	}
	else 
		$result = "WRONG_FILE";
}

?>
        <!-- page heading start-->
        <div class="page-heading">
            <h3>
                Create Slider
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Manage Slider</a>
                </li>
                <li class="active"> Create Slider </li>
            </ul>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Create a new Slider for your Store
                        </header>
                        <div class="panel-body">
						
							<?php 
							if(isset($_POST['slider_create']))
							{
								if(@$result['NO_OF_ROW_INSERTED'] > 0)
								{
									echo '
										<div class="alert alert-success">
											The Slider is created successfully!
										</div>
									';
								}
								else if($result == "WRONG_FILE")
								{
									echo '
										<div class="alert alert-danger">
											Please upload correct file format!
										</div>
									';
								}
								else
								{
									echo '
										<div class="alert alert-danger">
											Sorry! Unable to create the Slider!
										</div>
									';
								}
							}
							
							?>
						
                            <div class="form">
                                <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
								
								<div class="form-group ">
                                        <label for="slider_title" class="control-label col-lg-2">Slider Title</label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" id="slider_title" name="slider_title" type="text" />
                                        </div>
                                </div>
								
                                <div class="form-group last">
                                    <label class="control-label col-md-3"></label>
                                    <div class="col-md-9">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                   <span class="btn btn-default btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                   <input name="slider_file" type="file" class="default" />
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
								<div class="form-group ">
                                        <label for="password" class="control-label col-lg-2">Slider Type</label>
                                        <div class="col-lg-10">
                                            <select name="slider_status" class="form-control m-bot15">
												<option>Active</option>
												<option>Inactive</option>
											</select>
                                        </div>
                                </div>
								<div class="form-group ">
                                        <label for="slider_sequence" class="control-label col-lg-2">Slider Sequence</label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" id="slider_sequence" name="slider_sequence" type="text" />
                                        </div>
                                </div>
								
								<div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button name="slider_create" class="btn btn-primary" type="submit">Submit</button>
                                            <a href="slider-list.php"><button class="btn btn-default" type="button">Cancel</button></a>
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