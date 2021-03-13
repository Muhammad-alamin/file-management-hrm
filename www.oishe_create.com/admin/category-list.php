<?php
include("includes/top.php");
?>

        <!-- page heading start-->
        <div class="page-heading">
            <h3>
                List of Categories
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Manage Category</a>
                </li>
                <li class="active"> Category List </li>
            </ul>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
			<div class="row">
			<div class="col-sm-12">
			<section class="panel">
			<header class="panel-heading">
				List of Categories
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
				<th>Category ID</th>
				<th>Category Name</th>
				<th>Category Status</th>
				<th>Action</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>01</td>
				<td>Electronics</td>
				<td>Active</td>
				<td><a href="category-create.php"><button class="btn btn-warning btn-sm" type="button">Edit</button></a></td>
			</tr>
			<tr>
				<td>02</td>
				<td>Cloths</td>
				<td>Active</td>
				<td><a href="category-create.php"><button class="btn btn-warning btn-sm" type="button">Edit</button></a></td>
			</tr>
			<tr>
				<td>03</td>
				<td>Interior</td>
				<td>Active</td>
				<td><a href="category-create.php"><button class="btn btn-warning btn-sm" type="button">Edit</button></a></td>
			</tr>
			</tbody>
			<tfoot>
			<tr>
				<th>Category ID</th>
				<th>Category Name</th>
				<th>Category Status</th>
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

<?php
include("includes/tail.php");
?>