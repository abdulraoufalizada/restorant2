<?php include("header.php") ?>
<?php include('connection.php') ?>
<?php 

    if(isset($_GET['id'])){
    	$id=$_GET['id'];

    //echo $id;
  $query="SELECT * from food";
  $result=mysqli_query($conn,$query);

  $select="SELECT * from step where id='$id'";
    $query2=mysqli_query($conn,$select);
    $r=mysqli_fetch_assoc($query2); 
  }

   if (isset($_POST['save'])) {
  	
    $name=$_POST['step'];
  	$des=$_POST['description'];  
	  $imag=$_POST['photo'];		
	  $f_name=$_POST['food_name'];
    $sql_update="UPDATE step set s_name='$name',des_step='$des',image='$imag',f_id='$f_name' where id=  '$id'";
    $update_query=mysqli_query($conn,$sql_update);
    if($update_query){
      header("location:step_index.php");
    }else{
      header("location:step_update.php");
    }
  }

  ?> 
    <div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
			<h1>Register New Step</h1>
			<hr>
				<div class="form-group">
					<form method="POST" action="" enctype="multipart/form-data">
						<label>Step</label>
						<input type="text" class="form-control"name="step"value="<?php echo $r['s_name']; ?>">
						<label>Description</label>
						<!-- <input type="textarea" class="form-control" name="description"> -->
			            <textarea class="form-control" name="description">   <?php echo $r['des_step']; ?></textarea>
			            
						<label>Image</label>
						<td><input type="file" class="form-control" name="photo"  value="<?php echo $r['image'] ?>" ></td>
					
						
						<label>Food-name</label>
						<select name="food_name" class="form-control">							
							<?php while($r=mysqli_fetch_assoc($result)) {?>
							<option value="<?php echo $r['fd_id'] ?>"><?php echo $r['name'] ?></option>		
							<?php } ?>
						</select><br>
						    <button type="submit" class="btn btn-primary btn-block" name="save"> Save</button>	
					</form>
				</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
<?php include("footer.php") ?>



