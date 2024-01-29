<?php
// view users information
include_once 'header1.php';
include_once 'fun_users.php';
$users = new users();
?>
<title>welcome to users page</title>

<div id="content">

<div class="row-fluid">
<div class="span12">
<div class="hero-unit-3">
<legend><h3><center>User List</center></h3></legend>

<a href="#add_User" data-toggle="modal" class="btn btn-inverse" style="text-decoration:none; text-align:center;">Add User</a>
<br>
<br>
<!--- modal add User -->
<div id="add_User" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<p><div class="alert alert-danger" style="text-align:center; font-size:20px;">Add User</p></div>
</div>
<div class="modal-body">

<form method="post" action="fun_users.php" enctype="multipart/form-data">
    <table class="product_table" cellspacing="5" cellpadding="5">
        <tr>
            <td><label>Firstname</label></td>
            <td width="50px"></td>
            <td><input type="text" name="firstname" placeholder="Firstname..." required pattern="[a-zA-Z]{2,11}$"  ></td>
            <?php if (isset($errors['firstname']))echo $errors['firstname'];?>
        </tr>

        <tr>
            <td><label>Lastname</label></td>
            <td width="50px"></td>
            <td><input type="text" name="lastname" placeholder="Lastname..." required pattern="[a-zA-Z]{2,11}$" /></td>
        </tr>

        <tr>
            <td><label>User 
            </label></td>
            <td width="50px"></td>
             <td style="padding-top:12px;"><select name="user" required maxlength="5">
               <option ></option>
                  <option value='1'>manager</option>
                  <option value='2'>Supplier</option>
                  <option value='3'>Distrbutor</option>
                  <option value='4'>admin</option>
                </select></td>
        </tr>


        <tr>
            <td><label>Username</label></td>
            <td width="50px"></td>
            <td><input type="text" name="username" placeholder="Username..." required pattern="\D{3,5}/\d{3}/\d{2}"  required x-moz-errormessage="To Login Please Enter User name" 
title="To Login Please Enter User name" /></td>


        </tr>
        <tr>
            <td><label>Password</label></td>
            <td width="50px"></td>
            <td><input type="password" name="password" placeholder="Password..." required  pattern="[a-z0-9]{4,15}$"/></td>
        </tr>
        <tr>
            <td><label>Contact No.</label></td>
            <td width="50px"></td>
            <td><input type="text" name="contact" placeholder="Contact no..." required pattern = "[0-9]{10}" ></td>
        </tr>
        <tr>
            <td><label>Image</label></td>
            <td width="50px"></td>
            <td><input type="file" name="image" required /></td>
        </tr>
        <tr>
            <td colspan="3" style="text-align:center;">
            <button class="btn-submit-photo" name="save" style="text-align:center; margin-left:10px; margin-right:10px;">Add User</button>
            <a href="users.php"><input type="button" class="btn-cancel-photo" value="Cancel" style="text-align:center; margin-left:10px; margin-right:10px;"></a>
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
<th style="text-align:center; width:200px;">Firstname</th>
<th style="text-align:center; width:200px;">Lastname</th>
<th style="text-align:center; width:200px;">User</th>
<th style="text-align:center; width:200px;">Username</th>
<th style="text-align:center; width:200px;">Password</th>
<th style="text-align:center; width:200px;">Contact No.</th>
<th style="text-align:center;">Action</th>

</tr>

</thead>
<tbody>



<?php
$res = $users->read();
if(mysql_num_rows($res)>0)
{
    while($row = mysql_fetch_array($res))
    {
    ?>
<tr>
<td style="text-align:center; word-break:break-all; width:200px;"> <img src="<?php echo $row['profile_pic']; ?>" width="100px" height="100px"></td>
<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['firstname']; ?></td>
<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['lastname']; ?></td>
<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['user']; ?></td>
<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['username']; ?></td>
<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['password']; ?></td>
<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['contact']; ?></td>

<td style="text-align:center; width:231px;"> 
    <a href="users_edit.php?edt_id=<?php echo $row['id']; ?>" class="btn btn-info" style="text-decoration:none; text-align:center;">Edit</a>
</div>
</div>
    
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