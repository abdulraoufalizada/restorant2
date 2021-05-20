<?php include("header.php") ?>

<?php include ('connection.php') ?>

<?php

	if(isset($_POST['desc_name'])){	
	$description_name=$_POST['desc_name'];
	$folder="img/";
	$path=$folder.basename($_FILES["photo"]["name"]);
     
     $source=move_uploaded_file($_FILES["photo"]["tmp_name"],$path);
 	
	$sql= "INSERT into category values (null,'$description_name','$path')";
	
	$ql1=mysqli_query($conn, $sql);
	
     if($ql1){

		header("location:cat_index.php");
	}else{
		header("location:cat_add.php");
	}


	
 }

	

	/*$sql1="SELECT *FROM student";
	$query1=mysqli_query($conn,$sql1);
	$r=mysqli_fetch_assoc($query1);*/
    
 ?>

 	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="form-group">
					<form method="POST" action="" enctype="multipart/form-data">
						<label>Name</label>
						<input type="text" class="form-control" name="desc_name"><br></br>
						<label>Image</label>
						<input type="file" class="form-control" name="photo"><br></br>
						<button type="submit" class="btn btn-primary" value="save">Save</button>	
					</form>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
	
	
 
<?php include("footer.php") ?>