
 <?php include('../includes/class_users.php'); ?>
<?php include ('../session.php'); ?>
<?php
	require_once('../auth.php');
?>
<?php
$transnum=$_SESSION['SESS_MEMBER_ID'];
?>
<!DOCTYPE html>
<html>
<head>
   <title>welcome to manager page</title>
    <link href="../css/hom.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="../css/css3clock.css" />
	<script src="../js/argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="../js/application.js" type="text/javascript" charset="utf-8"></script>


 <script language="javascript" type="text/javascript">
/* Visit http://www.yaldex.com/ for full source code
and get more free JavaScript, CSS and DHTML scripts! */
<!-- Begin
var timerID = null;
var timerRunning = false;
function stopclock (){
if(timerRunning)
clearTimeout(timerID);
timerRunning = false;
}
function showtime () {
var now = new Date();
var hours = now.getHours();
var minutes = now.getMinutes();
var seconds = now.getSeconds()
var timeValue = "" + ((hours >12) ? hours -12 :hours)
if (timeValue == "0") timeValue = 12;
timeValue += ((minutes < 10) ? ":0" : ":") + minutes
timeValue += ((seconds < 10) ? ":0" : ":") + seconds
timeValue += (hours >= 12) ? " P.M." : " A.M."
document.clock.face.value = timeValue;
timerID = setTimeout("showtime()",1000);
timerRunning = true;
}
function startclock() {
stopclock();
showtime();
}
window.onload=startclock;
// End -->
</SCRIPT>	

	

	<style type="text/css" >
.logo_banner {
float: left;
width: 400px;
height: 75px;
margin-left: 15px;
}
</style>



<link rel="stylesheet" href="ain.css" type="text/css" media="screen" charset="utf-8">
<!--sa poip up-->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
  <style>
  table {
    border-collapse: collapse;
    border-spacing: 0;
}

  </style>
  <script language="javascript" type="text/javascript">

