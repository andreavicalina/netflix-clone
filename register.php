<?php
	include "koneksi.php";
	$email = $_GET['email'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Netflix</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style>
		*{
		    margin: 0;
		    padding: 0;
		}
		body{
		    font-family: Arial, Helvetica, sans-serif;
		    background: #f5f5f1;
		}
		.just-table {
			text-align: left;
		}
		.table {
			height: 23rem;
		}
		.btn {
			background-color: #e50914;
			color: #ffffff;
		}
		.btn:hover {
			background-color: #b20909;
    		color: white;
		}
	</style>
</head>
<body>
	<br><br>
<div class="all">
	<section id="facilities">
		<div class="container">
			<div class="title">
				<center>
				<h1><b>Pilih Paket</b></h1>
				<h6>Tonton semua yang kamu mau. Bebas iklan.</h6>
				<h6>Rekomendasi hanya untukmu.</h6>
				<h6>Ubah atau batalkan paketmu kapan pun.</h6>
				</center>
				<br><br><br>
			</div>
			<div class="row">
				<div class="col-md-4 ">
					<div class="card text-center">
						<img src="images/ponsel.jpg" class="card-img-top">
						<div class="card-body">
							<h5 class="card-title">Dasar</h5>
							<table class="table">
								<tbody>
								    <tr>
									    <td class="just-table">Harga bulanan</td>
									    <td>Rp54.000</td>
									</tr>
									<tr>
									    <td class="just-table">Kualitas video</td>
									    <td>Baik</td>
									</tr>
									<tr>
									    <td class="just-table">Resolusi</td>
									    <td>480p</td>
									</tr>
									<tr>
									    <td class="just-table">Layar yang dapat kamu tonton secara bersamaan</td>
									    <td>1</td>
									</tr>
									<tr>
									    <td class="just-table">Perangkat yang dapat digunakan untuk menonton</td>
									    <td>Ponsel, tablet</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card text-center">
						<img src="images/standar.jpg" class="card-img-top">
						<div class="card-body">
							<h5 class="card-title">Standar</h5>
							<table class="table">
								<tbody>
								    <tr>
									    <td class="just-table">Harga bulanan</td>
									    <td>Rp153.000</td>
									</tr>
									<tr>
									    <td class="just-table">Kualitas video</td>
									    <td>Lebih baik</td>
									</tr>
									<tr>
									    <td class="just-table">Resolusi</td>
									    <td>1080p</td>
									</tr>
									<tr>
									    <td class="just-table">Layar yang dapat kamu tonton secara bersamaan</td>
									    <td>2</td>
									</tr>
									<tr>
									    <td class="just-table">Perangkat yang dapat digunakan untuk menonton</td>
									    <td>Ponsel, tablet</td>
									</tr>
								</tbody>
							</table>							
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card text-center">
						<img src="images/premium.jpg" class="card-img-top">
						<div class="card-body">
							<h5 class="card-title">Premium</h5>
							<table class="table">
								<tbody>
								    <tr>
									    <td class="just-table">Harga bulanan</td>
									    <td>Rp186.000</td>
									</tr>
									<tr>
									    <td class="just-table">Kualitas video</td>
									    <td>Terbaik</td>
									</tr>
									<tr>
									    <td class="just-table">Resolusi</td>
									    <td>4k+HDR</td>
									</tr>
									<tr>
									    <td class="just-table">Layar yang dapat kamu tonton secara bersamaan</td>
									    <td>4</td>
									</tr>
									<tr>
									    <td class="just-table">Perangkat yang dapat digunakan untuk menonton</td>
									    <td>Ponsel, tablet, komputer, TV</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<br><br><br>
				<small>Ketersediaan Full HD (1080p), Ultra HD (4K), dan HDR tergantung pada layanan internet dan kemampuan perangkatmu. Tidak semua konten tersedia dalam HD, Full HD, Ultra HD, atau HDR. Lihat Ketentuan Penggunaan untuk rincian selengkapnya.</small>
				<br><br><br><br>
                <a type="submit" class="btn btn-block" href="register2.php?email=<?=$email?>">Lanjut</a>
                <br><br><br><br>			
		</div>
	</section>
</div>
</body>
</html>