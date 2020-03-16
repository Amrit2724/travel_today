<?php
session_start();
include_once 'adminheader.php';

$email=$_POST["email"];
$password=$_POST["password"];
$sql="SELECT * FROM `user` WHERE email='$email' and password='$password'";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0){
    $_SESSION["user"]=$email;
    header("Location:user_home.php");
}
else{
    header("Location:userLogin.php?q=0");
}
