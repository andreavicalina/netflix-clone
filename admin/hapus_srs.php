<?php 
	include '../koneksi.php';
	$id = $_GET['id'];
	$sql = "DELETE FROM series WHERE id_series = '$id'"; 

	$koneksi -> query($sql);
	header("location: tampil_srs.php");
?>