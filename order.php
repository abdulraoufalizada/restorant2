<?php include("header.php") ?>
    <!-- Navbar Section Ends Here -->
    <?php include('connection.php') ?>
    <?php    
    //$query="SELECT food.*,category.* from food join category on food.c_id=category.id";
   
   if (isset($_GET["f_id"])) {
  # code...

$id = $_GET["f_id"];
//echo $id;exit;
$query="SELECT * from step Where f_id = $id";
$result=mysqli_query($conn,$query);


$query1="SELECT *from food where fd_id=$id";
$result1=mysqli_query($conn,$query1);
}

    ?>

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search">
        <div class="container">
            
                <?php 
                      //  if(!empty($result))
                while($re = mysqli_fetch_assoc($result1)) {
              
               ?>
            <h2 class="text-center text-white">The Selection Food is:<br><?php echo $re['name'] ?></h2>

               <?php } ?>

           

            <form action="#" class="order">



                <?php while($r = mysqli_fetch_assoc($result)) {
              
               ?>  
                <fieldset>  
                             
    
                    <div class="food-menu-desc">
                       
                        <legend style="color:blue;"><?php echo $r['s_name']?></legend>
                       
                         <h3><?php echo $r['des_step']?></h3>

                        
                        
                    </div>
                      <div class="food-menu-img">
                    <img src="<?php echo $r['image']?>" id="profile">
                    </div>
                      

                </fieldset><br>
                <?php } ?>
                 
               

            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <!-- social Section Starts Here -->
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->
    <section class="footer">
        <div class="container text-center">
            <p>All rights reserved. Designed By <a href="#">Abdul Rauf</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->

</body>
</html>
<style type="text/css">
    
    #profile{
        width: 100px;
        height: 100px;
    }
</style>