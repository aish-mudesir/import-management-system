<?php
// view suppliers information
include_once 'header.php';
include_once 'fun_suppliers.php';
$suppliers = new suppliers();
?>
<title>find-supplier</title>

<div id="content">

<div class="row-fluid">
<div class="span12">
<div class="hero-unit-3">
<legend><h3><center>Find suppliers from the List</center></h3></legend>


</div>

<!--- end modal -->

<!--- table -->
<table style="width:100%; margin:auto;" >

<thead style="text-align:center;">

<tr>
<th style="text-align:center; width:200px;">Photo</th>
<th style="text-align:center; width:200px;">Name</th>
<th style="text-align:center; width:200px;">State</th>
<th style="text-align:center; width:200px;">Country</th>
<th style="text-align:center; width:200px;">Website</th> 

</tr>

</thead>
<tbody>




<tr>
<td style="text-align:center; word-break:break-all; width:200px;"> <img src="images/dp-1.png" width="100px" height="100px"></td>
<td style="text-align:center; word-break:break-all; width:200px;"> Alibaba</td>
<td style="text-align:center; word-break:break-all; width:200px;"> Jinjin</td>
<td style="text-align:center; word-break:break-all; width:200px;"> China</td>
<td  style="text-align:center; word-break:break-all; width:200px;"> <a href="http://www.alibaba.com">www.alibaba.com</a> </td>
</tr>

</table>



</center>
</body>
</html>