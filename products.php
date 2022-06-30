<html>
<head>     <link rel="stylesheet" type="text/css" href="css/login.css">
    <style>
body{
  background-color: rgba(235, 174, 17, 1);
}
</style>
</head>
<?php
$server="localhost";
$user="root";
$pass="";
$conn = mysql_connect($server, $user, $pass);

 $db=mysql_select_db("bakery",$conn);
 $sql="select * from baker ";
$result = mysql_query($sql, $conn) ;

$num = mysql_num_rows($result);
	

echo("<center>");

while ($arr = mysql_fetch_array($result)) {

  
echo("<img style='padding-top:30px;' src='$arr[5]'>");
echo("<br>");
echo("<br>");
echo("<br>");
echo("<p style='padding-top:-20px;box-shadow: 0 0 50px 190px rgba(20,20, 20, 0.04);'>$arr[1]</p>");
echo("<p style='padding-top:-20px;'>$arr[2]</p>");
echo("<p style='padding-top:-20px;'>$arr[3]</p>");
echo("<p style='padding-top:-20px;'>$arr[4] $</p>");
echo("<form action='cart.php?id=$arr[0]' method='post'>");
echo("<button type='submit' class='submit' style='margin:auto;'>Add Item</button>");
echo("</form>");
echo("<br>");


 }


echo("</center");


?>
</html>