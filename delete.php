

<html>

<head>
  <style>
body{
  background-color: rgba(235, 174, 17, 1);
}
</style>
	       <link rel="stylesheet" type="text/css" href="css/login.css">


</head>

<body>
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
	
	<center>


<form action="del.php" method="post" style="padding-top: 50px;">
<table >
<tr><td>ID: <td><input type="text" name="id"/></tr>

</table>
<br>

<button type="submit" value="Delete" name="delete"  class="submit" style="margin: auto">DELETE</button>

</form>
</center>
</body>


</html>