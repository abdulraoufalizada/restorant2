<?php include("header.php") ?>

<?php
$conn=mysqli_connect("localhost","root","","recip_app");
$id = $_GET["id"];
/*$query="SELECT * from requirment";
$result=mysqli_query($conn,$query); */
if(isset($_POST['save'])){
	
	$name = $_POST['name'];
	$des = $_POST['des'];
	
		

   
 	
	$sql= "INSERT INTO requirment values (null,'$name','$des','$id')";
	
	$q1=mysqli_query($conn, $sql);
	
     if($q1){

					header("location:req_index.php?f_id=$id");
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
          num: <input type="text"  class="form-control" name="name"> <br>
          des: <input type="text"  class="form-control" name="des"><br>
       
            <button type="submit" class="btn btn-primary btn-block" name="save"> Save</button>

            </form>
	      </div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>


<?php include("footer.php") ?>
