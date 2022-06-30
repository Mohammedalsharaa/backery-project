<!DOCTYPE html>
<html lang="en">
  <head>
        <link rel="stylesheet" type="text/css" href="css/Style.css">
<style>
body{
  background-color: rgba(235, 174, 17, 1);
}
</style>
    <title>Bakery</title>
  </head>
     <?php
 session_start();
 if(!isset($_SESSION['id'])){
include'NavM.php';
}
else if($_SESSION['id']!=1){
  include 'NavU.php';
}
else if($_SESSION['id']==1){
  include 'NavD.php';
}
 ?>
   <body>
    <h1 style="text=100 ; padding-left: 1%;">welcom to our backery</h1>
   <img src="img2.png" style="width:auto ; padding-left: 25%;">
  </body>
</html>
