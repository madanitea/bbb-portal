<?php
    require "config.php";
    $select_room = mysqli_query($connection, "SELECT nama_room FROM data_room");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Join ViCon Room</title>
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/Registration-Form-with-Photo.css">
</head>

<body>
    <?php if (isset($_GET['msg'])) {
            if($_GET['msg'] == "error"){
                ?>
                    <div id="error" class="alert alert-danger alert-dismissible fade in show mr-3 mt-3 shadow" style="position: fixed; right: 0;">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <p><b>Password</b> atau <b>nama room</b> salah.</p>
                    </div>
                <?php
            };}; ?>

    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder">
            </div>
            <form action="redirect.php" method="POST">
                <h2 class="text-center"><strong>ViCon SMKN 1 Cimahi</strong></h2>
                <div class="form-group">
                    <select class="form-control" name="room_name">
                        <option>Pilih Room</option>
                        <?php
                            while ($datas = mysqli_fetch_array($select_room)) { ?>
                                <option value="<?php echo $datas['nama_room'];?>"><?php echo $datas['nama_room'];?></option>
                            <?php }
                        ?>
                    </select>
                </div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color: rgb(57,73,171);">Join</button></div>
            </form>
        </div>
    </div>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        
    $("#error").fadeTo(3000, 500).fadeOut(1000, function(){
    $("#error").remove(500);
});
    $("#error1").fadeTo(3000, 500).fadeOut(1000, function(){
    $("#error1").remove(500);
});
    $("#error2").fadeTo(3000, 500).fadeOut(2000, function(){
    $("#error2").remove(500)
});
    $("#sukses").fadeTo(3000, 500).fadeOut(2000, function(){
    $("#sukses").remove(500)
});
</script>
</body>

</html>
