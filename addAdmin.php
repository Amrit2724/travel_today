<?php
include "adminheader.php";

$email = $_POST['email'];
$password = $_POST['password'];
$fullname = $_POST['fullname'];
$type = $_POST['type'];

$s = "select * from admin where email='$email'";
$result = mysqli_query($conn, $s);
if (mysqli_num_rows($result) > 0) {
    header("Location:admin.php?er=0");
} else {
    $sql = "INSERT INTO `admin`(`email`, `password`, `name`, `type`) 
VALUES ('$email','$password','$fullname','$type')";
    mysqli_query($conn, $sql);
    header("Location:admin.php?er=1");
}
