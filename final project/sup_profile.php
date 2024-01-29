<?php
// view suppliers information
include_once 'sup_header.php';
include_once 'fun_suppliers.php';
$suppliers = new suppliers();
?>
<title>welcome to suppliers page</title>

<div id="content">

<div class="row-fluid">
<div class="span12">
<div class="hero-unit-3">
<legend><h3><center>Suppliers Profile</center></h3></legend>


<!--- table -->
<table style="width:100%; margin:auto;" class="table table-hover table-striped" id="example">

<thead style="text-align:center;">

<tr>
<th style="text-align:center; width:200px;">Image</th>
<th style="text-align:center; width:200px;">name</th>
<th style="text-align:center; width:200px;">company</th>
<th style="text-align:center; width:200px;">address</th>
<th style="text-align:center; width:200px;">contact</th>
<th style="text-align:center; width:200px;">country</th>
<th style="text-align:center; width:200px;">city</th>
<th style="text-align:center; width:200px;">date added</th>
<th style="text-align:center; width:200px;">location</th>

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