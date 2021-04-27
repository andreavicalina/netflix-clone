<?php  
include '../koneksi.php';


  if (empty($_SESSION['nama_adm'])) {
    header ("Location: ../error.php");
    die;
  }

?>
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="upl_style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d370445269.js" crossorigin="anonymous"></script>
    <style>
    	   .table {
    		width: 100%;
    		margin-bottom: 1rem;
    	color: #f5f1f1;
}
    </style>
 
  
	<title>Netflix</title>
</head>

<body>
<div class="container-fluid">
	<div class="bg">
    <nav class="navbar navbar-expand-lg">
        <img class="navbar-brand" src="../images/logo.png">     
        <div class="collapse navbar-collapse" id="navbarSupportedContent">         
            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-item mr-3">
                    <a class="nav-link" href="tampil_user.php" >Users</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link" href="tampil_film.php" >Movie</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link" href="tampil_srs.php" >TV series</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Upload
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="upl_film.php">Movie</a>
                        <a class="dropdown-item" href="upl_srs.php">TV series</a>
                    </div>
                </li>
            </ul>                
            <a class="btn my-2 my-sm-0" style="color: white;" href="../logout.php">Logout</a>
    </nav>
	<div class="container py-5">
		<table id="myTable" class="table">
			<thead>
				<tr>
					<th>No.</th>
					<th>Judul Film</th>
					<th>Tahun Rilis</th>
					<th>Batas Usia</th>
					<th>Genre</th>
					<th>Aksi</th>
				</tr>
			</thead>

					<?php $query = mysqli_query($koneksi, "SELECT * FROM series a, genre b, batas_usia c WHERE a.id_genre = b.id_genre AND a.id_batas_usia = c.id_batas_usia"); ?>
					<?php $no = 1;?>
					<?php foreach ($query as $pecah) : ?>
			<tbody>		
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $pecah['judul_srs']; ?></td>
					<td><?php echo $pecah['tahun_srs']; ?></td>
					<td><?php echo $pecah['batas_usia']; ?></td>
					<td><?php echo $pecah['genre']; ?></td>
					<td>
						<a class="text-white badge bg-warning" href="tambah_eps.php?id=<?=$pecah['id_series']?>"><i class="fas fa-plus"></i></a>
            			<a class="text-white badge bg-info" href="edit_srs.php?id=<?php echo $pecah['id_series']; ?>">edit</a>
            			<a class="text-white badge bg-danger" href="hapus_srs.php?id=<?php echo $pecah['id_series'];?>" onclick="return confirm('Apakah yakin ingin menghapus?')">hapus</a>
					</td>
				</tr>
			</tbody>
			<?php $no++; ?>
			<?php endforeach; ?>
		</table>
	</div>
        </div>
</div>

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
	</script>
	<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
	<script>
		$(document).ready(function () {
			$('#myTable').DataTable();
		});
	</script>
</body>

</html>