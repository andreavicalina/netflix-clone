<?php
	session_start();
	
	$koneksi = mysqli_connect('localhost', 'root', '', 'netflix', '3306');

	if($koneksi -> connect_error) {
		die ("Tidak ada koneksi ke database" . $connect -> connect_error);
	}
?>