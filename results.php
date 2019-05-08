<!DOCTYPE>
<?php
include("functions/functions.php");
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
			
			
				<!-- shopping cart begins here-->
				<div style="height:40px;">
					<span style="float:right">
					<li>
					<span class="lighter-text">Toplam Ücret:</span>
					<a href="#" id="cart">
					<i class="glyphicon glyphicon-shopping-cart"></i>
					Sepet 
					<span class="badge">3</span></a>
					</li>
					</span>
				</div>
				<!-- shopping cart ends here-->
				
				
				<div>
					
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
							<div class='col-sm-6'>
								<div class='card'>
									<div class='card-body'>
						
										<div >
											<h5 class='card-title'>$pro_title</h5>
											<img src='admin_area/product_images/$pro_image' style='height:275px; width:350px;' class='card-img-top' alt='...' >
										</div>
										<div>
											<a href='details.php?pro_id=$pro_id' class='btn btn-primary' style='float:left;' >Detaylar</a>
											<a href='index.php?add_cart=$pro_id' class='btn btn-primary' style='float:right;' >Sepete Ekle</a>
										</div>
						
									</div>
							</div>
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>	