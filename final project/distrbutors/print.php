<title>Agemase medical</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,widtd=900, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>List of Passer</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="widtd: 900px; font-size:16px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<style>
#print_content{
width:434px;
margin:0 auto;
}
</style>
<a href="javascript:Clickheretoprint()">Print</a>
<div id="print_content">
<img src="src/p18.jpg" width="100" height="100" style="float:left;"><strong>Agemase medical </strong><br>Addis Ababa city <br>Email Us: info(at)agmasmedical.com<br>Contact: <a href="#">•	+251 911 956626 </a> 
<br><br><br><br>
<?php
include('connect.php');
		$id=$_GET['id'];
		$result = mysql_query("SELECT * FROM process WHERE confirmation='$id'");
		while($row = mysql_fetch_array($result))
			{
				echo 'Date: '.$row['date'].'<br>';
				echo 'Name: '.$row['firstname'].' '.$row['lastname'].'<br>';
				echo 'Address: '.$row['address'].' '.$row['city'].' '.$row['country'].'<br>';
				echo 'Email: '.$row['email'].'<br>';
				echo 'Contact number: '.$row['contact'].'<br>';
				echo 'Confirmation: '.$row['confirmation'].'<br>';
				echo 'Payment Method: '.$row['payment'].'<br>';
				echo 'Delivery Type: '.$row['delivery_type'].'<br>';
			
	?> 
<table cellpadding="5" cellspacing="0" id="resultTable" border="1" width="100%">
		<tr>
			<td> <strong>Name</strong> </td>
			<td> <strong>Quantity</strong> </td>
		</tr>
	<?php
		
		$id=$_GET['id'];
		$results = mysql_query("SELECT * FROM orders WHERE confirmation='$id'");
		while($rows = mysql_fetch_array($results))
			{
				echo '<tr class="record">';
				echo '<td>'.$rows['product'].'</td>';
				echo '<td>'.$rows['qty'].'</td>';
				echo '</tr>';
			}
	?>
	<?php
		$id=$_GET['id'];
		$resulta = mysql_query("SELECT * FROM process WHERE confirmation='$id'");
		while($rowa = mysql_fetch_array($resulta))
			{
				echo '<tr class="record">';
				echo '<td><strong>'.'Total Payable'.'</strong></td>';
				echo '<td> <font color="d7585e">'.$currency.$rowa['payable'].'</font></td>';
				echo '</tr>';
			}
	?> 
	<?php
	}
	?>
</table>

</div>
<a href="index.php">Back</a>