function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
    }
	
	function getState(countryId) {		
		
		var strURL="findState.php?country="+countryId;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('statediv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}
	function getCity(countryId,stateId) {		
		var strURL="findCity.php?country="+countryId+"&state="+stateId;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('citydiv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}
				
	}
</script>
<style>
a{
color:#fff;
text-decoration:none;
}
    a.tooltip {outline:none; }
a.tooltip strong {line-height:30px;}
a.tooltip:hover {text-decoration:none;} 
a.tooltip span {
    z-index:10;display:none; padding:14px 20px;
    margin-top:-30px; margin-left:28px;
    width:240px; line-height:16px;
}
a.tooltip:hover span{
    display:inline; position:absolute; color:#111;
    border:1px solid #DCA; background:#fffAF0;}
.callout {z-index:20;position:absolute;top:30px;border:0;left:-12px;}
    
/*CSS3 extras*/
a.tooltip span
{
    border-radius:4px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
        
    -moz-box-shadow: 5px 5px 8px #CCC;
    -webkit-box-shadow: 5px 5px 8px #CCC;
    box-shadow: 5px 5px 8px #CCC;
}
</style>
<script type="text/javascript">
function validateForm()
{
var x=document.forms["form1"]["total"].value;
if (x==null || x=="")
  {
  alert("Take Your Order first");
  return false;
  }
var con = confirm("Are You Sure? you want to order this product?");
if (con ==false)
{
return false;
}
}
</script>











	
</head>

<body>

	<div id="wrapper">
		<!---start header-->
			<div id="header">
        	<h1><a href="home.php"><img src="../images/bg/ooo.JPG" class="logo_banner"></a></h1>
			<a href="../log_out.php" title="LOGOUT" class="link">LOGOUT</a>
		
			<a href="" title="ADMIN" class="active"><img src="../<?php echo $row['profile_pic']; ?>"
			 style="width:50px; height:50px; margin-top:10px;"> &nbsp; <?php echo $row['username']; ?></a>
		</div>
		<!---end header-->
		
		<!---start navbar-->
			<div id="navbar">
			<a href="../home.php" title="Home" class="link">Home</a>
		    <a href="../products.php" title="Product" class="link">Product</a>
		    <a href="generatetrans.php" title="Order" class="link">Order</a>
			<a href="../suppliers.php" title="Supplier" class="link">Supplier</a>
			<a href="../distrbutors.php" title="Distributor" class="link">Distributor</a>
			<a href="../message.php" title="Message" class="link">Message</a>
			
			<a href="../login1.php" title="Message" class="link">pay money</a>
			
		</div>

<div id="content">





<div class="portlet-header fixed">
		


<div id="productlist">
			
			<?php
			require "connect.php";
			$result = mysql_query("SELECT * FROM product where user = '2'");
			while($row=mysql_fetch_assoc($result))
			{
				echo '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a rel="facebox" href="orderpage.php?id='.$row['id'].'&trnasnum='.$transnum.'
				"><img src="img/products/'.$row['img'].'" alt="'.htmlspecialchars($row['name']).'
				" width="109" height="109" class="pngfix" title="Name: '.$row['name'].' | Price: ₦'.$row['price'].' | Description: '.$row['description'].'"/></a>';
			}
			
			?>
		</div>
		<div id="orderlist" align="right">

			<table width="30%" border="1" cellpadding="2" cellspacing="2">
				<tr>
				  <td></td>
				  <td width="25"><div align="center"><strong>Qountity </strong></div></td>
				  <td width="150"><div align="left"><strong>Name</strong></div></td>
				  <td width="25"><div align="center"><strong>Total<br> <?php echo $currency ?></strong></div></td>
				</tr>
				<?php
				$result3 = mysql_query("SELECT * FROM orders WHERE confirmation='$transnum'");
					while($row3 = mysql_fetch_array($result3))
						{
						echo '<tr>';
						echo '<td><a href="deleteorder.php?id='.$row3['id'].'" id="'.$row3['id'].'" class="delbutton" title="Click To Delete"><img src="img/delete.png"></a></td>';
						echo '<td><div align="center">'.$row3['qty'].'</div></td>';
						echo '<td>'.$row3['product'].'</td>';
						echo '<td><div align="center">'.$row3['total'].'</div></td>';
						echo '</tr>';
						}
				?>
				<tr>
				  <td colspan="3"><div align="right"><span style="color:#B80000; font-size:13px; font-weight:bold; font-family:Arial, Helvetica, sans-serif;">Grand Total: <?php echo $currency ?></span></div></td>
				  <td><div align="center">
				  <?php
				  $result5 = mysql_query("SELECT sum(total) FROM orders WHERE confirmation='$transnum'");
					while($row5 = mysql_fetch_array($result5))
					  { 
						echo $row5['sum(total)']; 
						$sfdddsdsd=$row5['sum(total)'];
					  }
				  ?>
				  
				  
				  </div>
				  </td>
				</tr>
			</table>
			<form method="post" action="personalinfo.php" name="form1" onsubmit="return validateForm()">
			<input type="hidden" name="transnumber" value="<?php echo $transnum ?>" />
			<input type="hidden" name="total" value="<?php echo $sfdddsdsd ?>" />
			<input type="hidden" name="totalqty" value="
			<?php
				  $result5 = mysql_query("SELECT sum(qty) FROM orders WHERE confirmation='$transnum'");
					while($row5 = mysql_fetch_array($result5))
					  { 
						echo $row5['sum(qty)']; 
					  }
				  ?>
			" />
			<table width="30%" border="0" cellspacing="0" cellpadding="0">
			  <tr>
				<td width="150">Delivery Method</td>
				<td  width="150"><select name="country" ">
				<option value="0">Select Method</option>
				<option value="2">Inside Ethiopia </option>
				<option value="3">Outside Ethiopia </option>
				</select></td>
			  </tr>
			 
			</table>
			<input type="submit" value="Check Out">
			</form>

		</div>












</div>	
		
	</div>
	
</body>

</html>
