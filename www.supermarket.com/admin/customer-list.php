<?php
include("includes/top.php");
?>

        <!-- page heading start-->
        <div class="page-heading">
            <h3>
                List of Customer
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Manage Customer</a>
                </li>
                <li class="active"> Customer List </li>
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
            <th>Customer ID</th>
            <th>Customer Name</th>
            <th>Customer Email</th>
            <th>Customer Mobile</th>
            <th>Customer Sign Up Date</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>01</td>
            <td>Md. Al-Amin</td>
            <td>alamin@gmail.com</td>
			<td>011025632501</td>
			<td>24/02/2019</td>
			<td>Active</td>
            <td><a href="#"><button class="btn btn-primary btn-sm" type="button">Reset Password</button></a>
			<a href="#"><button class="btn btn-warning btn-sm" type="button">Edit</button></a>
			
			</td>
        </tr>
		<tr>
            <td>02</td>
            <td>Sumit</td>
            <td>sumit@gmial.com</td>
			<td>011052632552</td>
			<td>23/05/2019</td>
			<td>Active</td>
            <td><a href="#"><button class="btn btn-primary btn-sm" type="button">Reset Password</button></a>
			<a href="#"><button class="btn btn-warning btn-sm" type="button">Edit</button></a>
			
			</td>
        </tr>
		<tr>
            <td>03</td>
            <td>Mahbub</td>
            <td>mahbub@gmail.com</td>
            <td>011855522525</td>
            <td>15/12/2019</td>
            <td>Active</td>
            <td><a href="#"><button class="btn btn-primary btn-sm" type="button">Reset Password</button></a>
			<a href="#"><button class="btn btn-warning btn-sm" type="button">Edit</button></a>
			
			</td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <th>Customer ID</th>
            <th>Customer Name</th>
            <th>Customer Email</th>
            <th>Customer Mobile</th>
            <th>Customer Sign Up Date</th>
            <th>Status</th>
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