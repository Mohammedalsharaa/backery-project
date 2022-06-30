<style>
body{
  background-color: rgba(235, 174, 17, 1);
}
</style>
 <?php
 /* connection test */
$server="localhost";
$user="root";
$pass="";
$conn = mysql_connect($server, $user, $pass);

 $db=mysql_select_db("bakery",$conn);


if(isset($_POST['delete']) && isset($_POST['id'])){
	$id=$_POST['id'];

$sql = "delete from baker where idb=$id";
 if (mysql_query($sql, $conn)) {

     echo "Item Info Has Been Deleted Form The Database!";

 } else {

     echo (mysql_error());

 }
  echo("<br><a href=index.php>Back To Home</a>");
 
}
?>
 <meta http-equiv="refresh" content="2;URL=http://localhost:82/PHP/BM/bakery/delete.php">



