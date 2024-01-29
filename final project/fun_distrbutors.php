<?php
include_once 'includes/class_distrbutors.php';
$distrbutors = new distrbutors();
if(isset($_POST['save']))
{
	

    move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
	$profile_pic="upload/" . $_FILES["image"]["name"];
	$name = $_POST['name'];
	$company = $_POST['company'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	$country = $_POST['country'];
	$city = $_POST['city'];
	$date_added = $_POST['date_added'];
	$location = $_POST['location'];

	// insert
   

$check_user="select * from distrbutors WHERE company='$company'";

    $run=mysql_query($check_user);



    if(mysql_num_rows($run) > 0)
{
  // Username exists.
 include_once 'header.php';
  echo "companye name already taken Please! add a new distrbutors.";
}
else
{
	    $distrbutors->create($name,$company,$address,$contact,$country,$city,$date_added,$location,$profile_pic);
	// insert
	header("Location: distrbutors.php");
}


}





if(isset($_GET['del_id']))
{
	$id = $_GET['del_id'];
	$distrbutors->delete($id);
	header("Location:distrbutors.php");
}

if(isset($_POST['update']))
{
$image = $_FILES["image"] ["name"];
$image_name= addslashes($_FILES['image']['name']);
$size = $_FILES["image"] ["size"];
move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
$profile_pic="upload/" . $_FILES["image"]["name"];

	$id = $_GET['edt_id'];
	$name = $_POST['name'];
	$company = $_POST['company'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	$country = $_POST['country'];
	$city = $_POST['city'];
	$date_added = $_POST['date_added'];
	$location = $_POST['location'];
	
	$distrbutors->update($name,$company,$address,$contact,$country,$city,$date_added,$location,$profile_pic,$id);
	header("Location: distrbutors.php");
}


?>