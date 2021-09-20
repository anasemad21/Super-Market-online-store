<?php
include "db.php";
$id=$_GET["ID"];
$sql="DELETE FROM categories WHERE ID='".$id."'";
if($db->exec($sql)){
	header("location:categories.php?done=1");
}
else{header("location:categories.php?done=0");
}


