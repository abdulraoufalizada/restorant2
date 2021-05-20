<?php include('connection.php') ?>
<?php 
    if(isset($_GET['id'])){

  $id=$_GET['id'];
  $select="DELETE from step where id='$id' ";
  $query=mysqli_query($conn,$select);
 // $result=mysqli_fetch_assoc($query2);
  if($query){
  //	header("location:step_index.php?f_id=$_GET['f_id']");
    header("location:step_index.php");
  }else{
  	header("location:step_delete.php");
  }

  }  ?>