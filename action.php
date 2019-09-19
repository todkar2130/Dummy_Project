<?php
session_start();
$ip_add = getenv("REMOTE_ADDR");
include "db.php";
if(isset($_POST["category"])){
	$category_query = "SELECT * FROM categories WHERE cat_id <= 6";
	$run_query = mysqli_query($con,$category_query) or die(mysqli_error($con));
	echo "

		<div class='nav  nav-stacked'>
			<li class='active' style='margin-top:-20px;'>
			<h3 style='background:#5a0800;height:50px;color:#fff;padding-top:10px;' align='center' >Cakes</h3>
			</li>
	";
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$cid = $row["cat_id"];
			$cat_name = $row["cat_title"];
			echo "
				<li><a href='#scroll'  class='category' cid='$cid' style='background:#eeeeee;color:#000000;font-weight:bold;'>$cat_name</a></li>
				";
		}
		echo "</div>";
	}
	$category_query1 = "SELECT * FROM categories WHERE cat_id > 6";
	$run_query1 = mysqli_query($con,$category_query1) or die(mysqli_error($con));
	echo "
		<div class='nav  nav-stacked'>
			<li class='active'>
			<h3 style='background:#5a0800;height:50px;color:#fff;padding-top:10px;' align='center'> Others</h3>
			</li>
		";
	if(mysqli_num_rows($run_query1) > 0){
		while($row1 = mysqli_fetch_array($run_query1)){
			$cid1 = $row1["cat_id"];
			$cat_name1 = $row1["cat_title"];
			echo "
					<li><a href='#scroll' class='category' cid='$cid1' style='background:#eeeeee;color:#000000;font-weight:bold;'>$cat_name1</a></li>
			";
		}
		echo "</div>";
	}
}
if(isset($_POST["dropdown"])){
	$dropdown_query = "SELECT * FROM categories WHERE cat_id <= 6";
	$run_query = mysqli_query($con,$dropdown_query);
	echo "
		<script>
		$(document).ready(function(){
  		$('.dropdown-submenu a.test').on('click', function(e){
   		$(this).next('ul').toggle();
   		e.stopPropagation();
    	e.preventDefault();
  		});
		});
		</script>
		<style>
		.dropdown-submenu {
			position: relative;
		}

		.dropdown-submenu .dropdown-menu {
  			top: 0;
  			left: 100%;
 		    margin-top: -6px;
		}
		@media (max-width: 767px)
		{
		#glyphicon-menu-right
		{
			display:none;
		}

		}
		@media (min-width: 767px)
		{
 		#glyphicon-menu-down
		{
			display:none;
		}

		}
		</style>
		<li  class='dropdown-submenu'>
			<a class='test' href='#' style='background:#5a0800;color:#ffffff;padding-left:20px;' > Cakes <span id='glyphicon-menu-right' class='glyphicon glyphicon-menu-right' style='padding-left:10px;'></span><span id='glyphicon-menu-down' class='glyphicon glyphicon-menu-down' style='padding-left:15px;'></span>
			</a>
			<ul class='dropdown-menu' style='background:#5a0800;'>
			
	";
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$did = $row["cat_id"];
			$dropdown_list = $row["cat_title"];
			echo "
					<li><a href='#scroll'  style='background:#5a0800;color:#ffffff;'  class='category' cid='$did'>$dropdown_list</a></li>
			";
		}
		echo "</ul>
		</li>";
	}
	$dropdown_query1 = "SELECT * FROM categories WHERE cat_id > 6";
	$run_query1 = mysqli_query($con,$dropdown_query1);
	if(mysqli_num_rows($run_query1) > 0){
		while($row1 = mysqli_fetch_array($run_query1)){
			$did1 = $row1["cat_id"];
			$dropdown_list1 = $row1["cat_title"];
			echo "
					<li><a href='#' style='background:#5a0800;color:#ffffff;padding-left:20px;' class='category' cid='$did1'>$dropdown_list1</a></li>
			";
		}
	}
}

