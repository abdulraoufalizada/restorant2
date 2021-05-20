<?php include("header.php") ?>
<?php include('connection.php') ?>
<?php 
// $query="SELECT food.id,food.name,food.description,food.time_needed,food.ranking,category.name from food join category on food.c_id=category.id";
$query="SELECT food.*,category.* from food join category on food.c_id=category.id";
$result=mysqli_query($conn,$query);
//$query1="SELECT * from food";
//$sql="SELECT * from food"
//$result1=mysqli_query($conn,$query1);
// $r=mysqli_fetch_assoc($result);
 ?>


<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-9">
		<h1>Manage Food</h1>
		<hr>
		<a href="food_add.php" class="btn btn-success">Add Food</a><br></br>
			<table class="table table-responsive table-bordered">
          <tr>
            <th>ID </th>
            <th>Name </th>
            <th>Food_pic</th>
            <th>Description</th>
            <th>Category-name</th>
            <th>Time-needed</th>
            <th>Show Steps</th>
            <th>Show Requirment</th>
            <th>Ranking</th>
            <th>Action</th>
          </tr>

           <?php
             if(!empty($result)) 
           while($r=mysqli_fetch_assoc($result)) { ?>
          <tr>
            <td><?php echo $r['fd_id'] ?></td>
            <td><?php echo $r['name'] ?></td>
            <td><img src="<?php echo $r['picture']?>" id="profile"></td>
            <td><?php echo $r['description'] ?></td>            
            <td><?php echo $r['c_name'] ?></td>
            <td><?php echo $r['time_needed'] ?></td>
            <td><a href="step_index.php?f_id= <?php echo $r['fd_id'] ?>">show steps</a></td>
            <td><a href="req_index.php?f_id= <?php echo $r['fd_id'] ?>">show requirment</a></td>
            <td><?php echo $r['ranking'] ?></td>
            <td>
              <a href="fd_update.php?fd_id=<?php echo $r['fd_id']; ?>" class="btn btn-primary">Update</a>
              <a href="fd_delete.php?fd_id=<?php echo $r['fd_id']; ?>" class="btn btn-danger">Delete</a>
              
            </td>
          </tr>
            <?php } ?>
        </table>
		</div>
		<div class="col-md-1"></div>
	</div>
</div>


<?php include("footer.php") ?>
<style type="text/css">
	
	#profile{
		width: 60px;
		height: 60px;
	}
</style>