
 

<!DOCTYPE html>
<title></title>
<head>
	<?php include'NavM.php'; ?>
    <link rel="stylesheet" type="text/css" href="css/login.css">
  <title>login</title>
</head>
<style>
body{
  background-color: rgba(235, 174, 17, 1);
}
</style>

<body>
  <?php
 if(isset($_POST['email'])&&isset($_POST['pd'])){
  

 $conn = mysql_connect("localhost", "root", '');

  mysql_select_db("bakery",$conn);

  $email=$_POST['email'];
  $pd=$_POST['pd'];
  
  $sql = "SELECT * FROM users where email='$email' and pass='$pd' ";

 $result = mysql_query($sql, $conn) ;

//  number of rows fetched
while($row=mysql_fetch_array($result)){
  $id=$row[0];
}

$num = mysql_num_rows($result);
//$arr = mysql_fetch_array($result);
if ($num==1){
  session_start();
  $_SESSION['id']=$id;

echo("<meta http-equiv='refresh' content='0;URL=http://localhost:82/PHP/BM/bakery/'>");
}
else{
    echo ("<h1 style='color:red;padding-top:50px;'>invalid information try again</h1>");
}
}

 ?>
  <script type="text/javascript">
  
    function val(){
      var E=document.getElementById("E").value;
      var pa=document.getElementById('pa').value;

      if (pa == ""|| E==''){
        alert("empty fieldset");
        return false;
      } 
    else {
      document.contact.Submit();
      return true;
     }
    }
    
              

    </script>
   


  <div class="main">
    <p class="sign" align="center">Signin</p>
    <form class="form1" name="contact" id="contact" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <input class="un " type="text" align="center" placeholder="example@example.com" name="email" tabindex="1" id="E"  autofocus>
      <input class="pass" type="password" align="center" placeholder="Your Password" name="pd" tabindex="2" id="pa" >
      <button onclick="return val()" class="submit" text-align="center"> Login</button>
      <p class="forgot" align="center"><a href="reg.php">Dont Have Account? Signup Now</p>
            
                
    </div>
     
</body>
</html>


