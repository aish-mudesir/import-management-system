<?php
// view orders information
include_once 'header.php';
include_once 'fun_orders.php';
$orders = new orders();
?>
<title>welcome to orders page</title>

<div id="content">

<div class="row-fluid">
<div class="span12">
<div class="hero-unit-3">
<legend><h3><center>order List</center></h3></legend>

<a href="#add_order" data-toggle="modal" class="btn btn-inverse" style="text-decoration:none; text-align:center;">Add order</a>
<br>
<br>
<!--- modal add order -->
<div id="add_order" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<p><div class="alert alert-danger" style="text-align:center; font-size:20px;">Add order</p></div>
</div>
<div class="modal-body">

<form method="post" action="fun_orders.php" enctype="multipart/form-data">
    <table class="product_table" cellspacing="5" cellpadding="5">
        <tr>
            <td><label>Product</label></td>
            <td width="50px"></td>
            <td><input type="text" name="product" placeholder="product..." required /></td>
        </tr>

        <tr>
            <td><label>confirmation</label></td>
            <td width="50px"></td>
            <td><input type="text" name="confirmation" placeholder="confirmation..." required /></td>
        </tr>

        <tr>
            <td><label>Owner
            </label></td>
            <td width="50px"></td>
             <td style="padding-top:12px;"><select name="owner" required maxlength="5">
               <option ></option>
                  <option value='1'>Adminstrator</option>
                  <option value='2'>Supplier</option>
                  <option value='3'>Distrbutor</option>
                </select></td>
        </tr>


        <tr>
            <td><label>Qountity</label></td>
            <td width="50px"></td>
            <td><input type="text" name="qty" placeholder="qty..." required /></td>
        </tr>
        <tr>
            <td><label>Total</label></td>
            <td width="50px"></td>
            <td><input type="total" name="total" placeholder="total..." required /></td>
        </tr>
        <tr>
            <td><label>design.</label></td>
            <td width="50px"></td>
            <td><input type="text" name="design" placeholder="design ..." required /></td>
        </tr>
        <tr>
            <td><label>note</label></td>
            <td width="50px"></td>
            <td><input type="text" name="note" required /></td>
        </tr>
        <tr>
            <td colspan="3" style="text-align:center;">
            <button class="btn-submit-photo" name="save" style="text-align:center; margin-left:10px; margin-right:10px;">Add order</button>
            <a href="orders.php"><input type="button" class="btn-cancel-photo" value="Cancel" style="text-align:center; margin-left:10px; margin-right:10px;"></a>
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
<th style="text-align:center; width:200px;">Product</th>
<th style="text-align:center; width:200px;">confirmation</th>
<th style="text-align:center; width:200px;">Owner</th>
<th style="text-align:center; width:200px;">Qountity</th>
<th style="text-align:center; width:200px;">Total</th>
<th style="text-align:center; width:200px;">design</th>
<th style="text-align:center; width:200px;">note</th>
<th style="text-align:center;">Action</th>

</tr>

</thead>
<tbody>



<?php
$res = $orders->read();
if(mysql_num_rows($res)>0)
{
    while($row = mysql_fetch_array($res))
    {
    ?>
<tr>
<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['product']; ?></td>
<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['confirmation']; ?></td>
<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['owner']; ?></td>
<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['qty']; ?></td>
<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['total']; ?></td>
<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['design']; ?></td>
<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['note']; ?></td>

<td style="text-align:center; width:231px;"> 
    <a href="orders_edit.php?edt_id=<?php echo $row['order_id']; ?>" class="btn btn-info" style="text-decoration:none; text-align:center;">Edit</a>
    <a href="#<?php  echo $id;?>"  data-toggle="modal"  class="btn btn-danger" style="text-decoration:none; text-align:center;">Delete </a>
</td>
        <!-- Modal delete order -->
<div id="<?php  echo $id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
</div>
<div class="modal-body">
<p>
<div class="alert alert-danger">Are you Sure you want Delete?</p>
</div>
<hr>
<div class="modal-footer">
<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true" style="text-decoration:none; text-align:center;">No</button>
<a href="fun_orders.php?del_id=<?php echo $row['order_id']; ?>" class="btn btn-danger" style="text-decoration:none; text-align:center;">Yes</a>
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