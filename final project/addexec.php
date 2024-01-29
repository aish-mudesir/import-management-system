<?php
include('distrbutors/connect.php');

	if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);

	
		if ($image_size==FALSE) {
		
			echo "That's not an image!";
			
		}else{
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"distrbutors/img/products/" . $_FILES["image"]["name"]);
			
			$location=$_FILES["image"]["name"];
			$type=$_POST['type'];
			$user=$_POST['user'];
			$rate=$_POST['rate'];
			$desc=$_POST['desc'];
			$qut=$_POST['qut'];
			$states=$_POST['productStatus'];
			

			
			$update=mysql_query("INSERT INTO product (name, user, price, description, img, quality, states)
VALUES
('$type','$user','$rate','$desc','$location','$qut' , '$states')");
header("location: products.php");
			exit();
		
			}
	}


?>
