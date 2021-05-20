<?php include("connection.php") ?>
<?php 
   session_start();

  if (isset($_POST["username"])) {
   $user=$_POST["username"];
   $pass=$_POST["password"];

   /*$conn=mysqli_connect("localhost","root","","school");
   $sql="SELECT * from student where username='$user' and password='$pass'";
   $query=mysqli_query($conn,$sql);*/
/* $conn=mysqli_connect("localhost","root","","school");*/
 $sql= "SELECT * from login where name='$user' and password='$pass' ";
 $query=mysqli_query($conn,$sql);

   if (mysqli_num_rows($query)>0) {
     
      $_SESSION["u"]=$user;
      if ($_SESSION["u"]=="ali") {
         header("location:index.php");
      }
           
   }

   else{
      echo "wronng";
   }
  }
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
   
   <div class="col-md-4"></div>
   <div class="col-md-4">
   	<form method="post" class="form-group">
   		<div>
   			<label>Username</label>
   			<input type="text" name="username" class="form-control">
   		</div>
   		<div>
   			<label>Password</label>
   			<input type="password" name="password" class="form-control">
   		</div>
   		<div>
   			<label>Send</label>
   			<input type="submit" name="submit" value="Login" class="btn btn-success"><br>
   			
   		</div>
   	</form>
   </div>
   <div class="col-md-4"></div>

</body>
</html>