if(isset($_POST["page"])){
	$sql = "SELECT * FROM products";
	$run_query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($run_query);
	$pageno = ceil($count/9);
	for($i=1;$i<=$pageno;$i++){
		echo "
			<li><a href='#' page='$i' id='page' style='color:black;font-weight: bold;'>$i</a></li>
		";
	}
}
if(isset($_POST["getProduct"])){
	$limit = 9;
	if(isset($_POST["setPage"])){
		$pageno = $_POST["pageNumber"];
		$start = ($pageno * $limit) - $limit;
	}else{
		$start = 0;
	}
	$product_query = "SELECT * FROM products LIMIT $start,$limit";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$pro_id    = $row['product_id'];
			$pro_cat   = $row['product_cat'];
			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
			$pro_desc  = $row['product_desc'];
			$pro_image = $row['product_image'];
			echo "
				<div class='col-md-4'>
							<div class='panel'>
								<div class='panel-heading' style='background: #5a0800;color:#ffffff;'>$pro_title</div>
								<div class='panel-body'>
									<img src='product_images/$pro_image' class='img-responsive' style='width:400px; height:300px;'/>
								</div>
								<div class='panel-heading' style='background: #5a0800;color:#ffffff;'>₹.$pro_price.00
									<button pid='$pro_id' style='float:right; background:#000000;' id='product'  class='btn   btn-xs'>AddToCart</button>
									<button style='float:right; margin-right:10px;'  class='btn btn-danger btn-xs'>Detials</button>
								</div>
							</div>
						</div>
				";
				}
			}		
}
if(isset($_POST["get_seleted_Category"])  || isset($_POST["search"])){
	if(isset($_POST["get_seleted_Category"])){
		$id = $_POST["cat_id"];
		$sql = "SELECT * FROM products WHERE product_cat = '$id'";
	}else {
		$keyword = $_POST["keyword"];
		$sql = "SELECT * FROM products WHERE product_keywords LIKE '%$keyword%'";
	}

	$run_query = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($run_query)){
			$pro_id    = $row['product_id'];
			$pro_cat   = $row['product_cat'];
			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
			$pro_desc = $row['product_desc'];
			$pro_image = $row['product_image'];
			echo "
				<div class='col-md-4'>
							<div class='panel'>
								<div class='panel-heading' style='background: #5a0800;color:#ffffff;'>$pro_title</div>
								<div class='panel-body'>
									<img src='product_images/$pro_image' class='img-responsive' style='width:400px; height:300px;'/>
								</div>
								<div class='panel-heading' style='background: #5a0800;color:#ffffff;'>₹.$pro_price.00
									<button pid='$pro_id' style='float:right; background:#000000;' id='product' class='btn btn-xs'>AddToCart</button>
									<button style='float:right; margin-right:10px;'  class='btn btn-danger btn-xs'>Detials</button>
								</div>
							</div>
						</div>
				";	
		}
	}
	


	if(isset($_POST["addToCart"])){
		

		$p_id = $_POST["proId"];
		

		if(isset($_SESSION["uid"])){

		$user_id = $_SESSION["uid"];

		$sql = "SELECT * FROM cart WHERE p_id = '$p_id' AND user_id = '$user_id'";
		$run_query = mysqli_query($con,$sql);
		$count = mysqli_num_rows($run_query);
		if($count > 0){
			echo "
				<div class='alert alert-warning'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is already added into the cart Continue Shopping..!</b>
				</div>
			";//not in video
		} else {
			$sql = "INSERT INTO `cart`
			(`p_id`, `ip_add`, `user_id`, `qty`) 
			VALUES ('$p_id','$ip_add','$user_id','1')";
			if(mysqli_query($con,$sql)){
				echo "
					<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is Added..!</b>
					</div>
				";
			}
		}
		}else{
			$sql = "SELECT id FROM cart WHERE ip_add = '$ip_add' AND p_id = '$p_id' AND user_id = -1";
			$query = mysqli_query($con,$sql);
			if (mysqli_num_rows($query) > 0) {
				echo "
					<div class='alert alert-warning'>
							<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
							<b>Product is already added into the cart Continue Shopping..!</b>
					</div>";
					exit();
			}
			$sql = "INSERT INTO `cart`
			(`p_id`, `ip_add`, `user_id`, `qty`) 
			VALUES ('$p_id','$ip_add','-1','1')";
			if (mysqli_query($con,$sql)) {
				echo "
					<div class='alert alert-success'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Your product is Added Successfully..!</b>
					</div>
				";
				exit();
			}
			
		}
		
		
		
		
	}

//Count User cart item
if (isset($_POST["count_item"])) {
	//When user is logged in then we will count number of item in cart by using user session id
	if (isset($_SESSION["uid"])) {
		$sql = "SELECT COUNT(*) AS count_item FROM cart WHERE user_id = $_SESSION[uid]";
	}else{
		//When user is not logged in then we will count number of item in cart by using users unique ip address
		$sql = "SELECT COUNT(*) AS count_item FROM cart WHERE ip_add = '$ip_add' AND user_id < 0";
	}
	
	$query = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($query);
	echo $row["count_item"];
	exit();
}
//Count User cart item

