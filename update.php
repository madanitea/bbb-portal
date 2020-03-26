<?php
require "config.php";
	$id = $_POST['id'];
	if($_POST['apa']=="record"){
		$nama_record = $_POST['nama_record'];
		$tanggal = $_POST['tanggal'];
		$jam = $_POST['jam'];
		$waktu_record = $tanggal." ".$jam;
		$url = $_POST['url'];
		$update = mysqli_query($connection,"update data_record set nama_record='$nama_record', waktu_record='$waktu_record', url='$url' where id='$id'");
		header ("location:/record.php");
	}elseif($_GET['apa']="room"){
		$nama_room = $_POST['nama_room'];
		$password = $_POST['password'];
		$url = $_POST['url'];
		$update = mysqli_query($connection,"update data_room set nama_room='$nama_room', password='$password', url='$url' where id='$id'");
		header ("location:/admin.php");
	}
?>