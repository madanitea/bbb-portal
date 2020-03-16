<?php
    require "config.php";
    $select_room = mysqli_query($connection, "SELECT nama_room FROM data_room");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login Admin ViCon</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
</head>

<body>

    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder">
            </div>
            <form action="login_proses.php" method="POST">
                <h2 class="text-center"><strong>Login ViCon Admin</strong></h2>
                <div class="form-group">
                    <input type="text" name="username" class="form-control" autocomplete="off">
                </div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color: rgb(57,73,171);">Join</button></div>
            </form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>