<?php
$con = oci_connect("system", "liverpoolboss302", "localhost/XE");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

  <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
   
  </head>
  <body>
  



    <div class="header">
<h1>ADMIN </h1>
<h3><img src="admino.jpg" style="width: 50px; height:50px; " alt="">
 <?php
$con = oci_connect("system", "liverpoolboss302", "localhost/XE");

$username = $_POST['uname'];  

 echo $username;
?> 
 </h3>
    </div>
<div class="container">
 <a href="add.php"> <button class="btn btn1">ADD</button></a>
  <button class="btn btn2">REMOVE</button>
  <button class="btn btn1">UPDATE</button>
  <a href="login.php"><button class="btn btn4">SEARCH</button></a>
  
  <a href="report_query.php"><button class="btn btn4">REPORT</button></a>
</div>
  </body>
</html>
