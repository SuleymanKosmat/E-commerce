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
					<?php 
					if(isset($_GET['pro_id'])){
						
					$product_id= $_GET['pro_id'];
						
					$get_pro = "select * from products where product_id='$product_id'";
					$run_pro= mysqli_query($con,$get_pro);
						while($row_pro =mysqli_fetch_array($run_pro)){
						$pro_id=$row_pro['product_id'];
						$pro_bran=$row_pro['product_brand'];
						$pro_title=$row_pro['product_title'];
						$pro_price=$row_pro['product_price'];
						$pro_image=$row_pro['product_image'];
						$pro_desc=$row_pro['product_desc'];
						
							echo "
								<div id='single_product'>
									<h3>$pro_title</h3>
									<img src='admin_area/product_images/$pro_image' width='350' height='350' />
									<p><b> $pro_price TL </b></p>
									<p> $pro_desc</p>
									<a href='index.php' style='float:left;'> Geri Git </a>
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