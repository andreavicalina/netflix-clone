<?php
  include "../koneksi.php";

  $id = $_GET['id'];
  $id_cont = $_GET['id_cont'];

  if (empty($_SESSION['nama_user'])) {
    header ("Location: ../error.php");
    die;
  }

  $add = mysqli_query($koneksi, "INSERT INTO favorit(id_user, id_film) VALUES ('$id', '$id_cont')");
?>
	<script>
        alert("Film ditambahkan!");
        window.location.href="index.php"
    </script>
<?php
	header ("location: homepage.php?id=$id");
?>