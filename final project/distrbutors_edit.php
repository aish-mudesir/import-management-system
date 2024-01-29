<?php
// edit distrbutors information
include_once 'header.php';
include_once 'fun_distrbutors.php';
$distrbutors = new distrbutors();
if(isset($_GET['edt_id']))
{
	$res=mysql_query("SELECT * FROM distrbutors WHERE distrbutor_id=".$_GET['edt_id']);
	$row=mysql_fetch_array($res);
}
?>
<div id="content">

<div class="row-fluid">
<div class="span12">
<div class="hero-unit-3">
<legend><h3><center>Edit Distrbutors</center></h3></legend>


 <form class="form-horizontal" method="post" enctype="multipart/form-data" action="fun_distrbutors.php?edt_id=<?php echo $_GET['edt_id'] ?>">
	<table class="product_table" cellspacing="5" cellpadding="5">
		<tr>
			<td><img src="<?php echo $row['profile_pic']; ?>" style="width:75px; height:75px;"></td>
			<td width="50px"></td>
			<td>
			<input type="file" name="image">
			</td>
		</tr>
		<tr>
			<td><label>Name</label></td>
			<td width="50px"></td>
			<td><input type="text" name="name" value="<?php echo $row['name']; ?>" placeholder="Firstname..." /></td>
		</tr>
		<tr>
			<td><label>company</label></td>
			<td width="50px"></td>
			<td><input type="text" name="company" value="<?php echo $row['company']; ?>" placeholder="company..." /></td>
		</tr>
		<tr>
			<td><label>address</label></td>
			<td width="50px"></td>
			<td><input type="text" name="address" value="<?php echo $row['address']; ?>" placeholder="address..." /></td>
		</tr>
		<tr>
			<td><label>contact</label></td>
			<td width="50px"></td>
			<td><input type="text" name="contact" value="<?php echo $row['contact']; ?>" placeholder="contact..." /></td>
		</tr>
		<tr>
			<td><label>country</label></td>
			<td width="50px"></td>
			<td><input type="text" name="country" value="<?php echo $row['country']; ?>" placeholder="Country..." /></td>
		</tr>
		<tr>
			<td><label>city</label></td>
			<td width="50px"></td>
			<td><input type="text" name="city" value="<?php echo $row['city']; ?>" placeholder="City..." /></td>
		</tr>



        <tr>
			<td><label>date added</label></td>
			<td width="50px"></td>
			<td><input type="text" name="date_added" value="<?php echo $row['date_added']; ?>" placeholder="date added..." /></td>
		</tr>
		<tr>
			<td><label>location</label></td>
			<td width="50px"></td>
			<td><input type="text" name="location" value="<?php echo $row['location']; ?>" placeholder="location..." /></td>
		</tr>


		<tr>
			<td colspan="3" style="text-align:center;">
			<button class="btn-submit-photo" name="update" style="text-align:center; margin-left:10px; margin-right:10px;">Save Update</button>
			<a href="distrbutors.php"><input type="button" class="btn-cancel-photo" value="Cancel" style="text-align:center; margin-left:10px; margin-right:10px;"></a>
			</td>
		</tr>
	</table>
</form>

</div>
		
		</div>	
	</div>
	
</body>

</html>
