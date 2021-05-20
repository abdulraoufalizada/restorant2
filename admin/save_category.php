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
	$cat_name=$_POST["cat_name"];
	//echo $cat_name; 
	$folder="./image/";
 	$path=$folder.basename($_FILES["cat_image"]["name"]);

 	$type=pathinfo($path,PATHINFO_EXTENSION);

    
    if(file_exists($path)){
      echo "file already exists";
    }

    if($_FILES["cat_image"]["size"]>50000) {
    	//echo "file is bag";
    }

    if ($type !="jpg" and $type !="png" and $type !="pdf") {
    	echo "incorrect file type";
    }



    else{

 	if (move_uploaded_file($_FILES["cat_image"]["tmp_name"],$path)){
 		//echo "yes";
 	}else{
 		echo "No";
 	}


	}
 
	$sql = "INSERT INTO ".$table."(tittle, image_name) values('".$cat_name."','".$path."')";
	if(mysqli_query($conn,$sql)){
		echo"saved";
	}
	else{
		echo"Error:".mysqli_error($conn);
	}

	header('location:interface.php');

 ?>