<?php
session_start();
if(isset($_SESSION["uid"]) && $_SESSION["name"] == 'Admin')
{
     header("location:../Admin2/admin.php");
}
if(!isset($_SESSION["uid"])){
	header("location:home.php");
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
		<link rel="stylesheet" type="text/css" href="footer.css">
		<link rel="stylesheet" type="text/css" href="search.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
		/* scroller */
		$(document).ready(function(){
  			$("a").on('click', function(event) {
    			if (this.hash !== "") {
     		    	event.preventDefault();
      				var hash = this.hash;
      			$('html, body').animate({
        			scrollTop: $(hash).offset().top
      				}, 800, function(){
        			window.location.hash = hash;
      				});
   		 		} // End if
  			});
		});
		</script> 
		<script type="text/javascript">
		/*Footer*/
		 $(function() {
  			$('.footer-links-holder h3').click(function () {
    		$(this).parent().toggleClass('active');
 					 });
			});
		</script>
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
				<div class="container" id="search-bar"> <!--Search-Bar-->
  				<input type="text" placeholder="Search..." id="search">
  				<button class="search btn btn-md" id="search_btn"></button>
				</div>
				<a href="index.php" class="navbar-brand">
					<img src="logo.png" height="40px" width="240px" style="margin-top: -10px;padding-left: 50px;"><!--navbar-brand-->
				</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li class="dropdown">
	       		<a  class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-modal-window"></span> Products<span class="glyphicon glyphicon-menu-down"  style="padding-left:10px;" ></span></a>
			   	<ul class="dropdown-menu" id="get_dropdown_list">
				</ul>
	    	  	</li>
				<li><a href="#"><span class="glyphicon glyphicon-user"> </span>AboutUs</a></li>
	     		<li><a href="#"><span class="glyphicon glyphicon-earphone"> </span>ContactUs</a></li>
	     		<li><a href="FAQ.html"><span class="glyphicon glyphicon-question-sign"></span> FAQ's</a></li>
	     		<li><a href='https://docs.google.com/forms/d/e/1FAIpQLSdEqE-BOC7mNrhTbun-ZtuuOl5TcLI6p5WstVuWsGtbYSvY2w/viewform?usp=sf_links'><span class="glyphicon glyphicon-envelope"></span> Feedback</a></li>
      
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<!-- Trigger the modal with a button -->
				<li><a  href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a></li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "Hi,".$_SESSION["name"]; ?></a>
					<ul class="dropdown-menu">
						<li><a href="customer_order.php" style="text-decoration:none; color:white; background:#5a0800;">Orders</a></li>
						<li><a href="#" style="text-decoration:none; color:white; background:#5a0800;">Change Password</a></li>
						<li><a href="logout.php" style="text-decoration:none;color:white; background:#5a0800;">Logout</a></li>
					</ul>
				</li>
				
			</ul>
		</div>
	</div>
	</div>
<p><br/></p>
<p><br/></p>
<p><br/></p>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2 col-xs-12" id="intializing">
				<div id="get_category">
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Categories</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
			</div>
			<div class="col-md-10 col-xs-12" id="intializing">
				<div id="scroll" style="padding-top: 50px;"></div> <!--scroller target-->
				<div class="row">
					<div class="col-md-12 col-xs-12"  id="product_msg">
					</div>
				</div>
				<div class="panel">
					<div class="panel-heading" align="center" style="background: #5a0800;color:#ffffff;font-size:19px;">Items</div>
					<div class="panel-body" id="intializing" style="background: #eeeeee;">
						<br>
						<div id="get_product">
							<!--Here we get product jquery Ajax Request-->
						</div>
						<!--<div class="col-md-4">
							<div class="panel panel-info">
								<div class="panel-heading">Samsung Galaxy</div>
								<div class="panel-body">
									<img src="product_images/images.JPG"/>
								</div>
								<div class="panel-heading">₹.500.00
									<button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
								</div>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
<!--pagination-->
<!--<div class="row">
	<div class="col-md-12">
		<center>
			<ul class="pagination" id="pageno">
				<li><a href="#">1</a></li>
			</ul>
		</center>
	</div>
</div>
<!---Footer-->-->
<footer>
  <div class="centered clearfix">
    <div class="footer-logo">
      <img class="logo" src="logo.png">
      <div class="social">
        <a href="https://www.facebook.com/" class="facebook">
          <svg viewBox="0 0 33 33"><g><path d="M 17.996,32L 12,32 L 12,16 l-4,0 l0-5.514 l 4-0.002l-0.006-3.248C 11.993,2.737, 13.213,0, 18.512,0l 4.412,0 l0,5.515 l-2.757,0 c-2.063,0-2.163,0.77-2.163,2.209l-0.008,2.76l 4.959,0 l-0.585,5.514L 18,16L 17.996,32z"></path></g></svg>
        </a>
        <a href="https://twitter.com/" class="twitter">
          <svg viewBox="0 0 33 33"><g><path d="M 32,6.076c-1.177,0.522-2.443,0.875-3.771,1.034c 1.355-0.813, 2.396-2.099, 2.887-3.632 c-1.269,0.752-2.674,1.299-4.169,1.593c-1.198-1.276-2.904-2.073-4.792-2.073c-3.626,0-6.565,2.939-6.565,6.565 c0,0.515, 0.058,1.016, 0.17,1.496c-5.456-0.274-10.294-2.888-13.532-6.86c-0.565,0.97-0.889,2.097-0.889,3.301 c0,2.278, 1.159,4.287, 2.921,5.465c-1.076-0.034-2.088-0.329-2.974-0.821c-0.001,0.027-0.001,0.055-0.001,0.083 c0,3.181, 2.263,5.834, 5.266,6.438c-0.551,0.15-1.131,0.23-1.73,0.23c-0.423,0-0.834-0.041-1.235-0.118 c 0.836,2.608, 3.26,4.506, 6.133,4.559c-2.247,1.761-5.078,2.81-8.154,2.81c-0.53,0-1.052-0.031-1.566-0.092 c 2.905,1.863, 6.356,2.95, 10.064,2.95c 12.076,0, 18.679-10.004, 18.679-18.68c0-0.285-0.006-0.568-0.019-0.849 C 30.007,8.548, 31.12,7.392, 32,6.076z"></path></g></svg>
        </a>
        <a href="https://www.linkedin.com/" class="linkedin">
          <svg viewBox="0 0 512 512"><g><path d="M186.4 142.4c0 19-15.3 34.5-34.2 34.5 -18.9 0-34.2-15.4-34.2-34.5 0-19 15.3-34.5 34.2-34.5C171.1 107.9 186.4 123.4 186.4 142.4zM181.4 201.3h-57.8V388.1h57.8V201.3zM273.8 201.3h-55.4V388.1h55.4c0 0 0-69.3 0-98 0-26.3 12.1-41.9 35.2-41.9 21.3 0 31.5 15 31.5 41.9 0 26.9 0 98 0 98h57.5c0 0 0-68.2 0-118.3 0-50-28.3-74.2-68-74.2 -39.6 0-56.3 30.9-56.3 30.9v-25.2H273.8z"></path></g></svg>
        </a>
      </div>
    </div>
    <div class="footer-contact">
       <h3>Contact Us</h3>
       <p>MyCakeshop.com</p>
       <p>+91 9769862087</p>
       <p>Shop no 03, New C.H.S. LTD,</p>
       <p>MIDC, Andheri(E), Mumbai-49.</p>
    </div>
    <div class="footer-navigation">
      <div class="footer-links-holder">
        <h3>Member</h3>
        <ul class="footer-links">
          <li><a href="logout.php">Logout</a></li>
          <li><a href="../Admin2/AdminLogin.php">Admin Login</a></li>
        </ul>
      </div>
      <div class="footer-links-holder">
        <h3><a href="">Quick Links</a></h3>
        <ul class="footer-links">
          <li><a href="">Delivery Policy</a></li>
          <li><a href="">Get Franchise</a></li>
           </ul>
      </div>
      <div class="footer-links-holder">
        <h3><a href="">Map</a></h3>
        <ul class="footer-links">
          <li><a href="map.html"><img src="images/location-map.jpg" height="150px" width="150px"></a></li>
          
        </ul>
      </div>
</div>
  </div>
  <div class="bottom-bar">
  		Designed & Developed By Yogesh Todkar.<br>
      All Rights Reserved 2019 | <a href="">Privacy Policy</a> | <a href="">Terms of Service</a>
  </div>
</footer>
</body>
</html>
















































