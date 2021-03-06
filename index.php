<?php
session_start();
if(isset($_SESSION["uid"])){
  header("location:profile.php");
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
    <script type="text/javascript">
    /*Footer-script*/
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
        <li><a href="FAQ.html"><span class="glyphicon glyphicon-question-sign"></span> FAQ's</a></li>
        <li><a href='https://docs.google.com/forms/d/e/1FAIpQLSdEqE-BOC7mNrhTbun-ZtuuOl5TcLI6p5WstVuWsGtbYSvY2w/viewform?usp=sf_links'><span class="glyphicon glyphicon-envelope"></span> Feedback</a></li>
      </ul>
       <ul class="nav navbar-nav navbar-right">
        <li><a href="login_form.php"><span class="glyphicon glyphicon-log-in"></span>LogIn</a></li>
        <li><a href="customer_registration.php?register=1""><span class="glyphicon glyphicon-user"></span>SignUp</a></li>
       </ul>
	</div>
	</div>
</div>
<div class="container-fluid">
<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-left:-15px;margin-right:-15px; margin-top:50px"><!--Due to this styling spacing problem solved-->
  <!--Indicators-->
  <ol class="carousel-indicators" >
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner"  >
    <div class="item active" id="max-height">
      <img src="images/1.png" alt="1" style="width:100%;">
      <div class="carousel-caption">
        <img src="images/pieces nfi.png" alt="pieces nfi" class="img-responsive">
      </div>
    </div>

    <div class="item" id="max-height">
      <img src="images/2.jpg" alt="2" style="width:100%;">
      <div class="carousel-caption">
        <img src="images/hot pizza.png" alt="hot pizza"  class="img-responsive"><br>
      </div>
    </div>

    <div class="item" id="max-height">
      <img src="images/3.png" alt="3" style="width:100%;">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div><br>
<!---IMAGES WITH DESCRIPTION---->
<div class="container-fluid">
<div class="row">
<div id="pkg">
  <div class="col-sm-6 col-xs-12 col-md-3">
	<div class="packages_left_box">
	   <img alt="cakes" src="images/cakes.jpeg" class="img-rounded img-responsive">
	<div class="packages_left_box_hover">
		<h4 align="center">CAKES </h4>
		<ul class="padding-left">
		<li><a href="home.php" ><span class="glyphicon glyphicon-hand-right"></span>  E/L Cakes</a></li>
		<li><a href="home.php" ><span class="glyphicon glyphicon-hand-right"></span>  Photo Cakes</a></li>
    <li><a href="home.php" ><span class="glyphicon glyphicon-hand-right"></span>  Designer Cakes</a></li>
    <li><a href="home.php" ><span class="glyphicon glyphicon-hand-right"></span>  Wedding Cakes</a></li>
    <li><a href="home.php" ><span class="glyphicon glyphicon-hand-right"></span>  Customized Cakes</a></li>
    <li><a href="home.php" ><span class="glyphicon glyphicon-hand-right"></span>  Fancy Cakes</a></li>
		</ul>
		<!--<div  class="myButton"> <a rel="nofollow" href="#"> View More...</a></div>-->
	</div>
	</div>   
  </div>


  <div class="col-sm-6 col-xs-12 col-md-3">
  <div class="packages_left_box">
    <img alt="desserts" src="images/desserts.jpeg" class="img-rounded img-responsive">
  <div class="packages_left_box_hover">
    <h4 align="center">DESSERTS </h4>
    <ul class="padding-left">
    <li><a href="home.php"><span class="glyphicon glyphicon-hand-right"></span> Brownie</a></li>
    <li><a href="home.php"><span class="glyphicon glyphicon-hand-right"></span> Mouse</a></li>
    <li><a href="home.php"><span class="glyphicon glyphicon-hand-right"></span> Tart</a></li>
    <li><a href="home.php"><span class="glyphicon glyphicon-hand-right"></span> Donuts</a></li>
    <li><a href="home.php"><span class="glyphicon glyphicon-hand-right"></span> R/D Pastry</a></li>
    <li><a href="home.php"><span class="glyphicon glyphicon-hand-right"></span> P/A Pastry</a></li>
    <li><a href="home.php"><span class="glyphicon glyphicon-hand-right"></span> Chocolate Pastry</a></li>
    <li><a href="home.php"><span class="glyphicon glyphicon-hand-right"></span> Eclair</a></li>
    </ul>
  </div>
  </div>   
  </div>


  <div class="col-sm-6 col-xs-12 col-md-3">
  <div class="packages_left_box">
    <img alt="bakery" src="images/bakery.jpeg" class="img-rounded img-responsive">
  <div class="packages_left_box_hover">
      <h4 align="center">BAKERY </h4>
      <ul class="padding-left">
      <li><a href="home.php"><span class="glyphicon glyphicon-hand-right"></span> Breads</a></li>
      <li><a href="home.php"><span class="glyphicon glyphicon-hand-right"></span> Tea Cakes</a></li>
      <li><a href="home.php"><span class="glyphicon glyphicon-hand-right"></span> Muffins</a></li>
      <li><a href="home.php"><span class="glyphicon glyphicon-hand-right"></span> Cup Cakes</a></li>
      <li><a href="home.php"><span class="glyphicon glyphicon-hand-right"></span> Biscuits</a></li>
      </ul>
  </div>
  </div>   
  </div> 
   
  <div class="col-sm-6 col-xs-12 col-md-3">
  <div class="packages_left_box">
    <img alt="chocolates" src="images/chocolates.jpeg" class="img-rounded img-responsive">
  <div class="packages_left_box_hover">
      <h4 align="center">CHOCOLATES </h4>
 		 <ul class="padding-left">
  		<li><a href="home.php"><span class="glyphicon glyphicon-hand-right"></span> Rock</a></li>
  		<li><a href="home.php"><span class="glyphicon glyphicon-hand-right"></span> Celebrations</a></li>
  		<li><a href="home.php"><span class="glyphicon glyphicon-hand-right"></span> Bouquet</a></li>
  		<li><a href="home.php"><span class="glyphicon glyphicon-hand-right"></span> Baskets</a></li>
      <li><a href="home.php"><span class="glyphicon glyphicon-hand-right"></span> Ferrorachar</a></li>
      <li><a href="home.php"><span class="glyphicon glyphicon-hand-right"></span> Hand Made</a></li>
  		</ul>
  </div>
  </div>   
  </div>

	
   
  	
</div>
</div>
</div>

<!---FOOTER-->
<footer>
  <div class="centered clearfix">
    <div class="footer-logo">
      <img class="logo" src="images/logo.png">
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
          <li><a href="login_form.php">Login</a></li>
          <li><a href="customer_registration.php?register=1">Sign up</a></li>
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