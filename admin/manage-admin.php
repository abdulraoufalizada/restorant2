
<?php include("partial/menu.php") ?>
<!-- Main Content Section Starts -->
<div class="main-content">
	
	<div class="wrapper">
       <h1>Manage Admin</h1>
       <br>
       <?php 
         if (isset($_SESSION["add"])) {
           echo $_SESSION["add"];//Displaying Session Massege
           unset($_SESSION["add"]);//Removing Session Massege
         }

        ?>
        <br><br>

        <!-- Button to Add admin -->
        <a href="add-admin.php" class="btn-primary">Add Admin</a>
        <br><br>

        <table class="tbl-full">
          <tr>
            <th>S_N</th>
            <th>full name</th>
            <th>username</th>
            <th>Actions</th>
          </tr>
          <tr>
            <td>1</td>
            <td>abdulrauf</td>
            <td>rauf</td>
            <td>
              <a href="#" class="btn-secondary">Update action</a>
              <a href="#" class="btn-danger">Delete action</a>
              
            </td>
          </tr>

          <tr>
            <td>2</td>
            <td>abdulrauf</td>
            <td>rauf</td>
            <td>
            <a href="#" class="btn-secondary">Update action</a>
            <a href="#" class="btn-danger">Delete action</a>
            </td>
          </tr>

          <tr>
            <td>3</td>
            <td>abdulrauf</td>
            <td>rauf</td>
            <td>
            <a href="#" class="btn-secondary">Update action</a>
            <a href="#" class="btn-danger">Delete action</a>
            </td>
          </tr>
        </table>
    </div>
</div>
<!-- Main Content Section Ends -->

<?php include("partial/footer.php") ?>