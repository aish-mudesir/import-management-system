<?php 	

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
			$productName 		= $_POST['productName'];
			 $user			= $_POST['user'];
			 $rate 					= $_POST['rate'];
			$desc			= $_POST['desc'];
			$quantity 			= $_POST['quantity'];
			

			
			$update=mysql_query("INSERT INTO product (name, user, price, description, img, quality)
VALUES
('$productName ','$user','$rate','$desc','$location','$quantity ')");
header("location: productt.php");
			exit();
		
			}
	}


?>





