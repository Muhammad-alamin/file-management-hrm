<?php
include("includes/top.php");
?>

        <!-- page heading start-->
        <div class="page-heading">
            <h3>
                List of product
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Manage product</a>
                </li>
                <li class="active"> product List </li>
            </ul>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
			<div class="row">
			<div class="col-sm-12">
			<section class="panel">
			<header class="panel-heading">
				List of Product
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
				<th>Product ID</th>
				<th>Product Name</th>
				<th>Product Image</th>
				<th>Product Summary</th>
				<th>Product Details</th>
				<th>Product Quantity</th>
				<th>Product Price</th>
				<th>Slider Status</th>
				<th>Action</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>01</td>
				<td>Desktop</td>
				<td><img src="image/1.jpg" alt="Desktop" style="width:50px; height:50px;" /></td>
				<td>This is one of the best Desktop.</td>
				<td>This is one of the best Desktop.</td>
				<td>05</td>
				<td>45000</td>
				<td>Active</td>
				<td><a href="product-create.php"><button class="btn btn-warning btn-sm" type="button">Edit</button></a></td>
			</tr>
			<tr>
				<td>02</td>
				<td>Watch</td>
				<td><img src="image/2.jpg" alt="Watch" style="width:50px; height:50px;" /></td>
				<td>This is one of the best watch.</td>
				<td>This is one of the best watch.</td>
				<td>06</td>
				<td>5000</td>
				<td>Active</td>
				<td><a href="product-create.php"><button class="btn btn-warning btn-sm" type="button">Edit</button></a></td>
			</tr>
			<tr>
				<td>03</td>
				<td>Mobile</td>
				<td><img src="image/3.jpg" alt="Mobile" style="width:50px; height:50px;" /></td>
				<td>This is one of the best Mobile.</td>
				<td>This is one of the best Mobile.</td>
				<td>10</td>
				<td>25000</td>
				<td>Active</td>
				<td><a href="product-create.php"><button class="btn btn-warning btn-sm" type="button">Edit</button></a></td>
			</tr>
			</tbody>
			<tfoot>
			<tr>
				<th>Product ID</th>
				<th>Product Name</th>
				<th>Product Image</th>
				<th>Product Summary</th>
				<th>Product Details</th>
				<th>Product Quantity</th>
				<th>Product Price</th>
				<th>Slider Status</th>
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