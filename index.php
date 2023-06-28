<?php
require 'dbcon.php';

if(isset($_POST["register"]))
{
  $name = $_POST["fullname"];  
  $email = $_POST["email"];
  $mobile = $_POST["mobile"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
 
  $duplicate = mysqli_query($con, "SELECT * FROM users WHERE fullname = '$name' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0)
  {
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else
  {
    if($password == $confirmpassword)
    {
      $query = "INSERT INTO users VALUES('','$name','$email','$mobile','$password')";
      mysqli_query($con, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else
    {
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
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
            <a href="#">Home</a>
            <a href="#">Book</a>
            <a href="#">Packages</a>
            <a href="#">Services</a>
            <a href="#">Gallery</a>
            <a href="#">Enquiry</a>
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
        
        <form action="code.php" method="POST">
            
            <h3>Login</h3>
            <input type="email" name="email" class="box" placeholder="enter your email">
            <input type="password" name="password" class="box" placeholder="enter your password">
            <input type="submit" value="login" name="login" class="btn">
            <input type="checkbox" id="remember">
            <label for="remember">remember me</label>
            <p>admin?<a href="admin.php">Admin</a></p>
            <p>don't have and account?<a href="register.php">register now</a></p>
        </form>
    </div>

    

    <!-- book section start -->
        <section class="register" id="register">

            <h1 class="heading">
                <span>w</span>
                <span>e</span>
                <span>l</span>
                <span class="space">-</span>
                <span>c</span>
                <span>o</span>
                <span>m</span>
                <span>e</span>                
            </h1>

            <div class="row">
                <div class="image">
                    <img src="images/tt.png" alt="">
                </div>
                
            </div>
        </section>
    <!-- book section end -->

    
    
                

        <!---Custom file js link--->
        <script src="js/script.js"></script>
    
    </body>
</html>