<?php
include_once 'includes/class_product.php';
$product = new product();
if(isset($_POST['save']))
{
	

     move_uploaded_file($_FILES["image"]["tmp_name"],"store/img/products/" . $_FILES["image"]["name"]);			
	$img="store/img/products/" . $_FILES["image"]["name"];
	$user = $_POST['user'];
	$name = $_POST['name'];
	$description = $_POST['description'];
	$price = $_POST['price'];

	// insert
    $product->create($user,$name,$description,$price,$img);
	// insert
	header("Location: product.php"); 
}


if(isset($_GET['del_id']))
{
	$id = $_GET['del_id'];
	$product->delete($id);
	header("Location:product.php");
}

if(isset($_POST['update']))
{
$image = $_FILES["image"] ["name"];
$image_name= addslashes($_FILES['image']['name']);
$size = $_FILES["image"] ["size"];
move_uploaded_file($_FILES["image"]["tmp_name"],"store/img/products/" . $_FILES["image"]["name"]);			
$img="store/img/products/" . $_FILES["image"]["name"];

	$id = $_GET['edt_id'];
	$user = $_POST['user'];
	$name = $_POST['name'];
	$description = $_POST['description'];
	$price = $_POST['price'];
	
	$product->update($user,$name,$description,$price,$img,$id);
	header("Location: product.php");
}


?>