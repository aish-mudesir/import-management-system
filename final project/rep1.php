
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

<body bgcolor=#9494B8>
  

	  <div id="content1">
        <div class="content_item">
		<?php
include('includes/conn.php');


?>

<form  method='POST' action='rep1.php' onsubmit='returnn formValidation()' enctype="multipart/form-data">
<table>
	<tr><td"><h3>To Generate Total  Report per Day Select date </h3></td></tr>
      <tr><td style="width: 172px">date: 
	  <select name="date">
          <option>date</option>
		  <?php
$result = mysql_query("SELECT * FROM process");

while($row = mysql_fetch_array($result))
  {   	
   $rowdate=$row['date']; 
   
?>

           <option selected ><?php echo $rowdate; ?> </option>
    
		</select></td>
		 		 


<?php
$date =$_POST['date'];
$result = mysql_query("select * FROM process where date='$date'");
while($row = mysql_fetch_array($result))
  {   	
   $pdate=$row['date'];
   $us=$row['user'];
   $fname=$row['firstname'];
   $lname=$row['lastname'];
   $city=$row['city'];
   $add=$row['address'];
   $con=$row['country'];
   $ema=$row['email'];
   $cont=$row['contact'];
   $pay=$row['payable'];
   $sts=$row['status'];
   $comf=$row['confirmation'];
   $del=$row['delivery'];
   $delt=$row['delivery_type'];
     
   
   }
   

	  
?>

<tr><th>date</th>
<th>user</th>
<th>firstname</th>
<th>lastname</th>
<th>city</th>
<th>address</th>
<th>country</th>
<th>email</th>
<th>contact</th>
<th>payable</th>
<th>status</th>
<th>confirmation</th>
<th>delivery</th>
<th>delivery_type</th>

</tr>

  <tr>
<td><?php echo $pdate; ?>  </td>
<td><?php echo $us; ?></td>
<td><?php echo $fname; ?></td>
<td><?php echo $lname; ?></td>
<td><?php echo $city; ?></td>
<td><?php echo $add; ?></td>
<td><?php echo $con; ?></td>
<td><?php echo $ema; ?></td>
<td><?php echo $cont; ?></td>
<td><?php echo $pay; ?></td>
<td><?php echo $sts; ?></td>
<td><?php echo $comf; ?></td>
<td><?php echo $del; ?></td>
<td><?php echo $delt; ?></td>


</tr>
</table>
<td><input style="background-color:#808000"type='submit' class="button_example" value='report' name='submitMain' Onclick="return check(this.form);"/></td></tr>

</form>

 
</body>
</html>