<?php

include"db.php";
?>
<html>
<head>
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="codecss.css">
<!-- jQuery library -->
<script src="js/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="js/bootstrap.min.js"></script></head>
<body>
  <form action="saveproduct.php" method="post" id="form"> 
      <div class="panel-heading">
             <i class="fa fa-plus"></i>Add New product</div>
            <center>
               name:<br> <input type="text" name="name"></center> <br>
       <center>
               price:<br> <input type="text" name="price"></center> <br>
      <center>
               category:<br><input type="text" name="category">
     
      <select name="category">
          <option value="">-select-</option>
          <?php
          $sql="SELECT *FROM  categories";
              $data=$db->query($sql)->fetchAll();
          foreach($data as $categories){
              print"<option value='".$categories["ID"]."'>".$categories["name"]."</option>";}?>
          
          </select></center>
     <center>
               supplier:<br><input type="text" name="supplier"> 
     
     <select name="supplier">
         <option value="">-select-</option>
      <?php
          $sql="SELECT *FROM  suppliers";
              $data=$db->query($sql)->fetchAll();
          foreach($data as $suppliers){
              print"<option value='".$suppliers["ID"]."'>".$suppliers["name"]."</option>";}?>
          
         </select></center> <br> <br>
      <center><input type="submit" name="save"></center>
      
    
    
    </form>  
    
   






 </body>
</html>