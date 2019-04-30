<!DOCTYPE>
<?php
include("functions/functions.php");
?>
<html>
	<head>
		<title> My online Shop</title>
		<link rel="stylesheet" href="styles/style.css" media="all" />
	</head>
<body>
    <!-- Main Container starts here-->
	<div class="main_wrapper">
	
	
		<!-- Header starts here-->
		<div class="header_wrapper">
			<img id="logo" src="images/Shopping.jpg"/>
		</div>
		<!-- Header starts here-->
		
		
		<!-- Navagation Bar starts here-->
		<div class="menubar">
			<ul id ="menu">
				<li> <a href="index.php">Home</a> </li>
				<li> <a href="all_products.php">All Products</a> </li>
				<li> <a href="customer/my_account.php">My Account</a> </li>
				<li> <a href="#">Sign Up</a> </li>
				<li> <a href="cart.php">Shopping Cart</a> </li>
				<li> <a href="#">Contact Us</a> </li>
				
			</ul>
				
			
			
			<!-- Search Box starts here-->
			<div id="form">
			<form method ="get" action="results.php" enctype="multipart/form-data">
				<input type="text" name="user_query" placeholder="Ürün Ara" />
				<input type="submit" name="search" value="Search" />
			</div>
			<!-- Search Box ends here-->
			
		</div>
		<!-- Navagation Bar ends here-->
		
		
		
		<!-- Content Wrapper starts here-->
		<div class="content_wrapper">
		
			<!-- sidebar starts here-->
			<div id="sidebar">
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
		
			<div id="content_area">
			
			
				<!-- shopping cart begins here-->
				<div id="shopping_cart">
					<span style="float:right">
					<li>
					<span class="lighter-text">Toplam Ücret:</span>
					<a href="#" id="cart">
					<i class="fa fa-shopping-cart "></i>
					Sepet 
					<span class="badge">3</span></a>
					</li>
					</span>
				</div>
				<!-- shopping cart ends here-->
				
				
				<div id="products_box">
					
					<?php 
					if(isset($_GET['search'])){
						$search_query=$_GET['user_query'];
						
						
					
					$get_pro = "select * from products where product_keywords like '%$search_query%' ";
					$run_pro= mysqli_query($con,$get_pro);
					while($row_pro =mysqli_fetch_array($run_pro)){
						$pro_id=$row_pro['product_id'];
						$pro_cat=$row_pro['product_cat'];
						$pro_bran=$row_pro['product_brand'];
						$pro_title=$row_pro['product_title'];
						$pro_price=$row_pro['product_price'];
						$pro_image=$row_pro['product_image'];
		
						echo "
							<div id='single_product'>
							<h3>$pro_title</h3>
							<img src='admin_area/product_images/$pro_image' width='180' height='180' />
							<p><b> $pro_price TL </b></p>
							<a href='details.php?pro_id=$pro_id' style='float:left;'> Detaylar </a>
							<a href='index.php?pro_id=$pro_id'><button class='button' style='float:right'>Sepete Ekle</button> </a>
							</div>
				
						";
					}
					}
					?>
					
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
</body>
</html>	