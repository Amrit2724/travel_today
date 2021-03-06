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
include_once "adminheader.php";
$email = $_REQUEST['q'];
$sql = "select * from admin where email='$email'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Edit Admin</h1>
        </div>
    </div>
    <form action="updateAdmin.php" method="post">
        <div class="form-group row">
            <label for="username" class="col-md-2">Email</label>
            <div class="col-md-10">
                <input type="text" name="email" class="form-control"
                       readonly value="<?php echo $email ?>"
                       data-rule-required="true" data-rule-email="true"
                       id="username"
                       placeholder="email">
            </div>
        </div>
        <div class="form-group row">
            <label for="username" class="col-md-2">Name</label>
            <div class="col-md-10">
                <input type="text" name="fullname" class="form-control" data-rule-required="true" id="fullname"
                       placeholder="Username" value="<?php echo $row['name'] ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="username" class="col-md-2">Type</label>
            <div class="col-md-10">
                <select name="type" class="form-control" data-rule-required="true">
                    <option value="">--Choose--</option>
                    <option <?php if ($row['type'] == 'Admin') { ?>selected<?php } ?>>Admin</option>
                    <option <?php if ($row['type'] == 'Sub Admin') { ?>selected<?php } ?>>Sub Admin</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="username" class="col-md-2"></label>
            <div class="col-md-10">
                <input type="submit" value="Submit" class="btn btn-primary">
            </div>
        </div>
        <div class="form-group row">
            <label for="username" class="col-md-2"></label>
            <div class="col-md-10">
                <?php
                if (isset($_REQUEST['er'])) {
                    $val = $_REQUEST['er'];
                    if ($val == 0) {
                        ?>
                        <div class="alert alert-danger"><b>Fail! </b> Email already Exist
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
    </form>
</div>


</body>
</html><?php
