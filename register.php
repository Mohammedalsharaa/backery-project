    <?php

 if(isset($_POST['submit'])){

$fn=$_POST['fn'];
$email=$_POST['email'];
$pd=$_POST['pd'];




  $conn = mysql_connect("localhost", "root", '');


 mysql_select_db("bakery",$conn);

 $sql = "INSERT INTO users values ('', '$fn','$email','$pd')";


 if (mysql_query( $sql,$conn)) {

     echo "Welcome .$fn !";
     echo("<meta http-equiv='refresh' content='1;URL=http://localhost:82/PHP/BM/bakery/'>");

        }
        else {

     echo (mysql_error($conn));

 }
}

    ?>



