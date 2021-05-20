<?php include("header.php") ?>

<?php include("connection.php") ?>

<?php 

$query="SELECT * FROM category";

$result=mysqli_query($conn,$query);

if(isset($_POST['save'])) {

	$id=$_POST['id'];
	$name=$_POST['name'];
	
	$des=$_POST['description'];
	$time=$_POST['time_needed'];
	$rank=$_POST['ranking'];
	$c_id=$_POST['cate_name'];

	$folder="img/";
 	$path=$folder.basename($_FILES["picture"]["name"]);
 	$source=move_uploaded_file($_FILES["picture"]["tmp_name"],$path);

	$insert_query="INSERT INTO food values(null,'$name','$path','$des','$c_id','$time','$rank')";

	$re=mysqli_query($conn,$insert_query);

	if($re) {
		header("location:food_index.php");
	}else{
		echo "Error";
	}
    
}



 ?>
  <div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
			<h1>Register New Food</h1>
			<hr>
				<div class="form-group">
					<form method="POST" enctype="multipart/form-data">
					
						<label>Category Name</label>
						<select class="form-control" name="cate_name">

							<?php while($r=mysqli_fetch_assoc($result)) {?>
							<option value="<?php echo $r['id'] ?>"><?php echo $r['c_name'] ?></option>		
							<?php } ?>
						</select>
						<label>Food Name</label>
						<input type="text" class="form-control" name="name">
						<label>Food Picture</label>
						<input type="file" class="form-control" name="picture">
						<label>Description</label>
						<input type="text" class="form-control" name="description">
						<label>Time Needed</label>
						<input type="text" class="form-control" name="time_needed">
						<label>Ranking</label>
						<input type="text" class="form-control" name="ranking"><br>
						<button type="submit" class="btn btn-primary btn-block" value="save" name="save">Save</button>	
					</form>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>



<?php include("footer.php") ?>