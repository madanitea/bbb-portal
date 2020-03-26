<?php
	require "config.php";
	$id = $_GET['id'];
	if($_GET['apa']="record"){
		$query = mysqli_query($connection,"DELETE FROM data_record WHERE id='$id'");
		header("location:/record.php");
	elseif($_GET['apa']="room"){
		$query = mysqli_query($connection,"DELETE FROM data_room WHERE id='$id'");
		header("location:/admin.php");
	}
?>