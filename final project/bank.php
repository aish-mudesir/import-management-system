<?php
// view users information
include_once 'header2.php';
include_once 'fun_users1.php';
$users = new users();
?>
<title>welcome to users page</title>

<div id="content">

<div class="row-fluid">
<div class="span12">
<div class="hero-unit-3">


<a href="#add_User" data-toggle="modal" class="btn btn-inverse" style="text-decoration:none; text-align:center;">Add account</a>
<br>
<br>
<!--- modal add User -->
<div id="add_User" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<p><div class="alert alert-danger" style="text-align:center; font-size:20px;">Add account</p></div>
</div>
<div class="modal-body">

<form method="post" action="fun_users1.php" enctype="multipart/form-data">
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
            <td><label>branch
            </label></td>
            <td width="50px"></td>
             <td style="padding-top:12px;"><select name="user" required maxlength="5">
               <option ></option>
                  <option value='1'>bashin</option>
                  <option value='2'>cb</option>
                  <option value='3'>brehan</option>
                  <option value='4'>admin</option>
                </select></td>
        </tr>


        <tr>
            <td><label>secretcode</label></td>
            <td width="50px"></td>
            <td><input type="text" name="username" placeholder="Username..." required pattern="[a-z0-9]{3,11}$" /></td>


        </tr>
        <tr>
            <td><label>amount of birr</label></td>
            <td width="50px"></td>
            <td><input type="text" name="username" placeholder="password" required pattern="[a-z0-9]{3,11}$" /></td>


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






</center>
</body>
</html>