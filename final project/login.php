
<?php  
include('see.php'); 
 session_start();
 if(isset($_SESSION['validuser']))
 {
  $username=$_SESSION['validuser'];
 } 
 
 ?>

<head>
  <title>ARBAMINCH TOWN CENTRALIZED BILLING SYSTEM</title>
 <link rel="stylesheet" type="text/css" href="css/style.css" />
  </head>

<body>
  <div id="main">
    <div id="header">
      <!--close banner-->
     <img width="1200" height="120" src="Img/am.jpg" alt="image1" width="101" height="118"/></div>

    <!--close header-->

	<div id="menubar">
      <ul id="menu">
       <li><a href="home.php"><font color="white">Home</font></a></li>
      
        <li><a href="login.php"> <font color="white">Login</font></a></li>
        
      </ul>
    </div><!--close menubar-->	
    

		 <center>
  <form id="form1" name="login" method="POST" action="login.php" onsubmit='return formValidation()'>
 <form  method='POST' action='change.php' onsubmit='returnn formValidation()' enctype="multipart/form-data">
<form  method='POST' action='change.php' onsubmit='returnn formValidation()' enctype="multipart/form-data">
 <center>
  <br>In  this  project,  we  propose  a  new  model for central  billing system  for  personal  bills  such  as  water bills,  telecom  bills and electric bills. 
The  proposed system  consolidates  all  bills  for  one  user  so  the  user  will  not need to track and pay the bills individually.
  Personal users can save a lot of time and effort on paying bills every month and will less likely forget to pay for the bills thus avoiding paying late payment fines. 
  Billing organizations such as utility companies, telecom companies and banks can benefit from this system by getting payments from users in time and sending out less physical mails for bills, which can save a lot of costs as well as save the resources. 
  The  proposed  system  can  also provide  functionalities  for  the  users  to  track  and  view  their expenses  back  in  time  and  in  different  aspects  online  from anywhere.  Expense reports can also be generated for all bills monthly, which is a very useful tool for users to know and plan their expenses.
<table  bgcolor="gray"align="top" style="border:1px  border-radius:50px;margin-top:15px;box-shadow:10px 20px 10px " width="500" height="250px">
<tr><td colspan=3 align=right ><p style="margin-right:3%;"><font color=green></td></tr>
<tr colspan="3"><td colspan="3"><img width="500"height="100"src="Img/login.png"/></td></tr>

<tr><td><b><font color="black">User Name:</font></b></td><td>  <input type="text"   name="username" 
pattern="\D{3,5}/\d{3}/\d{2}"  required x-moz-errormessage="To Login Please Enter User name" 
title="To Login Please Enter User name"></td></tr>
 <tr><td ><font color="red"></font> <b><font color="black">
 Password:</font></b></td><td><input type="password" name="password" pattern ="[a-zA-Z0-9]+"id="pass1" 
 required x-moz-errormessage="To Login Please Enter password" title="To Login Please Enter password" >
 </td></tr>
 <tr><td><font color=red> * </font><b><font color=black>Role: </td></b><td> 
 <select name="role"  id="role"  required>
<option value=""> enter role of user</option>
<option>Administrator</option>
<option>employee</option>
</select></td></tr>
<tr><td><font color="red"></font> <b><font color="black"></font></b></td><td width="280px">
<a href="forget.php">Forget Your Password? <img src="img/help.png"> </a></td> </tr>
 <tr><td>&nbsp;</td><br><td><input type="submit" style="background-color:#808000" 
 name="submitlogin" " value="login" /></td></fieldset> </tr>

							
</form>
</center>
 
 <?php
 
 if(isset($_POST['submitlogin']))
 {
   $user =$_POST['username'];
   $password=base64_encode($_POST['password']);
   // $role=$_POST['role'];
// $passde=base64_encode($password);
$query1 = "SELECT * FROM useraccount WHERE UserName = '$user' AND Password = '$password'AND Status='1' ;";
	$result=mysql_query($query1);
	if(!$result){
		die("Login Failed".mysql_error());
	}
	$rowCheck = mysql_num_rows($result);
	$row=mysql_fetch_array($result);
$role=$row['Role'];	
	//if($row['level']==1){
		
		if($role=='Administrator')
		{
			$_SESSION['validuser']=$user;
		 echo "<script>window.location='admin.php';</script>";
			
		}
		 if ($role=='employee')
		{
			$_SESSION['validuser']=$user;
		 echo "<script>window.location='employee.php';</script>";
			
		}
		 
		if ($role=='customer')
		{
			$_SESSION['validuser']=$user;
		 echo "<script>window.location='customer.php';</script>";
			
		}
		else {
		 echo '<div align="center"><strong><font color="#FF0000"> Incorrect Login Trial!!! Try Again Latter.  !!</font></Strong></div>';
		 echo'<meta content="2;login.php" http-equiv="refresh"/>';

			
		}
     
   } 

mysql_close($conn);
?>

</fieldset>
</table>
		  
		 
	  </div>
	  </div>
	  
  <ul class="style10" id="menu">
       
        <li class="style9 style14 style13">
		
          
        </li>
  </ul>
   	
	  <h2>
	    <!--close sidebar_container-->
    </h2>
	<div id="foot">
 
       <center>
       copyright@2016 Developed by<b><align="absmiddle"><font color="#333333"> </font><strong>AMU_CSIT</strong></b> Students.All Rights Reserved.</a><br /> 
	</center>
		  </div>
	
</div>
	<!--close sidebar-->
</body>
</html>
 