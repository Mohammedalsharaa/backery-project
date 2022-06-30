<style>
body{
  background-color: rgba(235, 174, 17, 1);
}
</style>
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
if($sid>=1){
 $conn = mysql_connect($server, $user, $pass);
 $db=mysql_select_db("bakery",$conn);
 $pay = "SELECT SUM(total) from payment where idu='$sid'"; 

 $result1 = mysql_query($pay, $conn) ;
while($arr=mysql_fetch_array($result1)){
	$total=$arr[0];
  

}
if($total>0)
	echo("<label style='padding-top:50%; padding-left : 500px;swf_fontsize(50) margin:auto; color:#f36367;font-weight:bold;'>You have to pay = $total $</label>");
else
	echo("<p style='padding-top:300px;margin:auto;color:red;font-weight:bold;'>You Didn't Make Any purchase</p>");

}


?>
