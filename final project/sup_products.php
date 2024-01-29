
<?php 
include ('sup_header.php'); 

?>

<!DOCTYPE html>
<html>
<head>
    <title>welcome to import mangments system products</title>

    <link rel="stylesheet" href="css/dstyle.css" type="text/css" media="screen" charset="utf-8">    
<!--sa poip up-->
<link href="css/dfacebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="js/djquery.js" type="text/javascript"></script>
  <script src="js/dfacebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
</head>
<body>


 
  <div id="content">
<div class="grid_16" id="content">
    <!--  TITLE START  --> 
    <div class="clear">
    </div>
    <!--  TITLE END  -->    
    <!-- #PORTLETS START -->
    <div id="portlets">
    
    <!--  SECOND SORTABLE COLUMN END -->
    <div class="clear"></div>
    <!--THIS IS A WIDE PORTLET-->
        <div class="portlet">
     
            <label for="filter">Search</label> <input type="text" name="filter" value="" id="filter" />
            <a rel="facebox" href="addproducts.php">Add Product</a>
            </div>
            <div class="portlet-content nopadding">
            <form action="" method="post">
            
                    <table cellpadding="1" cellspacing="1" id="resultTable">
                        <thead>
                            <tr>
                                <th  style="border-left: 1px solid #C1DAD7"> Type </th>
                                <th> Rate </th>
                                <th> Desciption </th>
                                <th> Image </th>
                                <th> Action </th>
                                <th>state</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            include('distrbutors/connect.php');
                            $result = mysql_query("SELECT * FROM product where user = '2'");
                            while($row = mysql_fetch_array($result))
                                {
                            echo '<tr class="record">';
                             echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['name'].'</td>';
                                    echo '<td><div align="left">'.$row['price'].'</div></td>';
                                    echo '<td><div align="left">'.$row['description'].'</div></td>';
                        echo '<td><a rel="facebox" href="editproductimages.php?id='.$row['id'].'"><img src="distrbutors/img/products/'.$row['img'].'" width="80" height="50"></a></td>';
                                    echo '<td><div align="center"><a rel="facebox" href="editproductetailss.php?id='.$row['id'].'">edit</a> | <a href="#" id="'.$row['id'].'" class="delbutton" title="Click To Delete">delete</a></div></td>';
                                    echo '<td><div align="left">'.$row['states'].'</div></td>';
                                    echo '</tr>';

                                }
                            ?> 
                        </tbody>
                    </table>
            </form>
            </div>
        </div>
     
    </div>
    
</body>


  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
          {

 $.ajax({
   type: "GET",
   url: "deleteproduct.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
        .animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>

</html>
