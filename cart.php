<?php
$server="localhost";
$user="root";
$pass="";
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


$sid=$_SESSION['id'];
$id=$_GET['id'];
if($sid>=1){
 $conn = mysql_connect($server, $user, $pass);
 $db=mysql_select_db("bakery",$conn);
 $baker= "SELECT  * from baker where idb='$id'"; 

 $result1 = mysql_query($baker, $conn) ;
while($arr=mysql_fetch_array($result1)){
  $total=$arr[4];

}



 $pay = "INSERT INTO payment VALUES ('','$sid','$id','$total')"; 

 $result2 = mysql_query($pay, $conn) ;
 if ($result2){
 	echo ("<h1 style='color:green;padding-top:600px;margin:auto;'>Sucessfully</h1>");
 	echo ("<meta http-equiv='refresh' content='2;URL=http://localhost:82/PHP/BM/bakery/product.php'>");
 }
 else{
 	echo "You Must Try Again !!!!";
 		echo ("<meta http-equiv='refresh' content='3;URL=http://localhost:82/PHP/BM/bakery/login.php'>");
 }
}
else{
	echo ("<a href='login.php'>You Must Log in</a>");

}





?>
