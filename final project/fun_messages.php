<?php
include_once 'includes/class_messages.php';
$messages = new messages();
if(isset($_POST['save']))
{
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	// insert
    $messages->create($name,$email,$subject,$message);
	// insert
	header("Location: messages.php");
}


if(isset($_GET['del_id']))
{
	$id = $_GET['del_id'];
	$messages->delete($id);
	header("Location:messages.php");
}

if(isset($_POST['update']))
{
	$id = $_GET['edt_id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	$messages->update($name,$email,$subject,$message,$id);
	header("Location: messages.php");
}


?>