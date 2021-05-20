  <?php include("header.php") ?>
 <?php include('connection.php') ?>
 <?php 
    if(isset($_GET['fd_id'])){

  $id=$_GET['fd_id'];
  $sql="SELECT *from category";
  $sql1=mysqli_query($conn,$sql);
  $select="SELECT * from food where fd_id='$id'";
  $query2=mysqli_query($conn,$select);
  $r=mysqli_fetch_assoc($query2); 

  }
  if (isset($_POST['name'])) {
    $name=$_POST['name'];
    $desc=$_POST['description'];
    $t_need=$_POST['time_needed'];
    $rank=$_POST['ranking'];

$img=$_POST["picture"]["name"];
      //$folder="img/";
  $path=$folder.basename($_FILES["picture"]["name"]);
  if(move_uploaded_file($_FILES["picture"]["tmp_name"],$path)){

  }else{
    echo "imge error";
  }


  
  $sql_update="UPDATE food set name='$name',picture='$img',description='$desc',time_needed='$t_need',ranking='$rank' where fd_id='$id'";
  $update_query=mysqli_query($conn,$sql_update);
  if($update_query){
    header("location:food_index.php");
  }else{
    header("location:fd_update.php");
  }
}
  ?>
  <div class="container">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
      <h1>Register New Food</h1>
      <hr>
        <div class="form-group">
          <form method="POST">
          
            <label>Category Name</label>
            <select class="form-control" name="cate_name">
              <?php while($re=mysqli_fetch_assoc($sql1)) {?>
              <option value="<?php echo $re['id'] ?>"><?php echo $re['c_name'] ?>></option>    
              <?php } ?>
            </select>
            <label>Food Name</label>
            <input type="text" class="form-control" name="name" value="<?php echo $r['name']; ?>">
            <label>Food Picture</label>
            <input type="file" class="form-control" name="picture" value="<?php echo $r['picture']; ?>">
            <label>Description</label>
            <input type="text" class="form-control" name="description" value="<?php echo $r['description']; ?>">
            <label>Time Needed</label>
            <input type="text" class="form-control" name="time_needed" value="<?php echo $r['time_needed']; ?>">
            <label>Ranking</label>
            <input type="text" class="form-control" name="ranking"value="<?php echo $r['ranking']; ?>"><br>
            <button type="submit" class="btn btn-primary btn-block" value="save" name="save">Save</button>  
          </form>
        </div>
      </div>
      <div class="col-md-4"></div>
    </div>
  </div>

 <?php include("footer.php") ?>