
<html><head>
<link rel="icon" type="image/ico" href="Img/BILL.png"/>
</head>
<body>
<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,widtd=600, height=200, left=50, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>List of Passer</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="widtd: 600px; font-size:16px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<style>
#print_content{
width:734px;
margin:0 auto;
}
</style>
<a href="javascript:Clickheretoprint()">Print</a>
<a href="logout.php">logout</a>
<a href="pay.php">back</a>
<div id="print_content">
<img width="790" height="80"src="Img/am.JPG"/><br><br>

<?php
include("see.php");


?>

<table style="border:1px solid black; border-radius:50px;margin-top:15px;box-shadow:0px 0px 0px black;" width="800" height="250px">
<?php
$result = mysql_query("SELECT * FROM bank");
$num = mysql_num_rows($result);
for($i=0;$i<$num;$i++)
   {
	    $date= mysql_result($result,$i,'date');
		$billNO= mysql_result($result,$i,'billNO');
		$amountofbirr= mysql_result($result,$i,'amountofbirr');
		$servicetype= mysql_result($result,$i,'servicetype');
		$username= mysql_result($result,$i,'username');
		//$date= mysql_result($result,$i,'Date');
   }
   

   mysql_close($conn);
?>

<tr><td><b>date</b></td>
<td><?php echo $date; ?>  </td>
</tr>
<tr>
<td><b>bill Number</td>
<td><?php echo $billNO; ?></td>
</tr>
<tr>
<td><b>amountofbirr</b></td>
<td><?php echo $amountofbirr; ?></td>
</tr>
<tr>
<td><b>service_type</b></td>
<td><?php echo $servicetype; ?></td>
</tr>
<tr>
<td><b>user name</b></td>
<td><?php echo $username; ?></td>
</tr>

</table>
</center>
<br><br>
<pre>
<font color ="green">(*)</font><b>Customer Name                                             </b><hr> 

<font color ="green">(*)</font><b>Prepared by                                            Signature</b><hr> 
</pre>
</div>

</body>
</html>