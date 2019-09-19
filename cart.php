<?php


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
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>

<body>
<!--Loader-->
<div class="overlay">
	<div class="loader">
    	<svg class="circular" viewBox="25 25 50 50">
      		<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="4" stroke-miterlimit="10"/>
    	</svg>
	</div>
</div>
	<div class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false" style="position: absolute;top: 0px;left: 10px;"><!--navbar-box-->
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">
					<img src="logo.png" height="40px" width="240px" style="margin-top: -10px;padding-left: 50px;"><!--navbar-brand-->
				</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
				<li><a href="home.php"><span class="glyphicon glyphicon-modal-window"></span> Items</a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-user"> </span>AboutUs</a></li>
	     		<li><a href="index.php"><span class="glyphicon glyphicon-earphone"> </span>ContactUs</a></li>
			</ul>
		</div>
		</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid" style="margin:0px;padding:0px;">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="cart_msg">
				<!--Cart Message--> 
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row" style="min-width:700px;">
			<div class="col-md-2 col-xs-0"></div>
			<div class="col-md-8 col-xs-12">
				<div class="panel">
					<div class="panel-heading" style="background: #5a0800;color:#ffffff;font-size:19px;text-align:center;">Cart Checkout</div>
            		<div class="panel-heading"  style="background: #eeeeee;margin-bottom:20px;">
						<div class="row">
							<div class="col-md-2 col-xs-2" id="font-size"><b>Action</b></div>
							<div class="col-md-2 col-xs-2" id="font-size"><b>Product Image</b></div>
							<div class="col-md-2 col-xs-2" id="font-size"><b>Product Name</b></div>
							<div class="col-md-2 col-xs-2" id="font-size"><b>Quantity</b></div>
							<div class="col-md-2 col-xs-2" id="font-size"><b>Product Price</b></div>
							<div class="col-md-2 col-xs-2" id="font-size"><b>Price in ₹</b></div>
						</div>
					</div>
					<div  class="panel-body" style="margin-top: -20px;"  id="cart_checkout"></div>
					
						<!--<div class="row">
							<div class="col-md-2">
								<div class="btn-group">
									<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
									<a href="" class="btn btn-primary"><span class="glyphicon glyphicon-ok-sign"></span></a>
								</div>
							</div>
							<div class="col-md-2"><img src='product_images/imges.jpg'></div>
							<div class="col-md-2">Product Name</div>
							<div class="col-md-2"><input type='text' class='form-control' value='1' ></div>
							<div class="col-md-2"><input type='text' class='form-control' value='5000' disabled></div>
							<div class="col-md-2"><input type='text' class='form-control' value='5000' disabled></div>
						</div> -->
						<!--<div class="row">
							<div class="col-md-8"></div>
							<div class="col-md-4">
								<b>Total $500000</b>
							</div> --> 
				</div>
			<div class="col-md-2 col-xs-0"></div>
		</div>
	</div>
</body>	
</html>
















		