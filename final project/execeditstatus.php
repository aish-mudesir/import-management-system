<?php
	include('includes/conn.php');
	$roomid = $_POST['roomid'];
	$status=$_POST['status'];
	mysql_query("UPDATE process SET status='$status' WHERE process_id='$roomid'");
	header("location: home.php");
?>