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
				<form action="" method="post" enctype="multipart/form-data">
					<table align="center" width="700" bgcolor="skyblue">
				
						<tr align="center">
						<th>remove</th>
						<th>product(s)</th>
						<th>quantity</th>
						<th>total price</th>
						</tr>
						<?php
						$total=0;
						global $con;
						$ip=getIp();
						$sel_price="select *from cart where ip_add='$ip'";
						$run_price=mysqli_query($con,$sel_price);
						while($p_price=mysqli_fetch_array($run_price)){
									
							$pro_id= $p_price['p_id'];
							$pro_price="select * from products where product_id='$pro_id'";
							$run_pro_price=mysqli_query($con,$pro_price);
								while($pp_price=mysqli_fetch_array($run_pro_price)){
									$product_price= array($pp_price['product_price']);
									$product_title= $pp_price['product_title'];
									$product_image= $pp_price['product_image'];
									$single_price= $pp_price['product_price'];
									$values=array_sum($product_price);
									$total += $values;
									?>	
									<tr align="center">
										<td><input type="checkbox" name="remove[]"/></td>
										<td><?php echo $product_title; ?> <br>
										<img src="admin_area/product_images/<?php echo $product_image;?>" width="60" height="60"/>
										</td>
										<td><input type="text" size="4" name="qty"/></td>
										<td><?php echo $single_price; ?></td>
									</tr>
									
								<?php } } ?>
								<tr align="right">
									<td colspan="5">Total:</td>
									<td><?php echo $total; ?> TL</td>
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