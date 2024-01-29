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

<body background= "img/ground.jpg">
  <div id="main">
    <div id="header">
      <!--close banner-->
     

    <!--close header-->

	<div id="menubar">
     <ul id="menu">
	
      
      <li ><a href="pay.php"><font color="white">HOME</font></a></li>
	  
	  
       
      </ul>
    </div><!--close menubar-->	
    


	  <div id="content1">
        <div class="content_item">
		<center>
		<div style="width:820px; height:650px; margin:0 auto; position:relative; border:4px solid rgba(0,0,0,0); 
		-webkit-border-radius:5px; -moz-border-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); 
		-moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#F00000;">
<form  method='POST' action='pay.php' onsubmit='returnn formValidation()' enctype="multipart/form-data">

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

	$service=$_POST['service_type'];
	//$date=$_POST['date'];
	$sql=mysql_query("select * from bank where secretcode='$secretcode' ");
	while($row=mysql_fetch_array($sql)){
		$dbsecretcode=$row['secretcode'];
		$dbamountofbirr=$row['amountofbirr'];
		
	}
	
	$amount=$dbamountofbirr-$amountofbirr;
	if($amountofbirr<$dbamountofbirr){
$sql=("UPDATE bank SET amountofbirr='$amount' WHERE secretcode='$secretcode'");


if (!mysql_query($sql,$p))
{
die('Error: ' . mysql_error());
	
}
else{
	echo "<h1>you have succesfully transfered from your balance</h1>";
	  //mysql_close($sql);
	  mysql_close($p);
	}
	}
	else{
		echo "<script>window.location='add.php';</script>";
	}


	$b = mysql_connect("localhost","root","");
if (!$b)
{
die('Could not connect: ' . mysql_error());
}
    mysql_select_db("bill", $b);
	$amountofbirr=$_POST['amountofbirr'];
	$secretcodee=$_POST['secretcodee'];

	
	//$date=$_POST['date'];
	$sql=mysql_query("select * from bank where secretcode='$secretcodee' ");
	while($row=mysql_fetch_array($sql)){
	
		$dbamountofbirr1=$row['amountofbirr'];
		
	}
	
	$amount1=$dbamountofbirr1+$amountofbirr;
if($amountofbirr<$dbamountofbirr){
$sql=("UPDATE bank SET amountofbirr='$amount1' WHERE secretcode='$secretcodee'");


if (!mysql_query($sql,$b))
{
die('Error: ' . mysql_error());
	
}
else{
	
	  //mysql_close($sql);
	  mysql_close($b);
	}
	}
	else{
		echo "<script>window.location='add.php';</script>";
	}






$a = mysql_connect("localhost","root","");
  if($amountofbirr<$dbamountofbirr){
	$run="INSERT INTO payment
VALUES(curdate(),'$secretcode','$amountofbirr','$service')";
if(mysql_query($run)>0){
	
	 //mysql_close($run);
	  mysql_close($a);
}
else{
	echo "<h1></h1>";
}

  }
else{

}  //else
			

	 //}

	  
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
