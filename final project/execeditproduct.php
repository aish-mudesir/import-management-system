<?php
	include('distrbutors/connect.php');
	$roomid = $_POST['roomid'];
	$type=$_POST['type'];
	$rate=$_POST['rate'];
	$description=$_POST['description'];
	$states=$_POST['productStatus'];
	mysql_query("UPDATE product SET name='$type', price='$rate', description='$description' , states='$states' WHERE id='$roomid'");
	header("location: products.php");
?>