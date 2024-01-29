<?php

// This is a sample code in case you wish to check the username from a mysql db table
include('distrbutors/connect.php');
if($_GET['id'])
{
$id=$_GET['id'];
 $sql = "delete from product where id='$id'";
 mysql_query( $sql);
}

?>