//Get Cart Item From Database to Dropdown menu
if (isset($_POST["Common"])) {

	if (isset($_SESSION["uid"])) {
		//When user is logged in this query will execute
		$sql = "SELECT a.product_id,a.product_title,a.product_price,a.product_image,b.id,b.qty FROM products a,cart b WHERE a.product_id=b.p_id AND b.user_id='$_SESSION[uid]'";
	}else{
		//When user is not logged in this query will execute
		$sql = "SELECT a.product_id,a.product_title,a.product_price,a.product_image,b.id,b.qty FROM products a,cart b WHERE a.product_id=b.p_id AND b.ip_add='$ip_add' AND b.user_id < 0";
	}
	$query = mysqli_query($con,$sql);
	if (isset($_POST["getCartItem"])) {
		//display cart item in dropdown menu
		if (mysqli_num_rows($query) > 0) {
			$n=0;
			while ($row=mysqli_fetch_array($query)) {
				$n++;
				$product_id = $row["product_id"];
				$product_title = $row["product_title"];
				$product_price = $row["product_price"];
				$product_image = $row["product_image"];
				$cart_item_id = $row["id"];
				$qty = $row["qty"];
				echo '
					<div class="row">
						<div class="col-md-2 col-xs-2">'.$n.'</div>
						<div class="col-md-3 col-xs-3"><img class="img-responsive" src="product_images/'.$product_image.'" /></div>
						<div class="col-md-3 col-xs-3">'.$product_title.'</div>
						<div class="col-md-3 col-xs-3">₹'.$product_price.'</div>
						<div class="col-md-1 col-xs-1"></div>
					</div><hr>';
				
			}
			?>
				<button type="button" class="btn btn-danger" data-dismiss="modal" style="float:right;color:#ffffff;">Close</button>
				<a style="float:right;margin-right:5px;" href="cart.php" class="btn btn-warning">Edit&nbsp;&nbsp;<span class="glyphicon glyphicon-edit"></span></a>

			<?php
			exit();
		}
	}
	if (isset($_POST["checkOutDetails"])) {
		if (mysqli_num_rows($query) > 0) {
			//display user cart item with "Ready to checkout" button if user is not login
			echo "<form method='post' action='login_form.php'>";
				$n=0;
				while ($row=mysqli_fetch_array($query)) {
					$n++;
					$product_id = $row["product_id"];
					$product_title = $row["product_title"];
					$product_price = $row["product_price"];
					$product_image = $row["product_image"];
					$cart_item_id = $row["id"];
					$qty = $row["qty"];

					echo 
						'<div class="row">
								<div class="col-md-2 col-xs-2">
									<div class="btn-group">
										<a href="#" remove_id="'.$product_id.'" class="btn btn-danger remove"><span class="glyphicon glyphicon-trash"></span></a>
										<a href="#" update_id="'.$product_id.'" class="btn btn-success update"><span class="glyphicon glyphicon-ok-sign"></span></a>
									</div>
								</div>
								<input type="hidden" name="product_id[]" value="'.$product_id.'"/>
								<input type="hidden" name="" value="'.$cart_item_id.'"/>
								<div class="col-md-2 col-xs-2"><img class="img-responsive" src="product_images/'.$product_image.'"></div>
								<div class="col-md-2 col-xs-2">'.$product_title.'</div>
								<div class="col-md-2 col-xs-2"><input type="text" class="form-control qty" value="'.$qty.'" ></div>
								<div class="col-md-2 col-xs-2"><input type="text" class="form-control price" value="'.$product_price.'" readonly="readonly"></div>
								<div class="col-md-2 col-xs-2"><input type="text" class="form-control total" value="'.$product_price.'" readonly="readonly"></div>
							</div><hr>';
				}
				
				echo '<div><b class="net_total" style="float:right;font-size:19px;border:2px solid #a5a5a5;padding-left:25px;padding-right:25px;padding-top:7px;padding-bottom:7px;border-radius:5px;margin-right:10px;"></b></div>';
				if (!isset($_SESSION["uid"])) {
					echo '<input type="submit" style="float:right;margin-right:10px;" name="login_user_with_product" class="btn btn-success btn-lg" value="Ready to Checkout" >
							</form>';
					
				}}
	}
	
	
}

//Remove Item From cart
if (isset($_POST["removeItemFromCart"])) {
	$remove_id = $_POST["rid"];
	if (isset($_SESSION["uid"])) {
		$sql = "DELETE FROM cart WHERE p_id = '$remove_id' AND user_id = '$_SESSION[uid]'";
	}else{
		$sql = "DELETE FROM cart WHERE p_id = '$remove_id' AND ip_add = '$ip_add'";
	}
	if(mysqli_query($con,$sql)){
		echo "<div class='alert alert-danger'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is removed from cart</b>
				</div>";
		exit();
	}
}


//Update Item From cart
if (isset($_POST["updateCartItem"])) {
	$update_id = $_POST["update_id"];
	$qty = $_POST["qty"];
	if (isset($_SESSION["uid"])) {
		$sql = "UPDATE cart SET qty='$qty' WHERE p_id = '$update_id' AND user_id = '$_SESSION[uid]'";
	}else{
		$sql = "UPDATE cart SET qty='$qty' WHERE p_id = '$update_id' AND ip_add = '$ip_add'";
	}
	if(mysqli_query($con,$sql)){
		echo "<div class='alert alert-info'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<b>Product is updated</b>
				</div>";
		exit();
	}
}




?>






