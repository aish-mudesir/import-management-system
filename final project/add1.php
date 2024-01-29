<?php   
 session_start();
 if(isset($_SESSION['validuser']))
 {
  $username=$_SESSION['validuser'];
 } else {
 ?>

 <script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='login1.php');
 </script>
 <?php
 }
 ?>
<?php   
 //session_start();
 include("see.php");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>agmas</title>
  <link rel="icon" type="image/png" href="Img/BILL.png"/>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  <style type="text/css">

  </style>
</head>

<body>
  <div id="main">
    <div id="header">
      <!--close banner-->
     <img width="1200" height="120" src="Img/am.jpg" alt="image1" width="1201" height="118"/></div>

    <!--close header-->

	<div id="menubar">
     <ul id="menu">
	
      <li><a href="pay.php"><font color="black">Home</font></a></li>
	  
	  
       
      </ul>
    </div><!--close menubar-->	
    

	 

	  <div id="content1">
        <div class="content_item">
		<center>
		<div style="width:820px; height:650px; margin:0 auto; position:relative; border:4px solid rgba(0,0,0,0); 
		-webkit-border-radius:5px; -moz-border-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); 
		-moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#F00000;">
<form  method='POST' action='pay.php' onsubmit='returnn formValidation()' enctype="multipart/form-data">
<div style="background-color:#336699;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:22px;"> 
 <div style="float:left;" ><img width="30" height="20" src="Img/BILL.jpg"/>&nbsp;&nbsp;<strong><font color="white" size="2px">CONGRATULATION  FOR YOUR SUCCESS!</font></strong></div>
 <div style="float:right; margin-right:20px; background-color:#cccccc; width:25px;  text-align:center; border-radius:10px; height:12px;">
 <a href="pay.php" title="Close"><img src="img/close_icon.gif"></a></div>
 </div>
 <input type="hidden" name="role" id="name" value="<?php echo '4'; ?>" />



 
<?php
$p = mysql_connect("localhost","root","");
if (!$p)
{
die('Could not connect: ' . mysql_error());
}
    mysql_select_db("bill", $p);
	$amountofbirr=$_POST['amountofbirr'];
	$secretcode=$_POST['secretcode'];
	$sql=mysql_query("select * from bank where secretcode='$secretcode' ");
	while($row=mysql_fetch_array($sql)){
		$dbsecretcode=$row['secretcode'];
		$dbamountofbirr=$row['amountofbirr'];
		
	}
	
	$amount=$dbamountofbirr+$amountofbirr;

$sql=("UPDATE bank SET amountofbirr='$amount' WHERE secretcode='$secretcode'");
if (!mysql_query($sql,$p))
{
die('Error: ' . mysql_error());
	
}
else{
	echo "<h1>you have succesfully updated your balance</h1>";
	  //mysql_close($sql);
	  mysql_close($p);
	
}  
?>


 </div>
</form>
</center>
</fieldset>
</table>
		
		
		  </div>
		  
		  </div>
		  
	  </div>
	  
  <ul class="style10" id="menu">
       
        <li class="style9 style14 style13">
		
          
        </li>
  </ul>
   	
	  <h2>
	    <!--close sidebar_container-->
    </h2>
</div>
	<!--close sidebar-->
</body>
</html>
