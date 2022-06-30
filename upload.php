<style>
body{
  background-color: rgba(235, 174, 17, 1);
}
</style>
<?php


if(isset($_POST['add'])){

 $namec=$_POST['namec'];
 $typec=$_POST['typec'];
 $desc=$_POST['desc'];
 $pri=$_POST['pri'];
 $file="store/".$_FILES['img']['name'];
$host = 'localhost';
$user = 'root';
$pass = '';

mysql_connect($host, $user, $pass);

mysql_select_db('bakery');

$sql="insert into baker values('','$namec','$typec','$desc','$pri','$file')";
$test=mysql_query($sql);
   if($test)
echo("<br>The Info Inserted Into Page Shop");

       
      
else{
	echo("<p>Error While Adding the product Into the table ");
	echo("<a href='fomup.php '>Try Agin </a>");
	echo("</p>");
}
    
    


 echo("<meta http-equiv='refresh' content='2;URL=http://localhost:82/PHP/BM/bakery/formup.php'>");




 }

?>