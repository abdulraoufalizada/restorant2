<?php 
	$servename = "localhost";
	$username = "root";
	$password = "";
	$dbname = "food_order";
	$table = "tbl_catagory";
	
	$conn = mysqli_connect($servename, $username,"",$dbname);
	if(!$conn){
		die("Connection faile".mysqli_connect_error());
	}
	else{
		//echo"connected";
	}
	//geting data and file

	$sql = "SELECT tittle, image_name FROM ".$table;
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	  // output data of each row
	  while($row = mysqli_fetch_assoc($result)) {
	    echo $row["tittle"]."<br>";
	    echo"<img src=".$row["image_name"]." alt='HTML5 Icon' width='128' height='128'>";
	  }
	} else {
	  echo "0 results";
	}

	mysqli_close($conn);




 ?>