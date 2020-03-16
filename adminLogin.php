<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include_once "headerfiles.php";
    ?>
</head>
<body>
<?php
include_once "publicheader.php";
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Admin Login</h1>
        </div>
    </div>
    <form action="checkadminlogin.php" method="post">
        <div class="form-group row">
            <label for="username" class="col-md-2">Email</label>
            <div class="col-md-10">
                <input type="text" name="email" class="form-control" data-rule-required="true" data-rule-email="true"
                       id="username"
                       placeholder="email">
            </div>
        </div>


        <div class="form-group row">
            <label for="username" class="col-md-2">Password</label>
            <div class="col-md-10">
                <input type="password" name="password" class="form-control" data-rule-required="true" id="password"
                       placeholder="password">
            </div>
        </div>


        <div class="form-group row">
            <label for="username" class="col-md-2"></label>
            <div class="col-md-10">
                <input type="submit" class="btn btn-primary">
            </div>
        </div>
    </form>
    <div class="form-group row">
        <label for="email" class="col-md-2"></label>
        <div class="col-md-10">
            <?php
            if (isset($_REQUEST['q'])) {
                $val = $_REQUEST['q'];
                if ($val == 0) {
                    ?>
                    <div class="alert alert-danger"><b>Fail! </b>Invalid Credentials
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>
                    <?php
                } elseif ($val == 1) {
                    ?>
                    <div class="alert alert-success"><b>Success! </b> Admin added Successfully
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>