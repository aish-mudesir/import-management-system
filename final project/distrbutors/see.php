<?php
define("db_server","localhost");
define("db_user","root");
define("db_name","bill");
define("db_password","");
$conn=mysql_connect("localhost","root","");
if(!$conn)
{
die("Error in connection".mysql_error());
}
$db_select=mysql_select_db("bill",$conn);
if(!$db_select)
{
die("Error in db select".mysql_error());
}
?>
