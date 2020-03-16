<?php
session_start();
include_once 'adminheader.php';

$email=$_POST["email"];
$password=$_POST["password"];
$sql="SELECT * FROM `admin` WHERE email='$email' and password='$password'";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0){
    $_SESSION["username"]=$email;
    header("Location:admin_home.php");
}
else{
    header("Location:adminLogin.php?q=0");
}