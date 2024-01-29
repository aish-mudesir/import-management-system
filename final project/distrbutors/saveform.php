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
if($pmethod=='POS'){
$accountnum='2617 2008 1809 2224';
}
else if($pmethod=='Ethiopian Commercial bank '){
$accountnum='0012 3332 14';
}
else if($pmethod=='China construction bank'){
$accountnum='1211 5623 1973 2189';
}
else if($pmethod=='Cash On Delivery'){
$accountnum='Cash On Delivery';
}
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

?>
</body>
</html>