<?php
	require "config.php";
	$nama = $_POST['nama_room'];
	$password = $_POST['password_room'];
	$url = $_POST['url'];

	if($nama != NULL AND $password != NULL AND $url != NULL){
		$query = mysqli_query($connection, "INSERT INTO data_room(nama_room,password,url)VALUES('$nama','$password','$url')");
		if ($query) {
			header("location:admin.php");
		}
	}
?>