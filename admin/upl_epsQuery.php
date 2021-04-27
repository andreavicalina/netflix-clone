<?php
    include "../koneksi.php";

    $id = $_GET['id'];

    // Simpan input ke dalam variabel
    if (isset($_POST['btn-upl'])) {
        $id_series = $id;
        $id_season = $_POST['season'];          
        $id_eps = $_POST['episode'];
        $durasi_eps = $_POST['durasi'];
        $deskripsi_eps = $_POST['deskripsi'];

        $insert =
            "INSERT INTO detail_eps (id_series, id_season, id_eps, durasi_eps, deskripsi_eps)
            VALUES ('$id_series', '$id_season', '$id_eps', '$durasi_eps', '$deskripsi_eps')";
        $query = mysqli_query ($koneksi, $insert);
        
        header ("location: tampil_srs.php");
    }
?>        