<?php
    require "config.php";
    $room = $_POST['room_name'];
    $password = $_POST['password'];

    $cari = mysqli_query($connection, "SELECT * FROM data_room WHERE nama_room='$room' AND password='$password'");
    $cek = mysqli_num_rows($cari);
    if($cek > 0){
        $url = mysqli_query($connection, "SELECT url FROM data_room WHERE nama_room='$room' AND password='$password'");
        $get_url = mysqli_fetch_array($url);
        //echo $get_url['url'];
        header("Location:".$get_url['url']);
    }
    else{
        header("location:http://vicon.smkn1-cmi.sch.id/?msg=error");
    }
?>
