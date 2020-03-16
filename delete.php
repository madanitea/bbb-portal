<?php
	require "config.php";
	$id = $_GET['id'];

	$query = mysqli_query($connection,"DELETE FROM data_room WHERE id='$id'");
	header("location:/bigbluebutton/admin.php");
?>