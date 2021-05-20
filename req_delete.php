<?php include('connection.php') ?>

<?php 

  if(isset($_GET['id'])){

  $id=$_GET['id'];

  $query="DELETE FROM requirment WHERE id=$id";    
  $result=mysqli_query($conn,$query);
  
  if($result) {
     header("location:req_index.php");
    //echo "ok";
  }else{
    // header("location:fd_delete.php");
    echo "NO";
  }

   }


 ?>