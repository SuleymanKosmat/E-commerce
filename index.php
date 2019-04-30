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
				<li> <a href="#">Home</a> </li>
				<li> <a href="#">All Products</a> </li>
				<li> <a href="#">My Account</a> </li>
				<li> <a href="#">Sign Up</a> </li>
				<li> <a href="#">Shopping Cart</a> </li>
				<li> <a href="#">Contact Us</a> </li>
				
			</ul>
				
			
			
			<!-- Search Box starts here-->
			<div id="form">
			<form method ="get" action="results.php" enctype="multipart/form-data">
				<input type="text" name="user_query" />
				<input type="submit" name="Search" value="Search" />
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
					<?php getPro(); ?>
					<?php getCatPro(); ?>
					
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