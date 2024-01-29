
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
  <title>Arbaminch court system</title>
  <link rel="icon" type="image/png" href="Img/medosh.jpg"/>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  <style type="text/css">
  </style>
  <body>
  <div id="main">
    <div id="header">
      <!--close banner-->
      <img width="1200" height="120" src="Img/am.jpg" alt="image1" width="1201" height="118"/></div>
	   <!--close header-->

	<div id="menubar">
     <ul id="menu">
	  <li ><a href="admin.php"><font color="white">HOME</font></a></li>
	  
       
      </ul>
    </div><!--close menubar-->	

  
        
                  </div>
				
    </div>	
    
<div id="site_content">		

	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
            
			 
			<img width="215" height="200" src="Img/cd.jpg"/>
				<font size="5"color="green"><b></b></font>
		
			<table bgcolor="#4b474"align ="center" id="table2">
			<br>
<hr><hr></body>
				<font size="3"color="black"><b></b></font>
		
			<table bgcolor="#4b474"align ="center" id="table2">
			<tr><td></td><img width="215" height="50"src="Img/wt.jpg"></a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td>
			
					
			</tr>
			<tr><td></td><td><img width="215" height="50"src="Img/8.jpg"></a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			
			
			</tr>
			
			
			<tr><td></td><td><img width="215" height="50"src="Img/11.jpg"></a></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			
			</tr>
			</table>
			<br><br>
			<hr><hr>
			 
			
			<hr></hr>
			</table>
	
			<!-- <img width="215" src="Img/feln-crowd_2.png"/>-->
               </tr>
             </table>
			
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
      
      </div>
	 

	  <div id="content1">
        <div class="content_item">
		<center>
<font face="Arial" size="2px">Change Password.......</font>
<div style="width:420px; height:270px; margin:0 auto; position:relative; border:2px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#000000;">

  <form id="form1" name="login" method="POST" action="change.php" onsubmit="return validateForm()">
 <div style="background-color:#336699;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:22px;"> 
 <div style="float:left;" ><strong><font color="white" size="2px">Change Password</font></strong></div>

 <?php
if(isset($_POST['changepassword']))
{
$oldpass = base64_encode($_POST['old_password']);
$newpass =base64_encode($_POST['new_password']);
$confirmpass = base64_encode($_POST['confirm_password']);
$connect=mysql_connect("localhost","root","");
if(!$connect){
die("error connection to db server".mysql_error());
}
$dbselect=mysql_select_db("bill", $connect);
if(!$dbselect){
die("error in selecting db ".mysql_error());
}
$query="select * from useraccount where password='{$oldpass}' ";
$result=mysql_query($query);
if(!$result){
die("query faile".mysql_error());
}
if(mysql_num_rows($result)==1){
    if($newpass!=$confirmpass){
	       echo'  <p class="wrong">New Password and Confirm Password does not Match!</p>';                                
		   echo' <meta content="5;change.php" http-equiv="refresh" />';
		   }
		   else
		   {
  
  mysql_query("UPDATE useraccount SET password='{$newpass}'where password='{$oldpass}'");
  //mysql_query("UPDATE student SET password='{$newpass}'where password='{$oldpass}'");
        $result=mysql_query($query);
		 echo'  <p class="success"> Your password has been changed successfuly!</p>';
         echo' <meta content="5;change.php" http-equiv="refresh" />';  
   }
   }
else
{
 echo'  <p class="wrong">Wrong Old password!</p>';
 echo' <meta content="5;change.php" http-equiv="refresh" />';
}
}
?>


  <table width="350" align="center">
  <tr>
    <td colspan="2"><div style="Times New Roman; color:#FF0000; font-size:12px;">
</div></td>
  </tr>  
  <br><br><br>
		 <tr>
	     <td class='para1_text' width="220px"><font color="red"></font> Old Password:</td>
		 <td><input type="password" name="old_password" required x-moz-errormessage="Enter Old password" ></td>
	     </tr>
         <tr>
	     <td class='para1_text' width="220px"><font color="red"></font> New Password:</td>
		 <td><input type="password" name="new_password" required x-moz-errormessage="Enter New Password" ></td>
	     </tr>
		 <tr>
	     <td class='para1_text' width="220px"><font color="red"></font> Confirm Password:</td>
		 <td><input type="password" name="confirm_password" required x-moz-errormessage="Re-type your Password" ></td>
	     </tr>
  <tr>
    <td>&nbsp;</td>
	<br>
    <td><input type="submit" name="changepassword" value="Change Password" class="button_example"/></td>
  </tr>
</table> 
  </form>
</center>


</td> 
</tr>
</table>
<!--End Body of section-->
</table>
<!--Footer-->


      
</div>
</div>
<!--End of Footer-->
</body>
</html>



      





</div>
	</div>
		     
		    </div><!--end of in_informations -->
             
    	

    	


 </body>
 <div id="footer">
	<!--<img  width="1090px" height="50px" src="src/footer.jpg" />-->
</div>
</html>
