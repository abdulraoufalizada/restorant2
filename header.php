<?php 
session_start();
if (isset($_SESSION["u"])) {
  
}else{
    header("location:login.php");
}
  ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>food recipe Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/sty.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="js/script.js"></script>
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/logo.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="cat_index.php">Categories</a>
                    </li>
                    <li>
                        <a href="food_index.php">Foods</a>
                    </li>
                     <li>
                        <a href="logout.php">Log Out</a>
                    </li>
                    <!--  <li>
                        <a href="step_index.php">Step</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li> -->
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>