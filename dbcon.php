<?php

$username="root";
$password="";
$server="localhost";
$db='tts';

$con=mysqli_connect($server,$username,$password,$db);

if($con)
{
    echo "Connection Successful...";
}
else
{
    echo "No Connection";
}

?>