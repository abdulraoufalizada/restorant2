 <?php include("header.php") ?>
 <?php include('connection.php') ?>


<?php 

	if(isset($_GET['id'])){

	$id=$_GET['id'];
	$select="SELECT * from category where id='$id' ";
	$query2=mysqli_query($conn,$select);
	$re=mysqli_fetch_assoc($query2);
	}
	if(isset($_POST["desc_name"])){
		$name=$_POST["desc_name"];

    $folder="img/";
    $path=$folder.basename($_FILES["photo"]["name"]);
     
     $source=move_uploaded_file($_FILES["photo"]["tmp_name"],$path);
		
		$sql="UPDATE category set c_name='$name' ,image='$path' where id='$id'";
		$result=mysqli_query($conn,$sql);
		if ($result) {
		  header("location:cat_index.php");
  }else{
    header("location:cat_update.php");
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
            <input type="text" class="form-control" name="desc_name"value="<?php echo $re['c_name']; ?>"><br></br>
            <label>Image</label>
            <input type="file" class="form-control" name="photo"><br></br>
            <button type="submit" class="btn btn-primary" value="Update">Update</button>  
          </form>
        </div>
      </div>
      <div class="col-md-4"></div>
    </div>
  </div>

 <?php include("footer.php") ?>