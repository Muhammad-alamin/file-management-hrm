<?php
include("includes/top.php");
?>

        <!-- page heading start-->
        <div class="page-heading">
            <h3>
                Category Creation
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Manage Category</a>
                </li>
                <li class="active"> Create Category </li>
            </ul>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
			<div class="row">
                <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2">Category Name</label>
                    <div class="col-lg-10">
                        <input class=" form-control" id="firstname" name="category-name" type="text" />
                    </div>
                </div>
				
				<!-- <div class="btn-group" style="margin:10px 100px;">
                    <button data-toggle="dropdown" class="btn btn-warning dropdown-toggle" type="button" aria-expanded="true">Status <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="#">Active</a></li>
                        <li><a href="#">Inactive</a></li>
                    </ul>
                </div> -->
				
				<div class="form-group " style="margin-top:50px;">
                    <label for="firstname" class="control-label col-lg-2">Category Status</label>
                    <div class="col-lg-10">
                        <button data-toggle="dropdown" class="btn btn-info dropdown-toggle" type="button" aria-expanded="true">Status <span class="caret"></span></button>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="#">Active</a></li>
                        <li><a href="#">Inactive</a></li>
                    </ul>
                    </div>
                </div>
				
				
				<div class="form-group" style="margin-top:100px;">
					<div class="col-lg-offset-2 col-lg-10">
						<a href="category-list.php"><button class="btn btn-primary" type="submit">Submit</button></a>
						<a href="dashboard.php"><button class="btn btn-default" type="button">Cancel</button></a>
					</div>
				</div>
			
			</div>
		
		
		
		</div>
        <!--body wrapper end-->

<?php
include("includes/tail.php");
?>