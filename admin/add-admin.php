
<?php include("partial/menu.php") ?>
<!-- Main Content Section Starts -->
<div class="main-content">
	
	 <div class="wrapper">
       <h1>Add Admin</h1>
       <br><br>
      <?php 
         if (isset($_SESSION["add"]))//checking whather the is Set or Not 
         {
           echo $_SESSION["add"];//Displaying Session Massege if Set
           unset($_SESSION["add"]);//Removing Session Massege
         }

        ?>

       <form action="" method="post">
         <table class="tbl-30">
            <tr>
              <td>Full Name:</td>
              <td><input type="text" name="full_name" placeholder="enter your name"></td>
            </tr>

            <tr>
              <td>Username:</td>
              <td><input type="text" name="username" placeholder=" your username"></td>
            </tr>

            <tr>
              <td>Password:</td>
              <td><input type="password" name="password" placeholder="enter your password"></td>
            </tr>
            <tr>
              <td colspan="2">
                <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
              </td>
            </tr>

         </table>
       </form>
   </div>
</div>

<?php include("partial/footer.php") ?>

<?php 
//Process the Value from forms and Save it in Database
//check whether the buttom is clicked or not

if(isset($_POST["submit"]))
  {
     //Button clicked
     //echo "Button clicked";
     //1-Get the Data from form
    $full_name=$_POST['full_name'];
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    
    // 2-SQL Query to Save the data into database
    $sql="INSERT INTO tbl_admin SET 
          full_name='$full_name',
          username='$username',
          password='$password'
          ";

    //3-Execute Query and Save data in Database
     $res= mysqli_query($conn,$sql) or die(mysqli_error());
    //4- Check whather the(Query is Executed) data is inserted or not and display appropraid massege
     if ($res==TRUE) {
      //data inserted
       //echo "ok";
      //Create a Session Varaible to Display
      $_SESSION["add"]="Admin Added Successfully";
      //Redirect Page to Manege Admin
      header("location:.SITEURL.'admin/manage-admin.php'");
     }else{
      //echo "not";
      //Create a Session Varaible to Display
      $_SESSION["add"]="Fallied to Add Admin";
      //Redirect Page to Add Admin
      header("location:.SITEURL.'admin/add-admin.php'");
     }
  }

 ?>
