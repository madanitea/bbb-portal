<?php
	require "config.php";
	$nama = $_POST['nama_room'];
	$password = $_POST['password_room'];
	$url = $_POST['url'];

	if($nama != NULL AND $password != NULL AND $url != NULL){
		$query = mysqli_query($connection, "SELECT no_urut FROM data_room order by no_urut desc");
		while ($data = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
			$no_lama = $data['no_urut'];
			$no_baru = $no_lama+1;
			$kuery = "UPDATE data_room SET no_urut='$no_baru' WHERE no_urut='$no_lama'";
			$bacot = mysqli_query($connection, $kuery);
		}

		$query = mysqli_query($connection, "INSERT INTO data_room(nama_room,password,url,no_urut)VALUES('$nama','$password','$url','1')");
		if ($query) {
			header("location:/admin.php");
		}
	}
?>