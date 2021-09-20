<html>
<head>
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="codecss.css">
<!-- jQuery library -->
<script src="js/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="js/bootstrap.min.js"></script>
    
    </head>
</html>

<?php
session_start();
$name=$_SESSION["name"];
if($name=="")
{
    header("location:login.php");} 
?>
<html>
    <head>
     <style>
         #one{border: 2px solid black; height: 200%;
             margin: 0px;
            }
         #two{border: 2px solid black; padding-left: 0px;
         height: 200%;
         }
    </style>
        </head>
   <body> 
       <div class="row>">
    <div>
        <div id='one' class="col-md-2" >
          <center>  <a href='login.php'>login</a><br><br>
           <a href='categories.php'>categories</a> <br> <br> 
<a href='addcategory.php'>addcategory</a> <br><br>
<a href='suppliers.php'>suppliers</a> <br><br>
          <a href='addsuppliers.php'>addsuppliers</a> <br><br>
           <a href='products.php'>products</a> <br><br>
<a href='addproduct.php'>addproduct</a> <br><br>
            <a href='movement.php'>movement</a> <br><br></center>
        </div>
       
       <div id='two' class=col-md-10>
            <table class='table table-striped'>
                <tr style="background-color:darkblue ;">
            <th>name of product</th>
            <th>code of product</th>
            <th>price of product</th>
            <th>Quantity of product</th>
                </tr>
                <tr><th> lajjljcss </th>
                    <th>  dvdvldlv </th>
                    <th>  dv;dlvld </th>
                    <th>  mlldkv;kd;vk </th>
                </tr>
                <tr><th> lajjljcss </th>
                    <th>  dvdvldlv </th>
                    <th>  dv;dlvld </th>
                    <th>  mlldkv;kd;vk </th>
                </tr>
        <tr><th> lajjljcss </th>
                    <th>  dvdvldlv </th>
                    <th>  dv;dlvld </th>
                    <th>  mlldkv;kd;vk </th>
                </tr>
        <tr><th> lajjljcss </th>
                    <th>  dvdvldlv </th>
                    <th>  dv;dlvld </th>
                    <th>  mlldkv;kd;vk </th>
                </tr>
        <tr><th> lajjljcss </th>
                    <th>  dvdvldlv </th>
                    <th>  dv;dlvld </th>
                    <th>  mlldkv;kd;vk </th>
                </tr>
        <tr><th> lajjljcss </th>
                    <th>  dvdvldlv </th>
                    <th>  dv;dlvld </th>
                    <th>  mlldkv;kd;vk </th>
                </tr>
        <tr><th> lajjljcss </th>
                    <th>  dvdvldlv </th>
                    <th>  dv;dlvld </th>
                    <th>  mlldkv;kd;vk </th>
                </tr>
        <tr><th> lajjljcss </th>
                    <th>  dvdvldlv </th>
                    <th>  dv;dlvld </th>
                    <th>  mlldkv;kd;vk </th>
                </tr>
        <tr><th> lajjljcss </th>
                    <th>  dvdvldlv </th>
                    <th>  dv;dlvld </th>
                    <th>  mlldkv;kd;vk </th>
                </tr>
        <tr><th> lajjljcss </th>
                    <th>  dvdvldlv </th>
                    <th>  dv;dlvld </th>
                    <th>  mlldkv;kd;vk </th>
                </tr>
        <tr><th> lajjljcss </th>
                    <th>  dvdvldlv </th>
                    <th>  dv;dlvld </th>
                    <th>  mlldkv;kd;vk </th>
                </tr>
        <tr><th> lajjljcss </th>
                    <th>  dvdvldlv </th>
                    <th>  dv;dlvld </th>
                    <th>  mlldkv;kd;vk </th>
                </tr>
        <tr><th> lajjljcss </th>
                    <th>  dvdvldlv </th>
                    <th>  dv;dlvld </th>
                    <th>  mlldkv;kd;vk </th>
                </tr><tr><th> lajjljcss </th>
                    <th>  dvdvldlv </th>
                    <th>  dv;dlvld </th>
                    <th>  mlldkv;kd;vk </th>
                </tr>
            </table>
        
       </div>
       </div></div></body>

</html>