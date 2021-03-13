<?php

# Including the Controller PHP file that is handling the Dashboard View Design
include("app/Http/Controllers/UserController.php");

$user = new UserController;
$eloquent = new Eloquent;

if(isset($_POST['try_login']))
{
	$columnName = "*";
	$tableName = "customers";
	$whereValue["customer_email"] = $_POST['username'];
	$whereValue["customer_password"] = md5($_POST['password']);

	$queryResult = $eloquent->selectData($columnName, $tableName, $whereValue);
	
	if(count($queryResult) > 0)
	{
		$_SESSION['SMCH_customer_login_time'] = date("Y-m-d H:i:s");
		$_SESSION['SMCH_customer_id'] = $queryResult[0]['id'];
		$_SESSION['SMCH_customer_name'] = $queryResult[0]['customer_name'];
		$_SESSION['SMCH_customer_email'] = $queryResult[0]['customer_email'];
		$_SESSION['SMCH_customer_mobile'] = $queryResult[0]['customer_mobile'];
	
		if(!empty($_SESSION['SMCH_return_from_login']))
			echo "<script>window.location.href = '".$_SESSION['SMCH_return_from_login']."';</script>";
		else
			echo "<script>window.location.href = 'index.php';</script>";
	}
	
}

?>

<!-- YOUR PAGE DESIGN WILL GO BELOW -->

<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Login</li>
            </ol>
        </div><!-- End .container -->
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-9 order-lg-last dashboard-content">
                <h2>Login Here</h2>
                
                <form action="" method="post">

                    <div class="form-group required-field">
                        <label for="acc-email">Email</label>
                        <input type="email" class="form-control" id="acc-email" name="username" required>
                    </div><!-- End .form-group -->

                    <div class="form-group required-field">
                        <label for="acc-password">Password</label>
                        <input type="password" class="form-control" id="acc-password" name="password" required>
                    </div><!-- End .form-group -->

                    <div class="mb-2"></div><!-- margin -->

                    <div id="account-chage-pass">
                        <h3 class="mb-2">Change Password</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group required-field">
                                    <label for="acc-pass2">Password</label>
                                    <input type="password" class="form-control" id="acc-pass2" name="acc-pass2">
                                </div><!-- End .form-group -->
                            </div><!-- End .col-md-6 -->

                            <div class="col-md-6">
                                <div class="form-group required-field">
                                    <label for="acc-pass3">Confirm Password</label>
                                    <input type="password" class="form-control" id="acc-pass3" name="acc-pass3">
                                </div><!-- End .form-group -->
                            </div><!-- End .col-md-6 -->
                        </div><!-- End .row -->
                    </div><!-- End #account-chage-pass -->

                    <div class="required text-right">* Required Field</div>
                    <div class="form-footer">
                        <a href="#"><i class="icon-angle-double-left"></i>Back</a>

                        <div class="form-footer-right">
                            <button name="try_login" type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div><!-- End .form-footer -->
                </form>
            </div><!-- End .col-lg-9 -->

            <aside class="sidebar col-lg-3">
                <div class="widget widget-dashboard">
                    <h3 class="widget-title">My Account</h3>

                    <ul class="list">
                        <li class="active"><a href="dashboard">Account Dashboard</a></li>
                        <li><a href="profile.php">Account Information</a></li>
                        <li><a href="#">Address Book</a></li>
                        <li><a href="orders.php">My Orders</a></li>
                        <!--<li><a href="#">Billing Agreements</a></li>
                        <li><a href="#">Recurring Profiles</a></li>
                        <li><a href="#">My Product Reviews</a></li>
                        <li><a href="#">My Tags</a></li>
                        <li><a href="#">My Wishlist</a></li>
                        <li><a href="#">My Applications</a></li>
                        <li><a href="#">Newsletter Subscriptions</a></li>
                        <li><a href="#">My Downloadable Products</a></li>-->
                    </ul>
                </div><!-- End .widget -->
            </aside><!-- End .col-lg-3 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

    <div class="mb-5"></div><!-- margin -->
</main><!-- End .main -->