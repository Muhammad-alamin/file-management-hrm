<?php
include("includes/top.php");
?>

        <!-- page heading start-->
        <div class="page-heading">
            <h3>
                List of Orders
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Manage Orders</a>
                </li>
                <li class="active">List Orders</li>
            </ul>
        </div>
        <!-- page heading end-->

        <!--body wrapper start-->
        <div class="wrapper">
			<div class="row">
        <div class="col-sm-12">
        <section class="panel">
        <header class="panel-heading">
            List of Customer
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
            <th>Order ID</th>
            <th>Total Price</th>
            <th>Order Status</th>
            <th>Payment Status</th>
            <th>View Order Details</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>01</td>
            <td>5500</td>
            <td>panding</td>
			<td>Complete</td>
            <td>
				<a href="order-details.php"><button class="btn btn-warning btn-sm" type="button">Details</button></a>
			</td>
        </tr>
		<tr>
            <td>02</td>
            <td>6500</td>
            <td>Complete</td>
			<td>Complete</td>
            <td>
				<a href="order-details.php"><button class="btn btn-warning btn-sm" type="button">Details</button></a>
			</td>
        </tr>
		<tr>
            <td>03</td>
            <td>1500</td>
            <td>Accepted</td>
			<td>Complete</td>
            <td>
				<a href="order-details.php"><button class="btn btn-warning btn-sm" type="button">Details</button></a>
			</td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <th>Order ID</th>
            <th>Total Price</th>
            <th>Order Status</th>
            <th>Payment Status</th>
            <th>View Order Details</th>
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