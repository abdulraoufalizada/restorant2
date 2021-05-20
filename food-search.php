<?php include("header.php") ?>
<?php include("connection.php") ?>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <h2>Foods on Your Search <a href="#" class="text-white">"Momo"</a></h2>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>
            <?php 
           
            $search=$_["search"];
            $sql="SELECT *from food where name like '%search%'" ;
            $res=mysqli_query($conn,$sql);
            $count=mysqli_num_rows($res);

            if($count>0){

                while ($row=mysqli_fetch_assoc($res)) {
                    # code...
                   
                    // $id=$_POST['id'];
                    // $name=$_POST['name'];    
                    // $des=$_POST['description'];
                    // $time=$_POST['time_needed'];
                    // $rank=$_POST['ranking'];
                    // $c_id=$_POST['cate_name'];
                    // $image=$_POST['picture'];
                    ?>
                    <div class="food-menu-box">
                <div class="food-menu-img">
                      <?php 
                        if($row["picture"]==""){
                          echo "<div class='error'>image is not valiable.</div>";
                        }
                        else{
                            ?>
                            <img src="<?php echo $row["picture"]; ?>" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                            <?php

                        }
                    }
                       ?>
                    
                </div>

              <!--    <div class="food-menu-box">
        
                <div class="food-menu-img">
             <img src="<?php echo $r['picture']?>" class="img-responsive img-curve" id="profile">
              </div> -->

                <div class="food-menu-desc">

            <h4>Name:<?php echo  $row["name"] ?></h4>
           <p class="food-detail">
           <p>description:<?php echo $row["description"] ?></p>
                         
            <p>Cat_name:<?php echo $row['cate_name'] ?></p>
            <p>Time_needed:<?php echo $row['time_needed'] ?> minute</p>
       
            <p>Ranking:<?php echo $row['ranking'] ?></p>
            <br>
                     
                    
                </div>

           
              <a href="order.php?f_id=<?php echo $row['fd_id']; ?>" class="btn btn-primary">Show Requirment </a>
             <a href="order.php?f_id=<?php echo $row['fd_id']; ?>" class="btn btn-primary">Show Steps</a>
               
           </div> 
            </div>

                    <?php



                
            }else{
                echo "<div class='error'>food not found.</div>";
            }
             ?>

        

            <div class="clearfix"></div>

            

        </div>

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
<?php include("footer.php") ?>