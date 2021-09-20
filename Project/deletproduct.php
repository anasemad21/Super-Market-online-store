<?php
include "db.php";
$id=$_GET["ID"];
/*
$name=$_GET["name"];
$price=$_GET["price"];
$category=$_GET["category"];
$supplier=$_GET["supplier"];*/
$sql="DELETE FROM product WHERE ID='".$id."'";
if($db->exec($sql)){
	header("location:products.php?done=1");
}
else{header("location:products.php?done=0");
}

