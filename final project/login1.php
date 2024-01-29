
<?php  
include('see.php'); 
 session_start();
 if(isset($_SESSION['validuser']))
 {
  $username=$_SESSION['validuser'];
 } 
 
 ?>

<head>
  <title>agmas</title>
 <link rel="stylesheet" type="text/css" href="css/style.css" />
  </head>

<body background= "images/bg/ground.jpg">
  <div id="main">
    <div id="header">
      <!--close banner-->
     

    <!--close header-->

  <div id="menubar">
      <ul id="menu">
       <li><a href="admin/index.php"><font color="white">Home</font></a></li>
        <li><a href="signup.php"><font color="white">signup</font></a></li>
      
      </ul>
    </div><!--close menubar-->  
    

     
    <div id="content1">
        <div class="content_item">
    <center>
  <form id="form1" name="login1" method="POST" action="login1.php" onsubmit='return formValidation()'>
 <form  method='POST' action='change.php' onsubmit='returnn formValidation()' enctype="multipart/form-data">

 
  <br><br><br><br><br><br>
<table  bgcolor=""align="center" style="border:1px margin-top:15px;10px 20px 10px black;" width="200" height="300px">
<tr><td colspan=3 align=right ><p style="margin-right:3%;"><font color=green></td></tr>
<tr colspan="3"><td colspan="3"><img width="500"height="180"src="images/bg/log.jpg"/></td></tr> 

<tr><td><b><font color="black">User Name:</font></b></td><td>  <input type="text"   name="username" 
pattern="\D{3,5}/\d{3}/\d{2}"  required x-moz-errormessage="To Login Please Enter User name" 
title="To Login Please Enter User name"></td></tr>
 <tr><td ><font color="red"></font> <b><font color="black">
 Password:</font></b></td><td><input type="password" name="password" pattern ="[a-zA-Z0-9]+"id="pass1" 
 required x-moz-errormessage="To Login Please Enter password" title="To Login Please Enter password" >
 </td></tr>
<!--<tr><td><font color="red"></font> <b><font color="black"></font></b></td><td width="280px">
<a href="forget.php">Forget Your Password? <img src="img/help.png"> </a></td> </tr>-->
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
$query1 = "SELECT * FROM useraccount WHERE UserName = '$user' AND Password = '$password'AND Status='1';";
  $result=mysql_query($query1);
  if(!$result){
    die("Login Failed".mysql_error());
  }
  $rowCheck = mysql_num_rows($result);
  $row=mysql_fetch_array($result);
$role=$row['Role']; 
  
    
      $_SESSION['validuser']=$user;
     echo "<script>window.location='payy.php';</script>";
      
    
     
   } 

mysql_close($conn);
?>
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
 