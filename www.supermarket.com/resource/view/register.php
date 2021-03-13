<?php

# Including the Controller PHP file that is handling the Dashboard View Design
include("app/Http/Controllers/UserController.php");

$user = new UserController;
$eloquent = new Eloquent;

if(isset($_POST['try_registration']))
{
	$tableName = "customers";
	$columnValue["customer_name"] = $_POST['full_name'];
	$columnValue["customer_mobile"] = $_POST['mobile_no'];
	$columnValue["customer_email"] = $_POST['email_address'];
	$columnValue["customer_password"] = md5($_POST['password']);
	$columnValue["created_at"] = date("Y-m-d H:i:s");
	
	$queryResult = $eloquent->insertData($tableName, $columnValue);
	
	print_r($queryResult);
	
}

?>

<!-- YOUR PAGE DESIGN WILL GO BELOW -->

<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Register</li>
            </ol>
        </div><!-- End .container -->
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-9 order-lg-last dashboard-content">
                <h2>Create your Account here</h2>
				
				<?php 
				if(isset($_POST['try_registration']))
				{
					if($queryResult['NO_OF_ROW_INSERTED'] > 0)
					{
						echo '
						<div class="alert alert-success">
							Thank you for your registration, please login to your account now!
						</div>
						';
					}
					else
					{
						echo '
						<div class="alert alert-danger">
							Please check your account details, either you are passing wrong info, or account already exists.
						</div>
						';
					}
				}
				?>
				
                
                <form action="" method="post">
                    <div class="row">
                        <div class="col-sm-11">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group required-field">
                                        <label for="acc-name">Full Name</label>
                                        <input type="text" class="form-control" id="acc-name" name="full_name" required>
                                    </div><!-- End .form-group -->
                                </div><!-- End .col-md-4 -->

                                <div class="col-md-6">
                                    <div class="form-group required-field">
                                        <label for="acc-lastname">Mobile No</label>
                                        <input type="text" class="form-control" id="acc-lastname" name="mobile_no" required>
                                    </div><!-- End .form-group -->
                                </div><!-- End .col-md-4 -->
                            </div><!-- End .row -->
                        </div><!-- End .col-sm-11 -->
                    </div><!-- End .row -->

                    <div class="form-group required-field">
                        <label for="acc-email">Email</label>
                        <input type="email" class="form-control" id="acc-email" name="email_address" required>
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
                        <a href="index.php"><i class="icon-angle-double-left"></i>Back</a>

                        <div class="form-footer-right">
                            <button name="try_registration" type="submit" class="btn btn-primary">Save</button>
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