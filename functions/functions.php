<?php

$con =mysqli_connect("localhost","root","","ecommerce");
//Getting the categories
function getCats()
{
	global $con;
	$get_cats="select * from categories";
	$run_cats=mysqli_query($con,$get_cats);
	
	while($row_cats=mysqli_fetch_array($run_cats)){
		$cat_id=$row_cats['cat_id'];
		$cat_title=$row_cats['cat_title'];
		
		echo "
			
			<li class='list-group-item d-flex justify-content-between align-items-center'>
				<a href='index.php?cat=$cat_id'>$cat_title</a> 
				<span class='badge badge-primary badge-pill' style='float:right;'>14</span>
			</li>
		";
	}
	
}

function getBrands(){
	global $con;
	$get_brands="select * from brands";
	$run_brands=mysqli_query($con,$get_brands);
	while($row_brands=mysqli_fetch_array($run_brands)){
		$brand_id=$row_brands['brand_id'];
		$brand_title=$row_brands['brand_title'];
		
		echo "
			<li class='list-group-item d-flex justify-content-between align-items-center'>
				<a href='index.php?brand=$brand_id'>$brand_title</a> 
				<span class='badge badge-primary badge-pill' style='float:right;'>14</span>
			</li>
		
		";
		
	}
	
	
	
}
function getPro(){
	if(!isset($_GET['cat'])){
		if(!isset($_GET['brand'])){
	global $con;
	$get_pro = "select * from products order by RAND() LIMIT 0,6";
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
	}
	}
	
function getCatPro(){
	if(isset($_GET['cat'])){
		$cat_id=$_GET['cat'];
	global $con;
	$get_cat_pro = "select * from products where product_cat=$cat_id";
	$run_cat_pro= mysqli_query($con,$get_cat_pro);
	$count_cats=mysqli_num_rows($run_cat_pro);

	if($count_cats==0){
		echo"
		<h2>Stokta Ürün Bulunmamaktadır!</h2>
		";
		}
	
	while($row_cat_pro =mysqli_fetch_array($run_cat_pro)){
		$pro_id=$row_cat_pro['product_id'];
		$pro_cat=$row_cat_pro['product_cat'];
		$pro_bran=$row_cat_pro['product_brand'];
		$pro_title=$row_cat_pro['product_title'];
		$pro_price=$row_cat_pro['product_price'];
		$pro_image=$row_cat_pro['product_image'];
		
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
}
	
?>