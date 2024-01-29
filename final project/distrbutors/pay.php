
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
	
     <li><a href="login1.php"><font color="white">Home</font></a></li>
     <li><a href="insertmoney.php"><font color="white">creat bank account</font></a></li>
		
       
      </ul>
    </div><!--close menubar-->	
    


	  <div id="content1">
        <div class="content_item">
		<center>
	<form  method='POST' action='insertpay1.php' onsubmit='returnn formValidation()' enctype="multipart/form-data">	
<input type="hidden" name="role" id="name" value="<?php echo '4'; ?>" />
<table bgcolor=""align="center" style="border:1px  border-radius:50px;margin-top:50px;:1px 0px 0px black;" width="600" height="350px">
<tr><td colspan=3 align=right ><p style="margin-right:3%;"><font color=green></td></tr>





<!--<tr><td><font color=red> </font><font color=black>date<td><input type="date"  value="<?php echo $date?>"  required x-moz-errormessage="Please Enter The Year In Year/Month/Date Format " title="Please Enter The Year In Year/Month/Date Format  "  name="date"  id="date" size='20%'   placeholder='Y/M/D' value=""/></td></tr>-->

<tr><td><font color=red> * </font> <font color=red><font size="3">secretcode from :</font></td><td><input type="text"  required x-moz-errormessage="Please Enter Letter Only Above 2 characters" title="Please Enter Letter Only Above 2 characters "  name="secretcode"  value="" size='20%' id="txt_fname" placeholder='secretecode'></input></td></tr>
<tr><td><font color=red> * </font> <font color=red><font size="3">secretcode to :</font></td><td><input type="text"  required x-moz-errormessage="Please Enter Letter Only Above 2 characters" title="Please Enter Letter Only Above 2 characters "  name="secretcodee"  value="" size='20%' id="txt_fname" placeholder='secretecodee'></input></td></tr>
<tr><td><font color=red> * </font> <font color=red><font size="3">amountofbirr :</font></td><td><input type="text"  required x-moz-errormessage="Please Enter Letter Only Above 2 characters" title="Please Enter Letter Only Above 2 characters "  name="amountofbirr"  value="" size='20%' id="txt_fname" placeholder='birr'></input></td></tr>


<tr><td><font color=red> * </font><font color=red><font size="3">service_type: </td><td> <select name="service_type"  id="sch"  required>
<option value=""></option>
<option>pay money to supplier</option>
<option>pay money to agmas companey</option>
</select></td></tr>

<tr><td colspan="2" align="center"><input style="background-color:grey" type='submit' class="button_example" value='transfer' name='submitMain' Onclick="return check(this.form);"/>
<input style="background-color:grey"type='reset' class="button_example" value='clear'/></td></tr>
</form>
</center>
</body>
</html>
