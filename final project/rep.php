
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

<body>
  

	

	  <div id="content1">
        <div class="content_item">
		<?php
include('includes/conn.php');


?>
	<form  method='POST' action='rep.php' onsubmit='returnn formValidation()' enctype="multipart/form-data">
<table>
  <tr><td"><h3>To Generate Total  Report per Day Select date </h3></td></tr>
      <tr><td style="width: 172px">products: 
    
       
  <td><input style="background-color:#808000"type='submit' class="button_example" value='report' name='submitMain' Onclick="return check(this.form);"/></td></tr>
     
<tr><th>id</th>
<th>user</th>
<th>img </th>
<th>name</th>
<th>description</th>
<th>price</th>

</tr>

<?php

$result = mysql_query("select * FROM product ");
while($row = mysql_fetch_array($result))
  {     
   $pdatee=$row['id'];
   $uss=$row['user'];
   
   $lnamee=$row['name'];
   $cityy=$row['description'];
   $addd=$row['price'];
  
   
   }
   

    
?>

  <tr>
<td><?php echo $pdatee; ?>  </td>
<td><?php echo $uss; ?></td>
echo '<td><img src="admin/img/products/'.$row['img'].'" width="80" height="50"></td>';
<td><?php echo $lnamee; ?></td>
<td><?php echo $cityy; ?></td>
<td><?php echo $addd; ?></td>



</tr>
</table>
</form>
</center>
 </p>
		 </div>
		 </div>
		 <div id="emp">

		 
		  </center>
		  </div>
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
