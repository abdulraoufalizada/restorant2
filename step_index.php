<?php include("header.php") ?>
<?php include('connection.php') ?>
<?php  
if (isset($_GET["f_id"])) {
  # code...

$id = $_GET["f_id"];
//echo $id;exit;
$query="SELECT * from step Where f_id = $id";
$result=mysqli_query($conn,$query);

}
?>

<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
		<h1>Manage step</h1>
		<hr>
		<a href="step_add.php?id=<?=$id ?>" class="btn btn-success">Add step</a><br></br>
			<table class="table table-responsive table-bordered">
          <tr>
            <th>name</th>
            <th>description</th>
            <th>image</th>
           <!--  <th>Food-name</th> -->
            <th>Actions</th>
          </tr> 
          <?php 
          if(!empty($result))
          while($r = mysqli_fetch_assoc($result)) {
              
            ?>        
          <tr>
            <td><?php echo $r['s_name']?></td>
            <td><?php echo $r['des_step']?></td>
            <td><img src="<?php echo $r['image']?>" id="profile"></td>
           <!--  <td><?php echo $r['name']?></td> -->
            

            <td>
              <a href="step_update.php?id=<?php echo $r['id']; ?>" class="btn btn-primary">Update</a>
              <a href="step_delete.php?id=<?php echo $r['id']; ?>" class="btn btn-danger">Delete</a>
              
            </td>
          </tr>
          <?php } ?>
              
        </table>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>


<?php include("footer.php") ?>

<style type="text/css">
	
	#profile{
		width: 60px;
		height: 60px;
	}
</style>