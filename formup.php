<html>
<head>
	       <link rel="stylesheet" type="text/css" href="css/login.css">
<style>
body{
  background-color: rgba(235, 174, 17, 1);
}
</style>
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

<form method="POST" action="upload.php" enctype="multipart/form-data">
	
	<p class="jj">Item Name :</p>
	 <input type="text" name="namec" class="jj"  required autofocus>
	 	<br>
	

	 <br>

		<p class="jj">Item Type :</p>
	 <input type="text" name="typec" class="jj"   required> <br>
	 <br>
	
	<p class="jj">Item Description :</p>

	   <input type="text" name="desc" class="jj" required><br>
	   <br>
	<br>
	<p class="jj">Item Price :</p>
	
	    <input type="text" name="pri" class="jj"  required><br>
	<br>
	<br>

      <input class="jj" type="file" name="img" value="Choose img" ><br>

<br>
	<br>
  <button type="submit" name="add"  class="submit" style="margin: auto">Add Item</button>
  <br>
 

</form>


<br>
<br>
     
</body>
</html>