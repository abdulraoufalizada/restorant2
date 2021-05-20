<?php include("../header.php") ?>

<?php include ('../connection.php') ?>

<?php
	if(isset($_POST['desc_name'])){	
	$description_name=$_POST['desc_name'];
	$query=mysqli_query($conn, "INSERT INTO category values(null,'$description_name')");
	if($query){
		header("location:category.php");
	}else{
		echo "NO";
	}
	}
 ?>

 	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="form-group">
					<form method="POST">
						<label>Name</label>
						<input type="text" class="form-control" name="desc_name">
						<button type="submit" class="btn btn-primary" value="save">Save</button>	
					</form>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
	
 
<?php include("../footer.php") ?>