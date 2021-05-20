<?php include('connection.php') ?>

<?php 

	if(isset($_GET['fd_id'])){

	$cat_id=$_GET['fd_id'];

	$query="DELETE FROM food WHERE fd_id='$cat_id'";		
	$result=mysqli_query($conn,$query);
	
	if($result) {
		 header("location:food_index.php");
		//echo "ok";
	}else{
		// header("location:fd_delete.php");
		echo "NO";
	}

	 }


 ?>