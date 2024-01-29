
<?php
// the index page of the projects 
 session_start();
  include('includes/conn.php');
if(isset($_SESSION['id'])!="")
 {
  header("location:home.php");

 }

 // check the input of users 
        if(isset($_POST['enter']))
        {
            $username=$_POST['username'];
            $user=$_POST['user'];
            $password=base64_encode($_POST['password']);
         {
            $result = mysql_query("SELECT * FROM user WHERE username = '$username' and password='$password' and user = '$user' ")
            or die(mysql_error());
                            
        $row = mysql_fetch_array($result);
         $count = mysql_num_rows($result);  
    // multi user checking             
       
          if ($count > 0)

          {
         

        if ($user==1) 
            {
      session_start();
      $_SESSION['id'] = $row['id'];
      header("location:home.php");
        }

        elseif ($user==2) 
              {
          session_start();
         $_SESSION['id'] = $row['id'];
         header("location: home_sup.php");


             }


        elseif ($user==3) 
              {
          session_start();
         $_SESSION['id'] = $row['id'];
         header("location: home_dis.php");

             }
            elseif ($user==4) 
            {
      session_start();
      $_SESSION['id'] = $row['id'];
      header("location:users.php");
        }


         
        }
      else


         {
        echo "<script>alert('Please check your username and password!'); window.location='index.php'</script>";
        } 

     }                 
    }

 ?>

 
<html>
<head>
<title>Login to ims</title>
<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body background= "images/bg/logo.jpg">

<div id="header">
 <div align="center">
     <label>
        <h1><a href="home.php"><img src="images/bg/lo.JPG" class="logo_banner"></a></h1>
    </label>
    </div>
    </div>
</div>

<center>


<form method="post" action="#">

  <div class= "form">
    <table >
<tr><td colspan=3 align=right ><p style="margin-right:3%;"><font color=green></td></tr>
<tr colspan="3"><td colspan="3"><img width="500"height="180"src="images/bg/log.jpg"/></td></tr> 
<tr>
<td><b><font color="black">User Name:</font></b></td><td><input type="text" name="username" placeholder="Username" pattern="\D{3,5}/\d{3}/\d{2}"  required x-moz-errormessage="To Login Please Enter User name" 
 
title="To Login Please Enter User name" /></td>
</tr>

<tr>
<td><b><font color="black">Password:</font></b></td><td><input type="password" name="password" placeholder="Password"  pattern ="[a-zA-Z0-9]+"id="pass1" 
 required x-moz-errormessage="To Login Please Enter password" title="To Login Please Enter password" >
  /></td>
</tr>

<tr>
<td>
    
 User Type: <select name="user" class="form-control"> 
 <option value="1 " selected>Manager </option>
<option value="2">Supplier </option>
<option value="3">Distributor </option>
<option value="4">Administrator </option>
</select>

</td>
</tr>

<tr>
<td align="center"><button name="enter" type="submit" name="">LogIn</button></td>
</tr>

</table>
</form>
</div>
</center>
</body>
</html>