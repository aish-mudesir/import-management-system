<?php
// view suppliers information
include_once 'header.php';
include_once 'fun_suppliers.php';
$suppliers = new suppliers();
?>
<title>welcome to suppliers page</title>

<div id="content">

<div class="row-fluid">
<div class="span12">
<div class="hero-unit-3">
<legend><h3><center>supplier List</center></h3></legend>

<a href="#add_supplier" data-toggle="modal" class="btn btn-inverse" style="text-decoration:none; text-align:center;">Add supplier</a>
<a href="find_suppliers.php" class="btn btn-inverse" style="text-decoration:none; text-align:center;">Find suppliers</a>
<br>
<br>
<!--- modal add supplier -->
<div id="add_supplier" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<p><div class="alert alert-danger" style="text-align:center; font-size:20px;">Add supplier</p></div>
</div>
<div class="modal-body">

<form method="post" action="fun_suppliers.php" enctype="multipart/form-data">
    <table class="product_table" cellspacing="5" cellpadding="5">
        <tr>
            <td><label>Name</label></td>
            <td width="50px"></td>
            <td><input type="text" name="name" placeholder="Name..." required pattern="[a-zA-Z]{2,11}$" /></td>
        </tr>

        <tr>
            <td><label>Company</label></td>
            <td width="50px"></td>
            <td><input type="text" name="company" placeholder="Company..." required pattern="[a-zA-Z]{2,11}$" /></td>
        </tr>


        <tr>
            <td><label>Address</label></td>
            <td width="50px"></td>
            <td><input type="text" name="address" placeholder="Address..." required pattern="[a-zA-Z]{2,11}$" /></td>
        </tr>
        <tr>
            <td><label>Contact</label></td>
            <td width="50px"></td>
            <td><input type="text" name="contact" placeholder="Contact..." required pattern = "[0-9]{10}" /></td>
        </tr>
        <tr>
            <td><label>country</label></td>
            <td width="50px"></td>
            <td><input type="text" name="country" placeholder="country..." required pattern="[a-zA-Z]{2,11}$" /></td>
        </tr>

         <tr>
            <td><label>city</label></td>
            <td width="50px"></td>
            <td><input type="text" name="city" placeholder="city..." required pattern="[a-zA-Z]{2,11}$"  /></td>
        </tr>
        <tr>
            <td><label>date added</label></td>
            <td width="50px"></td>
            <td><input type="date" name="date_added" placeholder="date added..." required /></td>
        </tr>
        <tr>
            <td><label>location</label></td>
            <td width="50px"></td>
            <td><input type="text" name="location" placeholder="location..." required pattern="[a-zA-Z]{2,11}$" /></td>
        </tr>


        <tr>
            <td><label>Image</label></td>
            <td width="50px"></td>
            <td><input type="file" name="image" required /></td>
        </tr>
        <tr>
            <td colspan="3" style="text-align:center;">
            <button class="btn-submit-photo" name="save" style="text-align:center; margin-left:10px; margin-right:10px;">Add supplier</button>
            <a href="suppliers.php"><input type="button" class="btn-cancel-photo" value="Cancel" style="text-align:center; margin-left:10px; margin-right:10px;"></a>
            </td>
        </tr>
    </table>
</form>

<!---
<div class="modal-footer">
<button name="Submit" class="btn btn-inverse" data-dismiss="modal" aria-hidden="true" style="text-decoration:none; text-align:center;">ADD</button>
<a href="products.php" class="btn btn-danger" style="text-decoration:none; text-align:center;">Cancel</a>
</div>
-->
</div>
</div>

<!--- end modal -->

<!--- table -->
<table style="width:100%; margin:auto;" class="table table-hover table-striped" id="example">

<thead style="text-align:center;">

<tr>
<th style="text-align:center; width:200px;">Photo</th>
<th style="text-align:center; width:200px;">name</th>
<th style="text-align:center; width:200px;">company</th>
<th style="text-align:center; width:200px;">address</th>
<th style="text-align:center; width:200px;">contact</th>
<th style="text-align:center; width:200px;">country</th>
<th style="text-align:center; width:200px;">city</th>
<th style="text-align:center; width:200px;">date added</th>
<th style="text-align:center; width:200px;">location</th>
<th style="text-align:center;">Action</th>

</tr>

</thead>
<tbody>



<?php
$res = $suppliers->read();
if(mysql_num_rows($res)>0)
{
    while($row = mysql_fetch_array($res))
    {
    ?>
<tr>
<td style="text-align:center; word-break:break-all; width:200px;"> <img src="<?php echo $row['profile_pic']; ?>" width="100px" height="100px"></td>
<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['name']; ?></td>
<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['company']; ?></td>
<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['address']; ?></td>
<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['contact']; ?></td>
<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['country']; ?></td>
<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['city']; ?></td>
<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['date_added']; ?></td>
<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['location']; ?></td>

<td style="text-align:center; width:231px;"> 
    <a href="suppliers_edit.php?edt_id=<?php echo $row['supplier_id']; ?>" class="btn btn-info" style="text-decoration:none; text-align:center;">Edit</a>
    </td>
        <!-- Modal delete supplier -->
    
    </tr>


    <?php
    }   
}
else
{
    ?><tr><td colspan="5">Nothing here... add some new</td></tr><?php
}
?>
</table>



</center>
</body>
</html>