<html>
<head>
    
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- jQuery library -->
<script src="js/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="js/bootstrap.min.js"></script>
    
    </head>

</html>

<?php
include "db.php";
$sql="SELECT *FROM categories";
$data=$db->query($sql)->fetchAll();
print "<table class='table table-striped'><tr class='danger'><th>ID</th><th>name</th><th>options</th></tr>";
foreach ($data as $value) {
print "<tr><td>".$value["ID"]."</td><td>".$value["name"]."</td><td><a href='edit.php?ID=".$value["ID"]."'> <button class='btn btn-info btn'>Edit</button></a>
<a href='deletcat.php?ID=".$value["ID"]."'><button class='btn btn-primary btn'>Delete</button></a></td></tr>";
}
print "</table>";
?>







