<?php
include("includes/top.php");
?>

        <!-- page heading start-->
        <div class="page-heading">
            <h3>
                Order Details
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Manage Orders</a>
                </li>
                <li class="active">Order Details</li>
            </ul>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
			<div class="row">
			<div class="col-sm-12">
			<section class="panel">
			<header class="panel-heading">
				Order Details
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
				<th>Item ID</th>
				<th>Item Name</th>
				<th>Item Price</th>
				<th>Item image</th>
				<th>Action</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>01</td>
				<td>Desktop</td>
				<td>45000</td>
				<td><img src="image/1.jpg" alt="Desktop" style="width:50px; height:50px;" /></td>
				<td><a href="#"><button class="btn btn-danger btn-sm" type="button">Delete</button></a></td>
			</tr>
			<tr>
				<td>02</td>
				<td>Watch</td>
				<td>25000</td>
				<td><img src="image/2.jpg" alt="Watch" style="width:50px; height:50px;" /></td>
				<td><a href="3"><button class="btn btn-danger btn-sm" type="button">Delete</button></a></td>
			</tr>
			<tr>
				<td>03</td>
				<td>Mobile</td>
				<td>5000</td>
				<td><img src="image/3.jpg" alt="Mobile" style="width:50px; height:50px;" /></td>
				<td><a href="#"><button class="btn btn-danger btn-sm" type="button">Delete</button></a></td>
			</tr>
			</tbody>
			<tfoot>
			<tr>
				<th>Item ID</th>
				<th>Item Name</th>
				<th>Item Price</th>
				<th>Item image</th>
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