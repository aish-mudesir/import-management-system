
		<?php   
 session_start();
 if(isset($_SESSION['validuser']))
 {
  $username=$_SESSION['validuser'];
 } else {
 ?>

 <script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='login.php');
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
	
      <li><a href="login1.php"><font color="white">HOME</font></a></li>		
	  
       
      </ul>
    </div><!--close menubar-->	
    

<center>
	<form  method='POST' action='insertpay.php' onsubmit='returnn formValidation()' enctype="multipart/form-data">
<input type="hidden" name="role" id="name" value="<?php echo '4'; ?>" />
<table align="center" style=":1px solid black; margin-top:1px;:1px 2px 1px black;" width="700" height="400px">
<tr><td colspan=3 align=right ><p style="margin-right:3%;"><font color=green></td></tr>

<tr><td><font color=red> * </font><font color=red>first_name :</td><td><input type="text" name="fname" value="" size='20%' id="txt_l" placeholder='fname' pattern="\D{2,10}" required x-moz-errormessage="Please Enter your fname " title="Please Enter your fname" ></input></td></tr><br>
<tr><td><font color=red> * </font><font color=red>last_name :</td><td><input type="text" name="lname" value="" size='20%' id="txt_l" placeholder='Lname' pattern="\D{2,10}" required x-moz-errormessage="Please Enter your lname " title="Please Enter your lname" ></input></td></tr><br>
<tr><td><font color=red> * </font><font color=red>branch :</td><td><input type="text" name="branch" value="" size='20%' id="txt_l" placeholder='branch' pattern="\D{2,10}" required x-moz-errormessage="Please Enter Letter branch " title="Please Enter branch" ></input></td></tr><br>


<tr><td><font color=red> * </font> <font color=red>secretcode :</font></td><td><input type="text" pattern="[0-9]+" required x-moz-errormessage="Please enter your secretcode" title="Please enter your secretcode"  name="secretcode"  value="" size='20%' id="txt_fname" placeholder='secretecode'></input></td></tr>
<tr><td><font color=red> * </font> <font color=red>amountofbirr :</font></td><td><input type="text"pattern="[0-9]+"  required x-moz-errormessage="Please enter your amount of birr" title="Please enter your amount of birr"  name="amountofbirr"  value="" size='20%' id="txt_fname" placeholder='birr'></input></td></tr>

<tr><td colspan="2" align="center"><input style="background-color:grey"type='submit' class="button_example" value='creat' name='submitMain' Onclick="return check(this.form);"/>
<input style="background-color:grey"type='reset' class="button_example" value='clear'/></td></tr>
</form>
</center>
		  <br style="clear:both"/>
		  </div>
		 	  
	  </div>
	  
	  
  <!--<ul class="style10" id="menu">
        <li class="style9 style14 style13">
		<img width="1200" height="100" src="Img/footer.jpg"/>
          
        </li>
  </ul>-->
   	
	  <h2>
	    <!--close sidebar_container-->
    </h2>
</div>
	<!--close sidebar-->
</body>
</html>

<
