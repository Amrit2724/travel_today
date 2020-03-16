<?php
include "adminheader.php";
$email = $_POST['email'];
$oldpassword = $_POST['oldpassword'];
$newpassword = $_POST['newpassword'];

$s = "select * from user where email='$email'";
$result = mysqli_query($conn, $s);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    if ($row['password'] == $oldpassword) {
        $sql = "update user set password='$newpassword' where email='$email'";
        mysqli_query($conn, $sql);
        header("Location:changeUserPassword.php?er=0");
    }
    else{
        header("Location:changeUserPassword.php?er=1");
    }
}
