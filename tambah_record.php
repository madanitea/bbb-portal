<?php
	require "config.php";

	$nama = $_POST['nama_record'];
	$tanggal = $_POST['tanggal'];
	$jam = $_POST['jam'];
	$url = $_POST['url'];

	if($nama != NULL AND $tanggal != NULL AND $jam != NULL AND $url != NULL){
		$waktu_record = $tanggal." ".$jam;
		$query="INSERT INTO data_record(nama_record,waktu_record,url) VALUES('$nama','$waktu_record','$url')";
		$query=mysqli_query($connection, $query);
		if($query) {
			header("location:record.php");
		}else {
			echo "<br><br>gagal";
		}
	}
?>