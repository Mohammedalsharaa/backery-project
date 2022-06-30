<style>
body{
  background-color: rgba(235, 174, 17, 1);
}
</style>
 <?php 
 session_start();
 if(!isset($_SESSION['id'])){
    echo("<p style='color:red;padding-top:50px;'>INVALID Login </p>");
  echo("<p style='color:pink;padding-top:50px;'><a href='login.php'>Login </a></p>");
  
}
else if($_SESSION['id']!=1){
  include 'NavU.php';
  include 'products.php';
}


?>

