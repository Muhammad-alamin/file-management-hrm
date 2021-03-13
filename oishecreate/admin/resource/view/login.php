<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="#" type="image/png">

    <title>Login</title>

    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-body">

<?php

# Including the Controller PHP file that is handling the Dashboard View Design
include("app/Http/Controllers/UserController.php");

# Including the Model Class that has ready-made functions to handle MySQL without writing SQL codes
include("app/Models/Eloquent.php");

$userControl = new UserController;

if(isset($_POST['try_login']))
{
	$loginResult = $userControl->tryLogin($_POST['username'], $_POST['password']);
	
	if($loginResult != false)
	{
		$_SESSION['SMC_admin_login_time'] = date("Y-m-d H:i:s");
		$_SESSION['SMC_admin_id'] = $loginResult['id'];
		$_SESSION['SMC_admin_name'] = $loginResult['admin_name'];
		$_SESSION['SMC_admin_email'] = $loginResult['admin_email'];
		$_SESSION['SMC_admin_type'] = $loginResult['admin_type'];
		$_SESSION['SMC_admin_status'] = $loginResult['admin_status'];
	}
}
?>

<div class="container">

    <form class="form-signin" action="" method="post">
        <div class="form-signin-heading text-center">
            <h1 class="sign-title">Sign In</h1>
            <img src="images/login-logo.png" alt=""/>
        </div>
		
        <div class="login-wrap">
		<?php 
		
		if(isset($_POST['try_login']))
		{
			if($loginResult == false)
				echo '<div class="alert alert-danger">
						Sorry! Wrong username/password.
					</div>';
			else
				header("location: Dashboard.php");
		}
		?>
            <input name="username" type="email" class="form-control" placeholder="Username" autofocus>
            <input name="password" type="password" class="form-control" placeholder="Password">

            <button name="try_login" class="btn btn-lg btn-login btn-block" type="submit">
                <i class="fa fa-check"></i>
            </button>

			<!--
            <div class="registration">
                Not a member yet?
                <a class="" href="registration.html">
                    Signup
                </a>
            </div>
            <label class="checkbox">
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> Forgot Password?</a>

                </span>
            </label>
			-->

        </div>

        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
					
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Forgot Password ?</h4>
                    </div>
                    <!--<div class="modal-body">
                        <p>Enter your e-mail address below to reset your password.</p>
                        <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                    </div>-->
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                        <button class="btn btn-primary" type="button">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->

    </form>

</div>



<!-- Placed js at the end of the document so the pages load faster -->

<!-- Placed js at the end of the document so the pages load faster -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>

</body>

</html>
