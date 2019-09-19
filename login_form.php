<?php
#this is Login form page , if user is already logged in then we will not allow user to access this page by executing isset($_SESSION["uid"])
#if below statment return true then we will send user to their profile.php page
if (isset($_SESSION["uid"])) {
	header("location:profile.php");
}
//in action.php page if user click on "ready to checkout" button that time we will pass data in a form from action.php page
if (isset($_POST["login_user_with_product"])) {
	//this is product list array
	$product_list = $_POST["product_id"];
	//here we are converting array into json format because array cannot be store in cookie
	$json_e = json_encode($product_list);
	//here we are creating cookie and name of cookie is product_list
	setcookie("product_list",$json_e,strtotime("+1 day"),"/","","",TRUE);

}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>My Cake Shop</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

<body style="background: white;background-image: url(https://images.pexels.com/photos/1303085/pexels-photo-1303085.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);">
<!--Loader-->
<div class="overlay">
	<div class="loader">
    	<svg class="circular" viewBox="25 25 50 50">
      		<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="4" stroke-miterlimit="10"/>
    	</svg>
	</div>
</div>
<!--Navbar-->
	<div class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false" style="position: absolute;top: 0px;left: 10px;"><!--navbar-box-->
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand">
					<img src="logo.png" height="40px" width="240px" style="margin-top: -10px;padding-left: 50px;"><!--navbar-brand-->
				</a>
			</div>
			<div class="collapse navbar-collapse" id="collapse">
				<ul class="nav navbar-nav">
					<li><a href="home.php"><span class="glyphicon glyphicon-modal-window"></span> Products</a></li>
					 <li><a href="about.html"><span class="glyphicon glyphicon-user"></span> AboutUs</a></li>
        <li><a href="map.html"><span class="glyphicon glyphicon-earphone"></span> ContactUs</a></li>
       </ul>	
			</div>
		</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="panel" style="margin-top:15%;margin-bottom:15%;">
					<div class="panel-heading" align="center" style="background:#5a0800;color:#ffffff;"><br>
						<img src="images/login_logo.png" alt="login_logo" style="height: 75px;width: 75px;">
						<br><h3>Customer Login Form</h3>
					</div>
					<div class="panel-body" style="background: #eeeeee;">
						<!--User Login Form-->
						<form onsubmit="return false" id="login">
							<label for="email">Email</label>
							<input type="email" class="form-control" name="email" id="email" required/>
							<label for="email">Password</label>
							<input type="password" class="form-control" name="password" id="password" re quired/>
							<p><br/><br/></p>
							<a href="#" style="color:#333333; list-style:none;">Forgotten Password</a><input type="submit" class="btn btn-md" style="float:right;margin-right:20px;margin-bottom:20px;color:#ffffff;background:#5a0800;" Value="Login">
							<!--If user dont have an account then he/she will click on create account button-->
							<div><a href="customer_registration.php?register=1">Create a new account?</a></div>						
						</form>
				</div>
				<div class="panel-footer"><div id="e_msg"></div></div>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
</body>
</html>






















