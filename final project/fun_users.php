<?php
include_once 'includes/class_users.php';
$users = new users();
if(isset($_POST['save']))
{
	

    move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
	$profile_pic="upload/" . $_FILES["image"]["name"];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$user = $_POST['user'];
	$username = $_POST['username'];
	$password = base64_encode($_POST['password']);
	$contact = $_POST['contact'];

	// insert 

$check_user="select * from user WHERE username='$username'";

    $run=mysql_query($check_user);



    if(mysql_num_rows($run) > 0)
{
  // Username exists.
 include_once 'header.php';
  echo "username already taken Please! add a new use.";
}
else
{
	 $users->create($firstname,$lastname,$user,$username,$password,$contact,$profile_pic);
	// insert
	header("Location: users.php");
}


}


if(isset($_GET['del_id']))
{
	$id = $_GET['del_id'];
	$users->delete($id);
	header("Location:users.php");
}

if(isset($_POST['update']))
{
$image = $_FILES["image"] ["name"];
$image_name= addslashes($_FILES['image']['name']);
$size = $_FILES["image"] ["size"];
move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
$profile_pic="upload/" . $_FILES["image"]["name"];

	$id = $_GET['edt_id'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$user = $_POST['user'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$contact = $_POST['contact'];
	
	$users->update($firstname,$lastname,$user,$username,$password,$contact,$profile_pic,$id);
	header("Location: users.php");
}


?>