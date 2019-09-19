<?php
if (isset($_GET["register"])) {
	
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
			<div class="col-md-3"></div>
			<div class="col-md-6" id="signup_msg">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-3"></div>
		</div>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="panel">
					<div class="panel-heading" align="center" style="background:#5a0800;color:#ffffff;"><br>
						<img src="images/login_logo.png" alt="login_logo" style="height: 75px;width: 75px;">
						<br><h3>Customer SignUp Form</h3>
					</div>
					<div class="panel-body" style="background: #eeeeee;">
					
					<form id="signup_form" onsubmit="return false">
						<div class="row">
							<div class="col-md-6">
								<label for="f_name">First Name</label>
								<input type="text" id="f_name" name="f_name" class="form-control">
							</div>
							<div class="col-md-6">
								<label for="f_name">Last Name</label>
								<input type="text" id="l_name" name="l_name"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input type="text" id="email" name="email"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="password">password</label>
								<input type="password" id="password" name="password"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="repassword">Re-enter Password</label>
								<input type="password" id="repassword" name="repassword"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="mobile">Mobile</label>
								<input type="text" maxlength="10"  id="mobile" name="mobile" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address1">Address Line 1</label>
								<input type="text" id="address1" name="address1"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address2">Address Line 2</label>
								<input type="text" id="address2" name="address2"class="form-control">
							</div>
						</div>
						<p><br/></p>
						<div class="row">
							<div class="col-md-12" align="center">
								<input style="padding-left:5%;padding-right:5%;color:#fff;background:#000000;"  value="Sign Up" type="submit" name="signup_button" class="btn btn-lg">
							</div>
						</div>
						
					</div>
					</form>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
</body>
</html>
	<?php
}



?>






















