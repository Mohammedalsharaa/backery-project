<!DOCTYPE html>
<head>
    <style>
body{
  background-color: rgba(235, 174, 17, 1);
}
</style>
  </head>
  
<?php include 'NavM.php' ?>
 <link rel="stylesheet" type="text/css" href="css/form-register.css">


 <body>
    <div class='bold-line'></div>
<div class='container'>
  <div class='window'>
    <div class='overlay'></div>
    <div class='content'>
       <form  action="register.php" method="post" name="contact" id="contact">
      <div class='welcome'>SignUp !</div>
      <div class='subtitle'>We're almost done. Before using our services you need to create an account.</div>
      <div class='input-fields'>
       
        <input type='text' placeholder='Username' class='input-line full-width' name="fn" required=""></input>
        <input type='email' placeholder='Email' class='input-line full-width'name="email" required=""></input>
        <input type='password' placeholder='Password' class='input-line full-width' name="pd" required=""></input>
        <input type='password' placeholder='Confirm Password' class='input-line full-width' name="pd2" required=""></input>

      </div>
     
      <div><button type ="submit" name="submit" id="submit" class='ghost-round full-width'>Create Account</button></div>
    </div>
  </div>
</div>
 </body>
  
</script>
</html>