<?php
$host = "localhost";
$user = "root";
$password = "";
$db_name = "bouygues";
$conn = mysqli_connect($host, $user, $password,$db_name);
 if(!$conn){
    die("could not connect : " . mysqli_error());
}?>