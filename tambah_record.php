<?php
	require "config.php";

	$nama = $_POST['nama_record'];
	$tanggal = $_POST['tanggal'];
	$jam = $_POST['jam'];
	$url = $_POST['url'];

	if($nama != NULL AND $tanggal != NULL AND $jam != NULL AND $url != NULL){
		$query = mysqli_query($connection, "SELECT no_urut FROM data_record order by no_urut desc");
		while ($data = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
			$no_lama = $data['no_urut'];
			$no_baru = $no_lama+1;
			$kuery = "UPDATE data_record SET no_urut='$no_baru' WHERE no_urut='$no_lama'";
			$bacot = mysqli_query($connection, $kuery);
		}

		$waktu_record = $tanggal." ".$jam;
		$query="INSERT INTO data_record(nama_record,waktu_record,url,no_urut) VALUES('$nama','$waktu_record','$url','1')";
		$query=mysqli_query($connection, $query);
		if($query) {
			header("location:/record.php");
		}else {
			echo "<br><br>gagal";
		}
	}
?>