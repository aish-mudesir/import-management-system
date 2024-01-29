<?php include ('sup_header.php'); ?>

<div id="content">







<!DOCTYPE html>
<html>
<head>
	<title>welcome to import mangments system</title>


	<link rel="stylesheet" href="css/dstyle.css" type="text/css" media="screen" charset="utf-8">	
<!--sa poip up-->
<link href="css/dfacebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="js/djquery.js" type="text/javascript"></script>
  <script src="js/dfacebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
</head>
<body>


 
  <div id="content">








<div class="portlet">
			<div class="portlet-header fixed"> 
			<label for="filter">Search</label> <input type="text" name="filter" value="" id="filter" />
			&nbsp;&nbsp;Legend:  <img src="images/cancel.png " style="width:60px;height:15px">Pending &nbsp;<img src="images/active.png" style="width:60px;height:15px">Delivered
			</div>
			<div class="portlet-content nopadding">
			<form action="" method="post">
			
			<table cellpadding="1" cellspacing="1" id="resultTable">
				<thead>
					<tr>
						<th  style="border-left: 1px solid #C1DAD7"> Confirmation Number </th>
						<th> Name </th>
						<th> Address </th>
						<th> Contact </th>
						<th> Email </th>
						<th> Delivery Address </th>
						<th> Status </th>
						<th> Delivery Type</th>
						
						<th> Action </th>
					</tr>
				</thead>
				<tbody>
				<?php
					include('includes/conn.php');
					$result = mysql_query("SELECT * FROM process where user = '1' ORDER BY process_id DESC");
					while($row = mysql_fetch_array($result))
						{
							echo '<tr class="record" id="'.$row['status'].'">';
							echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['confirmation'].'</td>';
							echo '<td>'.$row['firstname'].' '.$row['lastname'].'</td>';
							echo '<td><div align="left">'.$row['address'].'</div></td>';
							echo '<td><div align="left">'.$row['contact'].'</div></td>';
							echo '<td><div align="left">'.$row['email'].'</div></td>';
							echo '<td><div align="left">'.$row['delivery'].'</div></td>';
							echo '<td><div align="left">'.$row['status'].'</div></td>';
							echo '<td><div align="left">'.$row['delivery_type'].'</div></td>';
							
							echo '<td><div align="center"><a rel="facebox" href="vieworders.php?id='.$row['confirmation'].'" title="Click To View Orders">View Orders</a> | <a rel="facebox" href="viewreport.php?id='.$row['confirmation'].'" title="Click To View Orders">Print</a> | <a rel="facebox" href="editstatus.php?id='.$row['process_id'].'">edit</a> 
							</div></td>';
							echo '</tr>';
						}
					?> 
				</tbody>
			</table>
			</form>
			</div>
		</div>

















</div>	
		
	</div>
	
</body>

</html>
