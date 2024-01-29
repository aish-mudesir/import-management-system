
<?php include ('session.php'); ?>

<!DOCTYPE html>
<html>
<head>

<link href="css/home.css" rel="stylesheet" type="text/css" />	
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>

	<style type="text/css" >
.logo_banner {
float: left;
width: 400px;
height: 75px;
margin-left: 15px;
}
</style>
	
</head>

<body>

	<div id="wrapper">
		<!---start header-->
			<div id="header">
        	<h1><a href="home.php"><img src="images/bg/ooo.JPG" class="logo_banner"></a></h1>
			<a href="log_out.php" title="LOGOUT" class="link">LOGOUT</a>
		
			<a href="" title="ADMIN" class="active"><img src="<?php echo $row['profile_pic']; ?>"
			 style="width:50px; height:50px; margin-top:10px;"> &nbsp; <?php echo $row['username']; ?></a>
		</div>
		<!---end header-->
		
		<!---start navbar-->
			<div id="navbar">
			<a href="bank.php" title="Home" class="link">creat account</a>
		    
			<a href="login1.php" title="Message" class="link">add money</a>
			
				
		</div>