<?php
// edit users information
include_once 'header.php';
include_once 'fun_users.php';
$users = new users();
if(isset($_GET['edt_id']))
{
	$res=mysql_query("SELECT * FROM user WHERE id=".$_GET['edt_id']);
	$row=mysql_fetch_array($res);
}
?>
<div id="content">

<div class="row-fluid">
<div class="span12">
<div class="hero-unit-3">
<legend><h3><center>Edit Admin</center></h3></legend>


 <form class="form-horizontal" method="post" enctype="multipart/form-data" action="fun_users.php?edt_id=<?php echo $_GET['edt_id'] ?>">
	<table class="product_table" cellspacing="5" cellpadding="5">
		<tr>
			<td><img src="<?php echo $row['profile_pic']; ?>" style="width:75px; height:75px;"></td>
			<td width="50px"></td>
			<td>
			<input type="file" name="image">
			<br />
			<br />
			<input type="submit" class="btn-submit-photo" value="Update Profile" name="image" />
			</td>
		</tr>
		<tr>
			<td><label>Firstname</label></td>
			<td width="50px"></td>
			<td><input type="text" name="firstname" value="<?php echo $row['firstname']; ?>" placeholder="Firstname..." /></td>
		</tr>
		<tr>
			<td><label>Lastname</label></td>
			<td width="50px"></td>
			<td><input type="text" name="lastname" value="<?php echo $row['lastname']; ?>" placeholder="Lastname..." /></td>
		</tr>
		<tr>
			<td><label>User</label></td>
			<td width="50px"></td>
			<td><input type="text" name="user" value="<?php echo $row['user']; ?>" placeholder="user..." /></td>
		</tr>
		<tr>
			<td><label>Username</label></td>
			<td width="50px"></td>
			<td><input type="text" name="username" value="<?php echo $row['username']; ?>" placeholder="Username..." /></td>
		</tr>
		<tr>
			<td><label>Password</label></td>
			<td width="50px"></td>
			<td><input type="password" name="password" value="<?php echo $row['password']; ?>" placeholder="Password..." /></td>
		</tr>
		<tr>
			<td><label>Contact No.</label></td>
			<td width="50px"></td>
			<td><input type="text" name="contact" value="<?php echo $row['contact']; ?>" placeholder="Contact no..." /></td>
		</tr>
		<tr>
			<td colspan="3" style="text-align:center;">
			<button class="btn-submit-photo" name="update" style="text-align:center; margin-left:10px; margin-right:10px;">Save Update</button>
			<a href="users.php"><input type="button" class="btn-cancel-photo" value="Cancel" style="text-align:center; margin-left:10px; margin-right:10px;"></a>
			</td>
		</tr>
	</table>
</form>

</div>
		
		</div>	
	</div>
	
</body>

</html>
