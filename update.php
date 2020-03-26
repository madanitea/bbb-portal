<?php
require "config.php";
	$id = $_POST['id'];
	$nama_room = $_POST['nama_room'];
	$password = $_POST['password'];
	$url = $_POST['url'];
	$update = mysqli_query($connection,"update data_room set nama_room='$nama_room', password='$password', url='$url' where id='$id'");
	header ("location:admin.php");
?>