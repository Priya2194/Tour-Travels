<?php
require 'dbcon.php';



?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <title> Tour & Travel agency </title>

        <link  rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
        <!----Font awesome cdn link---->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <!---Custom Css file link--->

        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>

        <!-- Header  section starts-->
    <header>   

        <div id="menu-bar" class="fas fa-bars"></div>

        <a href="#" class="logo"><span>T</span>ravel</a>

        <nav class="navbar">
        <a href="index.php">Home</a>
            <a href="Book.php">Book</a>
            <a href="packages.php">Packages</a>
            <a href="services.php">Services</a>
            <a href="gallery.php">Gallery</a>
            <a href="enquiry.php">Enquiry</a>
        </nav>

        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <i class="fas fa-user" id="login-btn"></i>
        </div>

        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here.....">
            <label for="search-bar" class="fas fa-search"></label>
        </form>
    </header>     
    <!-- Header section ends-->


    <!-- login from container -->
    <div class="login-form-container">

        <i class='fas fa-times-circle' id="form-close"></i>    
        
        <form action="">
            
            <h3>Login</h3>
            <input type="email" class="box" placeholder="enter your email">
            <input type="password" class="box" placeholder="enter your password">
            <input type="submit" value="login now" class="btn">
            <input type="checkbox" id="remember">
            <label for="remember">remember me</label>
            
            <p>don't have and account?<a href="register.php">register now</a></p>
        </form>
    </div>

    

    <!-- book section start -->
        <section class="register" id="register">

            <h1 class="heading">
                <span>a</span>
                <span>d</span>
                <span>m</span>
                <span>i</span>
                <span>n</span>
                               
            </h1>

            <div class="row">
                
                <form action="code.php" method="POST">
                    
                        
        
                        <div class="inputBox">
                            <h3>email </h3>
                            <input type="email" name="email" required placeholder="email">
                        </div>
        
                       
        
                        <div class="inputBox">
                            <h3>password </h3>
                            <input type="password" name="password" required placeholder="password">
                        </div>
        
                        
                    
                        
                        <input type="submit" class="btn" value="admin" name="admin" >    
                        
                    </form>
            </div>
        </section>
    <!-- book section end -->

    
    
                
   

        <!---Custom file js link--->
        <script src="js/script.js"></script>
            
    </body>
</html>
