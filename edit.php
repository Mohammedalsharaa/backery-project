<style>
body{
  background-color: rgba(235, 174, 17, 1);
}
</style>
<?php
session_start();
if($_SESSION['id']==1){
$server="localhost";
$user="root";
$pass="";


 include 'NavD.php';


$id=$_GET['id'];
$name=$_POST['name'];
$Dec=$_POST['dec'];
$price=$_POST['price'];
$type=$_POST['type'];




 $conn = mysql_connect($server, $user, $pass);
 $db=mysql_select_db("bakery",$conn);
 $bakery = "UPDATE baker
SET nameb = '$name', decription = '$Dec',price='$price', type='$type'
 where idb='$id'"; 

 $result1 = mysql_query($bakery, $conn) ;


if($result1)
 		echo ("<meta http-equiv='refresh' content='0;URL=http://localhost:82/PHP/BM/bakery/editproduct.php'>");
 	else{
 		echo ("<h1 style='padding-top:50px;color:red;'>NOT EDITED THERE WAS AN ERROR !!</h1>");
 	}
 
}
else{
	echo ("<a href='login.php'>only for admins </a>");

}





?>
