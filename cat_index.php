<?php include('header.php') ?>

<?php include('connection.php');

$query="SELECT * FROM Category";

$result=mysqli_query($conn,$query);

 ?>

<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
		<h1>Manage Category</h1>
		<hr>
		<a href="cat_add.php" class="btn btn-success">Add Product</a><br></br>
			<table class="table table-responsive table-bordered">
          <tr>
            <th>Categories</th>
             <th>Image</th>
            <th>Actions</th>   
          </tr>
            <?php while($r = mysqli_fetch_assoc($result)) {
              
            ?>
          <tr>
            <td><?php echo $r['c_name']?></td>
            <td><img src="<?php echo $r['image']?>" id="profile"></td>
            <?php echo $r['id'] ?>
            <td>
              <a href="cat_update.php?id=<?php echo $r['id'] ?>" class="btn btn-success">Update</a>
              
              <a href="cat_delete.php?id=<?php echo $r['id'] ?>" class="btn btn-danger">Delete</a>
            </td>
          </tr>
              <?php } ?>
        </table>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>


<?php include('footer.php') ?>

<style type="text/css">
  
  #profile{
    width: 60px;
    height: 60px;
  }
</style>