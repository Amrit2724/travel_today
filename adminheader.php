<?php
include "connection.php";
session_start();
if (!isset($_SESSION["username"])) {
    header("location:adminlogin.php");
} else {
    $email = $_SESSION["username"];
}
?>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
        <a href="#" class="navbar-brand">Admin</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mymenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mymenu">
            <ul class="nav navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">Home</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Admin</a>
                    <div class="dropdown-menu">
                        <a href="admin.php" class="dropdown-item">Add </a>
                        <a href="viewAdmin.php" class="dropdown-item">View</a>

                    </div>

                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Welcome, <?php echo $email; ?>
                        </a>
                    <div class="dropdown-menu">
                        <a href="changePassword.php" class="dropdown-item">Change Password </a>
                        <a href="logout.php" class="dropdown-item">Logout</a>

                    </div>

                </li>
            </ul>
        </div>


    </nav>
<?php
