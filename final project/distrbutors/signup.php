
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>agmas</title>
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
  
    
	

<li ><a href="login1.php"><font color="white">HOME</font></a></li>
		 
		<div style="width:520px; height:450px; margin:0 auto; position:relative; border:4px solid rgba(0,0,0,0); 
		-webkit-border-radius:5px; -moz-border-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); 
		-moz-box-shadow:0 0 18px rgba(0,0,0,0.4);  margin-top:20px; color:#F00000;">
		  
<form  method='POST' action='insertsignup.php' onsubmit='returnn formValidation()' enctype="multipart/form-data">

<input type="hidden" name="role" id="name" value="<?php echo '4'; ?>" />
<table bgcolor=""align="center" style="margin-top:-70px;" width="500" height="350px">
<tr><td colspan=3 align=center ><p style="margin-center:1%;"><font color=red><h1>user name and password policy</h1><font color=>1.user name must contain any 3-5 bold or small letters and / symbol then 3 numbers from 0-9 then / finally two numbers from 0-9 <br>
2.password may be any capital or small letter or any number from 0-9</font></td></tr>
<tr><td><font color=red>  </font> <font color=red>UserName :</font></td><td><input type="text" pattern="\D{3,5}/\d{3}/\d{2}" required x-moz-errormessage="Please Enter Letter Only Above 2 characters" title="Please Enter Letter Only Above 2 characters "  name="UserName"  value="" size='20%' id="txt_fname" placeholder='Fname'></input></td></tr>
<!--<tr><td><font color=red> * </font> <font color=black>Department  :</td><td><input type="text" pattern="/[^a-z\s\]/{5,100}" required x-moz-errormessage="Please Enter your Department correctly" title="Please Enter your Department correctly "   name="dep" value="" size='20%'  id="dep" placeholder='Department'/></td></tr>-->
<tr><td><font color=red>  </font><font color=red>Password :</td><td><input type="password" name="Password" value="" size='20%' id="pass" placeholder='Password' pattern="[a-zA-Z0-9]+" required x-moz-errormessage="Please Enter customer Login Password!!! " title="Please Enter Students Login Password!!!" placeholder='Password'></input></td></tr><br>
<tr><td><font color=red>  </font><b><font color=red>Role: </td></b><td> 
 <select name="Role"  id="role"  required>
<option value=""> enter role of user</option>
<option>manager</option>
<option>sup</option>
<option>diss</option>
</select></td></tr>
<tr><td colspan="2" align="center"><input style="background-color:#808000"type='submit' class="button_example" value='Signup' name='submitMain' Onclick="return check(this.form);"/>
<input style="background-color:#808000"type='reset' class="button_example" value='clear'/></td></tr>



</form>
</center>
</body>
</html>
