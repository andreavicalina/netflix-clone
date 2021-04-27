<?php
    include "../koneksi.php";

    $id = $_GET['id'];

    // Simpan input ke dalam variabel
    if (isset($_POST['btn-upl'])) {
        $judul = $_POST['jdl_srs'];
        $tahun = $_POST['thn_rilis'];          
        $bts_usia = $_POST['bts_usia'];
        $genre = $_POST['genre'];
        $alur = $_POST['alur_srs'];
        $artis = $_POST['pemeran_srs'];
        $deskripsi = $_POST['deskripsi_srs'];
        $video = $_POST['trailer_srs'];
        //$file_tmpVid = "trailer/".basename($_FILES['trailer_film']['name']);

        $upd = mysqli_query($koneksi, "UPDATE series SET judul_srs = '$judul', tahun_srs = '$tahun', id_batas_usia = '$bts_usia', id_genre = '$genre', alur_srs = '$alur', pemeran_srs = '$artis', trailer_srs = '$video', deskripsi_srs = '$deskripsi' WHERE id_series = $id");
        
        header ("location: tampil_srs.php");
    }
?>        