<?php
require 'dbcon.php';
if(!empty($_SESSION["id"])){
  header("Location: index1.php");
}
if(isset($_POST["login"])){
  $email = $_POST["email"];
  $password = $_POST["password"];
  $result = mysqli_query($con, "SELECT * FROM users WHERE  email = '$email'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0)
  {
    if($password == $row['password'])
    {
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: index1.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}

if(isset($_POST['book']))
{
    $whereto= mysqli_real_escape_string($con,$_POST['whereto']);
    $days= mysqli_real_escape_string($con,$_POST['days']);
    $arrivals= mysqli_real_escape_string($con,$_POST['arrivals']);
    $leaving= mysqli_real_escape_string($con,$_POST['leaving']);

    $query = "INSERT INTO book(whereto,days,arrivals,leaving) VALUES
    ('$whereto','$days','$arrivals','$leaving')";

    $query_run = mysqli_query($con,$query);
    if($query_run)
    {
        $_SESSION['message'] = "data inserted Successfully";
        header("Location: book.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "data Not Created ";
        header("Location: book.php");
        exit(0);

    }
}

if(isset($_POST['submit']))
{
    $fullname= mysqli_real_escape_string($con,$_POST['fullname']);
    $email= mysqli_real_escape_string($con,$_POST['email']);
    $mobile= mysqli_real_escape_string($con,$_POST['mobile']);
    $subject= mysqli_real_escape_string($con,$_POST['subject']);
    $message= mysqli_real_escape_string($con,$_POST['message']);

    $query = "INSERT INTO enquiry(fullname,email,mobile,subject,message) VALUES
    ('$fullname','$email','$mobile','$subject','$message')";

    $query_run = mysqli_query($con,$query);
    if($query_run)
    {
        $_SESSION['message'] = "data inserted Successfully";
        header("Location: enquiry.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "data Not Created ";
        header("Location: enquiry.php");
        exit(0);

    }
}


if(isset($_POST["admin"])){
  $email = $_POST["email"];
  $password = $_POST["password"];
  $result = mysqli_query($con, "SELECT * FROM admin WHERE  email = '$email'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0)
  {
    if($password == $row['password'])
    {
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: admin/index.html");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}

?>