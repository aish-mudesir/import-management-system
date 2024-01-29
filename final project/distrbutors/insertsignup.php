
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>agmas medical company</title>
  <link rel="icon" type="image/png" href="Img/dbui.png"/>
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
	
      <li ><a href="signup.php"><font color="white">HOME</font></a></li>
	 <!-- <li ><a href="manageacc.php"><font color="white">manage acount</font></a></li>-->
	 
	  
		
       
      </ul>
    </div><!--close menubar-->	
    


	  
		 
		<div style="width:520px; height:450px; margin:0 auto; position:relative; border:4px solid rgba(0,0,0,0); 
		-webkit-border-radius:5px; -moz-border-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); 
		-moz-box-shadow:0 0 18px rgba(0,0,0,0.4);  margin-top:20px; color:#F00000;">
		  
<form  method='POST' action='insertsignup.php' onsubmit='returnn formValidation()' enctype="multipart/form-data">
<div style="background-color:#336699;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; 
height:22px;"> 


 <?php	
$p = mysql_connect("localhost","root","");
if (!$p)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("bill", $p);
$UserName=$_POST['UserName'];
  $password=base64_encode($_POST['Password']);
    $Role=$_POST['Role'];
$sql="INSERT INTO useraccount(UserName,Password, Role)
VALUES('$UserName','$password','$Role')";

if (!mysql_query($sql,$p))
{
die('Error: ' . mysql_error());
}
else
echo "<h2>YOU Have Succesfully Create Account</h2>";
mysql_close($p);
?>



</form>
</center>
</body>
</html>
