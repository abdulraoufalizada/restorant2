<?php include("header.php") ?>

<?php
$conn=mysqli_connect("localhost","root","","recip_app");
$id = $_GET["id"];
$query="SELECT * from food";
$result=mysqli_query($conn,$query); 
if(isset($_POST['save'])){
	
	$name = $_POST['name'];
	$des = $_POST['des'];
	$f_name=$_POST['food_name'];
		

    $folder="img/";
 	$path=$folder.$_FILES["picture"]["name"];
 	$source=move_uploaded_file($_FILES["picture"]["tmp_name"],$path);
 	
	$sql= "INSERT INTO step values (null,'$name','$des','$path','$id')";
	
	$q1=mysqli_query($conn, $sql);
	
     if($q1){

					header("location:step_index.php?f_id=$id");
				}
				else{
					echo "Error inserting record";
					
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
       <form method="post" action="" enctype="multipart/form-data">
          step: <input type="text"  class="form-control" name="name"> <br>
          des: <input type="text"  class="form-control" name="des"><br>
         Picture: <input type="file"  class="form-control" name="picture"><br>
        <!-- <label>Food-name</label>
						<select name="food_name" class="form-control">							
							<?php while($r=mysqli_fetch_assoc($result)) {?>
							<option value="<?php echo $r['fd_id'] ?>"><?php echo $r['name'] ?></option>		
							<?php } ?>
						</select><br> -->
            <button type="submit" class="btn btn-primary btn-block" name="save"> Save</button>

            </form>
	      </div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>


<?php include("footer.php") ?>
