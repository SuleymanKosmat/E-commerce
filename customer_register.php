<!DOCTYPE>
<?php
session_start();
include("functions/functions.php");
include("includes/db.php"); 
?>
<html>
	<head>
		<title> My online Shop</title>
		<link rel="stylesheet" href="styles/style.css" media="all" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
<body>
    <!-- Main Container starts here-->
	<div class="container-fluid">
	
	
		<!-- Header starts here-->
		<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
			<div class="carousel-item active">
			  <img class="d-block w-100" src="images/img4.jpg" alt="First slide" style="height:200px; width:1000px;">
			</div>
			
			</div>
		</div>
		<!-- Header starts here-->
		
		
		<!-- Navagation Bar starts here-->
		<div>
			<!-- Search Box ends here-->
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">ANASAYFA <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="all_products.php">Tüm Ürünler</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Hesabım</a>
						</li>
					</ul>
					<form method ="get" action="results.php" enctype="multipart/form-data" class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2" type="text" name="user_query" placeholder="Search" aria-label="Search">
						<!--<input type="submit" name="Search" value="Search" /> -->
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search" value="Search">Search</button>
					</form>
				</div>
			</nav>
			
		</div>
		<!-- Navagation Bar ends here-->
		
		
		
		<!-- Content Wrapper starts here-->
		<div class="container-fluid">
		
			<!-- sidebar starts here-->
			<div class="container-fluid" id="sidebar">
				<div id="sidebar_title"> KATEGORİ </div>
				
				<ul id="cats">
					<?php getCats(); ?>
					
				</ul>
				
				<div id="sidebar_title"> MARKA </div>
				
				<ul id="cats">
					<?php getBrands(); ?>
				</ul>
				
			</div>
			<!-- sidebar ends here-->
		
			<div class="container-fluid">
			<?php cart(); ?>
				<!-- shopping cart begins here-->
				<div style="height:40px;">
					<span style="float:right">
					<li>
					<span class="lighter-text">Toplam Ücret: <?php total_price(); ?> TL </span>
					<a href="cart.php" id="cart">
					<i class="glyphicon glyphicon-shopping-cart"></i>
					Sepet 
					<span class="badge"><?php total_items(); ?></span></a>
					</li>
					</span>
				</div>
				<!-- shopping cart ends here-->
				
				
				<div class="row">
				<form action="customer_register.php" method="post" enctype="multipart/form-data">
					
					<table align="center" width="750">
						
						<tr align="center">
							<td colspan="6"><h2>Create an Account</h2></td>
						</tr>
						
						<tr>
							<td align="right">Customer Name:</td>
							<td><input type="text" name="c_name" required/></td>
						</tr>
						
						<tr>
							<td align="right">Customer Email:</td>
							<td><input type="text" name="c_email" required/></td>
						</tr>
						
						<tr>
							<td align="right">Customer Password:</td>
							<td><input type="password" name="c_pass" required/></td>
						</tr>
						
						<tr>
							<td align="right">Customer Image:</td>
							<td><input type="file" name="c_image" required/></td>
						</tr>
						
						
						
						<tr>
							<td align="right">Customer Country:</td>
							<td>
							<select name="c_country">
								<option>Select a Country</option>
								<option>Afghanistan</option>
								<option>India</option>
								<option>Japan</option>
								<option>Pakistan</option>
								<option>Israel</option>
								<option>Nepal</option>
								<option>United Arab Emirates</option>
								<option>United States</option>
								<option>United Kingdom</option>
							</select>
							
							</td>
						</tr>
						
						<tr>
							<td align="right">Customer City:</td>
							<td><input type="text" name="c_city" required/></td>
						</tr>
						
						<tr>
							<td align="right">Customer Contact:</td>
							<td><input type="text" name="c_contact" required/></td>
						</tr>
						
						<tr>
							<td align="right">Customer Address</td>
							<td><input type="text" name="c_address" required/></td>
						</tr>
						
						
					<tr align="center">
						<td colspan="6"><input type="submit" name="register" value="Create Account" /></td>
					</tr>
					
					
					
					</table>
				
				</form>
				</div>
			</div>
		</div>
		<!-- Content Wrapper ends here-->
		
		
		<!-- Footer starts here-->
		<div id="footer">
			<h2 style="text-align:center; padding-top:30px;">&copy; 2019 by süleyman Koşmat</h2>
		</div>
		<!-- Footer ends here-->


</div>
<!-- Main Container ends here-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>	
<?php 
	if(isset($_POST['register'])){
	
		
		$ip = getIp();
		
		$c_name = $_POST['c_name'];
		$c_email = $_POST['c_email'];
		$c_pass = $_POST['c_pass'];
		$c_image = $_FILES['c_image']['name'];
		$c_image_tmp = $_FILES['c_image']['tmp_name'];
		$c_country = $_POST['c_country'];
		$c_city = $_POST['c_city'];
		$c_contact = $_POST['c_contact'];
		$c_address = $_POST['c_address'];
	
		
		move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");
		
		 $insert_c = "insert into customers (customer_ip,customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image) values ('$ip','$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image')";
	
		$run_c = mysqli_query($con, $insert_c); 
		
		$sel_cart = "select * from cart where ip_add='$ip'";
		
		$run_cart = mysqli_query($con, $sel_cart); 
		
		$check_cart = mysqli_num_rows($run_cart); 
		
		if($check_cart==0){
		
		$_SESSION['customer_email']=$c_email; 
		
		echo "<script>alert('Account has been created successfully, Thanks!')</script>";
		echo "<script>window.open('customer/my_account.php','_self')</script>";
		
		}
		else {
		
		$_SESSION['customer_email']=$c_email; 
		
		echo "<script>alert('Account has been created successfully, Thanks!')</script>";
		
		echo "<script>window.open('checkout.php','_self')</script>";
		
		
		}
	}

?>