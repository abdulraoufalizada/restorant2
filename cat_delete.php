 <?php include('connection.php') ?>

<?php 

	if(isset($_GET['id'])){

	echo $cate_id=$_GET['id'];

	$query="DELETE FROM category WHERE id='$cate_id'";

	$result=mysqli_query($conn,$query);
	
	if($result) {
		header("location:cat_index.php");
	}else{
		header("location:cat_delete.php");
	}

	 }


 ?>