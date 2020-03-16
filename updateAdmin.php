<?php
include "adminheader.php";

$email = $_POST['email'];
$fullname = $_POST['fullname'];
$type = $_POST['type'];
$sql="UPDATE `admin` SET `name`='$fullname',`type`='$type' WHERE `email`='$email'";
mysqli_query($conn,$sql);
header("Location:viewAdmin.php");

