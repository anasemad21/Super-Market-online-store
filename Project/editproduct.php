<?php
include "db.php";
$id=$_GET["ID"];
$name=$_GET["name"];
$price=$_GET["price"];
$catname=$_GET["category"];
$supname=$_GET["supplier"];
$sql="SELECT*FROM product WHERE ID='".$id."'";
$product=$db->query($sql)->Fetch();
?>
<html><head>
</head>
<body>
<form action="updateproduct.php" method="post">
<span>name:</span> <br>
<input type ="hidden" name="ID" value="<?php print $id;?>"> <br>
<input type="text" name="name"  value="<?php print $product["name"];?>"> <br>
    <span>price:</span> <br>
    <input type="text" name="price"  value="<?php print $product["price"];?>"> <br>
    <span>category:</span> <br>
    <select>name="category">
      <option value="">-select-</option>
          <?php
          $sql="SELECT *FROM  categories";
              $data=$db->query($sql)->fetchAll();
          foreach($data as $catname){
              if($catname["ID"]==$product["category"]){
              print"<option value='".$catname["ID"]."' selected>".$catname["name"]."</option>";}
        
        else {
              print"<option value='".$catname["ID"]."'>".$catname["name"]."</option>";
        }
          }
        ?>
          
              </select> <br>
    <span>supplier:</span> <br> 
    
    <input type="text" name="supplier"  value="<?php print $data["supplier"];?>"> <br>
<input type="submit" value="send data">
</form>
</body>
</html>