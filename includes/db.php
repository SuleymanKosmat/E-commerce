<?php

$con =mysqli_connect("localhost","root","","ecommerce");

if(mysqli_connect_errno()){
	echo"Db Bağlantı Hatası!!!" .mysqli_connect_error();
	
}

?>