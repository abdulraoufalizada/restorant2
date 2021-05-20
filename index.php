
<?php include("header.php") ?>
<?php include('connection.php');?>
<?php  

$sql="SELECT * FROM Category";
$query=mysqli_query($conn,$sql);

$re=mysqli_fetch_assoc($query); 

$sql1="select food.*,  category.* from food, category where food.c_id = category.id";
$result=mysqli_query($conn,$sql1);

/*
//$query2="SELECT * from requirment where f_id=5";
$query2="SELECT * from requirment where f_id='id'";
$result1=mysqli_query($conn,$query2);
//$req=mysqli_fetch_assoc($result1);

*/

 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/sty.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
   
   
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">

            <form action="food-search.php" method="POST">    
                <input  type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Food Categories</h2>

          

            <?php while($r = mysqli_fetch_assoc($query)) {
              
            ?>
          
            <a href="#">
            <div class="box-3 float-container">
            
            
            <img src="<?php echo $r['image']?>?id=<?php echo $r['id'] ?>"class="img-responsive img-curve" >
          
               <h2 class="float-text text-white"><?php echo $r['c_name'] ?></h2>
           </div>
            </a>
            
          
              <?php } ?>     



            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->

    <!-- fOOD MEnu Section Starts Here -->

    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Details</h2>     

            
          
        
            <?php while($r = mysqli_fetch_assoc($result)) {
              
            ?>

          <div class="food-menu-box">
        
                <div class="food-menu-img">
             <img src="<?php echo $r['picture']?>" class="img-responsive img-curve" id="profile">
              </div>

                <div class="food-menu-desc">

            <h4>Name:<?php echo $r['name'] ?></h4>
           <p class="food-detail">
           <p>description:<?php echo $r['description'] ?></p>
                         
            <p>Cat_name:<?php echo $r['c_name'] ?></p>
            <p>Time_needed:<?php echo $r['time_needed'] ?> minute</p>
       
            <p>Ranking:<?php echo $r['ranking'] ?></p>
            <br>
                     
                    
                </div>

           
              <a href="order1.php?f_id=<?php echo $r['fd_id']; ?>" class="btn btn-primary">Show Requirment </a>
             <a href="order.php?f_id=<?php echo $r['fd_id']; ?>" class="btn btn-primary">Show Steps</a>
               
           </div> 
              
<?php }?>
                    

              <!--  <!--  <?php while($req=mysqli_fetch_assoc($result1)) { ?>
                <p><?php echo $req['name']?></p>
                <p><?php echo $req['description']?></p>
             
             <?php } ?> 
           

          
            
                
                  



           


            <div class="clearfix"></div>

            

        </div>

        <p class="text-center">
            <a href="#">See All Foods</a>
        </p>
    </section>
    <!-- fOOD Menu Section Ends Here -->

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
            <p>All rights reserved. Designed By <a href="#">Abdul Rauf Alizada</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->

</body>
</html>