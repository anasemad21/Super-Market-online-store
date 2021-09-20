<?php
include "db.php";
$id=$_GET["ID"];
$sql="SELECT*FROM categories WHERE ID='".$id."'";
$data=$db->query($sql)->Fetch();
?>
<html><head>
</head>
<body>
<form action="updatecategory.php" method="post">
<span>name:</span> <br>
<input type ="hidden" name="ID" value="<?php print $id;?>"> <br>
<input type="text" name="name"  value="<?php print $data["name"];?>"> <br>
<input type="submit" value="send data">
</form>
</body>

    