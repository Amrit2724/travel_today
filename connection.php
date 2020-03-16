<?php
$conn = mysqli_connect("localhost", "root", NULL, "travel_today");
if (!$conn) {
    die("connection failed due to " . mysqli_connect_error());
}
