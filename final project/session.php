<?php
// the session informations 
include("includes/conn.php");
session_start();
if (!isset($_SESSION['id'])){
header('location:index.php');
}

$id = $_SESSION['id'];
$query=mysql_query ("SELECT * FROM user WHERE id ='$id'") or die(mysql_error());
$row=mysql_fetch_array($query);
$profile_pic=$row['profile_pic'];
$firstname=$row['firstname'];
$lastname=$row['lastname'];
$username=$row['username'];
?>