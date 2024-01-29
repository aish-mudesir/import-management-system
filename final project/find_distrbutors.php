<?php
// view distrbutors information
include_once 'header.php';
include_once 'fun_distrbutors.php';
$distrbutors = new distrbutors();
?>
<title>Find Distrbutors</title>

<div id="content">

<div class="row-fluid">
<div class="span12">
<div class="hero-unit-3">
<legend><h3><center>Find distrbutors from the List</center></h3></legend>


</div>

<!--- end modal -->

<!--- table -->
<table style="width:100%; margin:auto;" >

<thead style="text-align:center;">

<tr>
<th style="text-align:center; width:200px;">Image</th>
<th style="text-align:center; width:200px;">Name</th>
<th style="text-align:center; width:200px;">State</th>
<th style="text-align:center; width:200px;">Country</th>
<th style="text-align:center; width:200px;">Website</th> 

</tr>

</thead>
<tbody>




<tr>
<td style="text-align:center; word-break:break-all; width:200px;"> <img src="images/mere.png" width="100px" height="100px"></td>
<td style="text-align:center; word-break:break-all; width:200px;"> Merkato</td>
<td style="text-align:center; word-break:break-all; width:200px;"> Addis Ababa</td>
<td style="text-align:center; word-break:break-all; width:200px;"> Ethiopia</td>
<td  style="text-align:center; word-break:break-all; width:200px;"> <a href="http://www.2merkato.com">Vist site</a></td>
</tr>


</table>



</center>
</body>
</html>