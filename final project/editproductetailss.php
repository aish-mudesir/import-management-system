<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>
<?php
	include('distrbutors/connect.php');
	$id=$_GET['id'];
	$result = mysql_query("SELECT * FROM product where id='$id'");
		while($row = mysql_fetch_array($result))
			{
				$type=$row['name'];
				$rate=$row['price'];
				$description=$row['description'];
				$states=$row['states'];
			}
?>
<form action="execeditproducts.php" method="post">
	<input type="hidden" name="roomid" value="<?php echo $id=$_GET['id'] ?>">
	Name:<br><input type="text" name="type" value="<?php echo $type ?>" class="ed"><br>
	Rate:<br><input type="text" name="rate" value="<?php echo $rate ?>" class="ed"><br>
	Description:<br><textarea name="description" class="ed"><?php echo $description ?></textarea><br>

    states:<select name="productStatus" required maxlength="5">
             <option value="">~~SELECT~~</option>
                <option value="1">Available</option>
                <option value="2">Not Available</option>
                </select> 
            <?php echo $states ?>" 
	<input type="submit" value="Edit" id="button1">
</form>