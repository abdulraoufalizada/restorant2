<?php include("header.php") ?>
<?php include('connection.php') ?>
<?php  
if(isset($_GET["f_id"])){
$id = $_GET["f_id"];
//echo $id;exit;
$query="SELECT * from requirment Where f_id ='$id'";
$result=mysqli_query($conn,$query);
}

?>

<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <h1>Manage Requirment</h1>
    <hr>
    <a href="req_add.php?id=<?=$id ?>" class="btn btn-success">Add Requirment</a><br></br>
      <table class="table table-responsive table-bordered">
          <tr>
            <th>name</th>
            <th>description</th>
           
           <!--  <th>Food-name</th> -->
            <th>Actions</th>
          </tr> 
          <?php
            if(!empty($result))
           while($r = mysqli_fetch_assoc($result)) {
              
            ?>        
          <tr>
            <td><?php echo $r['name']?></td>
            <td><?php echo $r['description']?></td>
           
            

            <td>
              <a href="#?id=<?php echo $r['id']; ?>" class="btn btn-primary">Update</a>
<!--                <a href="step_delete.php?id=<?php echo $r['id']; ?>&& f_id=<?php echo $r['f_id'];  ?>" class="btn btn-danger">Delete</a> -->
                 <a href="req_delete.php?id=<?php echo $r['id']; ?>" class="btn btn-danger">Delete</a>
              
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
  
 