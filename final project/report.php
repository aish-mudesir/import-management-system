

<?php 
include ('header.php'); 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <title>agmas</title>
  <link rel="stylesheet" href="css/dstyle.css" type="text/css" media="screen" charset="utf-8">  
<!--poip up controling-->
<link href="css/dfacebox.css" media="screen" rel="stylesheet" type="text/css" />
  
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />
 
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>

  <style type="text/css">

  </style>
</head>

<body>

  

  
    



	 

	  <div id="content1">
        <div class="content_item">
		<?php
include('includes/conn.php');


?>

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <i class="glyphicon glyphicon-check"></i> Order Report
      </div>

       <div id="resultTable">

<div class="portlet">
      
      <div class="portlet-content nopadding">
<form  method='POST' action='report.php' onsubmit='returnn formValidation()' enctype="multipart/form-data">	
	<table cellpadding="1" cellspacing="1" id="resultTable">
	
      <tr><td>date: 
	  <select name="date" required>
          <option selected>date</option>
		  <?php
$result = mysql_query("SELECT * FROM process");

while($row = mysql_fetch_array($result))
  {   	
   $rowdate=$row['date']; 
   
?>

           <option selected><?php echo $rowdate; ?> </option>
  <?php 
  }
  ?>   
		</select></td>

   
   


           
  
     
     
<tr><th>date</th>
<th>user</th>
<th>firstname</th>
<th>lastname</th>
<th>city</th>
<th>address</th>

<th>email</th>
<th>contact</th>
<th>payable</th>
<th>status</th>
<th>confirmation</th>
<th>delivery</th>
<th>delivery_type</th>

</tr>

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
   
   $ema=$row['email'];
   $cont=$row['contact'];
   $pay=$row['payable'];
   $sts=$row['status'];
   $comf=$row['confirmation'];
   $del=$row['delivery'];
   $delt=$row['delivery_type'];
     
   
   }
   

    
?>

  <tr>
<td><?php echo $pdate; ?>  </td>
<td><?php echo $us; ?></td>
<td><?php echo $fname; ?></td>
<td><?php echo $lname; ?></td>
<td><?php echo $city; ?></td>
<td><?php echo $add; ?></td>

<td><?php echo $ema; ?></td>
<td><?php echo $cont; ?></td>
<td><?php echo $pay; ?></td>
<td><?php echo $sts; ?></td>
<td><?php echo $comf; ?></td>
<td><?php echo $del; ?></td>
<td><?php echo $delt; ?></td>


</tr>
</table>
		 </table>
<button type="submit" class="btn btn-success" id="generateReportBtn"> <i class="glyphicon glyphicon-ok-sign"></i> Generate Report</button>
</form>




 
</body>
</html>
