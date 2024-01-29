<html>
<head>
<title> Print </title>
</head>
<body
<?php
require "connect.php";
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$user=$_POST['user'];
$email=$_POST['email'];
$cnum=$_POST['cnum'];
$transnum=$_POST['transnum'];
$paddress=$_POST['paddress'];
$daddress=$_POST['daddress'];
$ddddddd=$_POST['date'];
$city=$_POST['city'];
$status='Pending';
$total=$_POST['ototal'];
$dmethod=$_POST['sdsd'];
$pmethod=$_POST['pmethod'];


mysql_query("INSERT INTO process (firstname, lastname, user,city, address, email, contact, confirmation, status, payable, delivery, date, payment, delivery_type) VALUES ('$fname','$lname','$user','$city','$paddress','$email','$cnum','$transnum','$status','$total','$daddress','$ddddddd','$pmethod','$dmethod')");
header("location: print.php?id=$transnum");
echo $total;
$mail_To = $email;
$mail_Subject = "Order notification From Ibuchi Mirian E-commerce Website";
$mail_Body = "First Name: $fname\n".
"Last Name: $lname\n".
"Email: $email \n".
"City: $city \n".
"Country: $country \n".
"Contact Number: $cnum\n".
"Payable amount: $total\n ".
"Delivery Method: $dmethod\n".
"Payment Method: $pmethod\n ".
"$pmethod Account: $accountnum\n ".
"Confirmation Number: $transnum\n ";
mail($mail_To, $mail_Subject, $mail_Body);

$sql=mysql_query("select * from bank1 where secret_code='$secretcode' ");
	while($row=mysql_fetch_array($sql)){
		$dbsecretcode=$row['secretcode'];
		$dbamountofbirr=$row['amountofbirr'];
		
	}
	
	$amount=$dbamountofbirr-$amountofbirr;
	if($amountofbirr<$dbamountofbirr){
$sql=("UPDATE bank SET amountofbirr='$amount' WHERE secretcode='$secretcode'");
if (!mysql_query($sql,$p))
{
die('Error: ' . mysql_error());
	
}
else{
	echo "<h1>you have succesfully transfered from your balance</h1>";
	  //mysql_close($sql);
	  mysql_close($p);
	}
	}
	else{
		echo "<script>window.location='add.php';</script>";
	}
$a = mysql_connect("localhost","root","");
  if($amountofbirr<$dbamountofbirr){
	$run="INSERT INTO bank1
VALUES('$secret_code','$amoutoffbirr' , curdate(),)";
if(mysql_query($run)>0){
	
	 //mysql_close($run);
	  mysql_close($a);
}
else{
	echo "<h1>error</h1>";
}

  }
else{

}  //else
			

	 //}

?>
</body>
</html>