<?php
include "db.php";
$id=$_GET["ID"];
$sql="DELETE FROM suppliers WHERE ID='".$id."'";
if($db->exec($sql)){
	header("location:suppliers.php?done=1");
}
else{header("location:suppliers.php?done=0");
}

