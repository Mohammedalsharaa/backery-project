<html>
<head><link rel="stylesheet" type="text/css" href="css/login.css"></head>
<style >
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
$conn = mysql_connect($server, $user, $pass);

 $db=mysql_select_db("bakery",$conn);
 $sql="select * from baker";
$result = mysql_query($sql, $conn) ;

$num = mysql_num_rows($result);
include'navD.php';
	
echo("<center>");


while ($arr = mysql_fetch_array($result)) {
  

 echo("<img style='padding-top:30px;' src='$arr[5]'>");
 echo("<br>");
echo("<br>");
echo("<br>");
echo("<form action='edit.php?id=$arr[0]' method='POST'>");
echo("</table>");
echo("<p><input type='text' name='name' style='padding-top:-20px;box-shadow: 0 0 50px 190px rgba(20,20, 20, 0.04);' placeholder='$arr[1]'></p>");
echo("<p><input type='text' name='type' style='padding-top:-20px;' placeholder='$arr[2]'></p>");
echo("<p><input type='text' name='dec' style='padding-top:-20px;' placeholder='$arr[3]'></p>");
echo("<p><input type='text' name='price' style='padding-top:-20px;' placeholder='$arr[4]$'></p>");
echo("<button type='submit' class='submit' style='margin:auto;' >Edit</button>");

echo("</form>");
}
}
else{
	echo "only for admins !";
}
?>
</html>