<?php
include "connection.php";

$email = $_POST['email'];
$password = $_POST['password'];
$mobile = $_POST['mobile'];
$fullname = $_POST['fullname'];

$s = "select * from user where email='$email'";
$result = mysqli_query($conn, $s);
if (mysqli_num_rows($result) > 0) {
    header("Location:user.php?er=0");
} else {
    $sql = "INSERT INTO `user`(`email`, `password`, `name`, `type`) 
VALUES ('$email','$password','$mobile','$fullname')";
    mysqli_query($conn, $sql);
    header("Location:user.php?er=1");
}
