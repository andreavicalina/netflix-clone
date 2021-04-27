<?php
    include "../koneksi.php";

    // Simpan input ke dalam variabel
    if (isset($_POST['btn-upl'])) {
        $judul = $_POST['jdl_film'];
        $tahun = $_POST['thn_rilis'];
        $cover = $_FILES['cover_film']['name'];
        $file_tmpPic = "cover/".basename($_FILES['cover_film']['name']);
        $bts_usia = $_POST['bts_usia'];
        $genre = $_POST['genre'];
        $alur = $_POST['alur_film'];
        $artis = $_POST['pemeran_film'];
        $durasi = $_POST['durasi_film'];
        $deskripsi = $_POST['desc_film'];
        $video = $_POST['trailer_film'];

        // Cek apakah ada judul yang sama
        $check = mysqli_query($koneksi, "SELECT * FROM film WHERE judul_film = '$judul'");
        $count = mysqli_num_rows($check);

        // Jika tidak ada judul film yang sama
        if ($count == 0) {
            // Masukkan cover dan trailer ke folder
            move_uploaded_file($_FILES['cover_film']['tmp_name'],$file_tmpPic);

            //Memasukkan data film ke db
            $insert =
            "INSERT INTO film (judul_film, tahun_film, id_batas_usia, id_genre, alur_film, pemeran_film, trailer_film, poster_film, durasi_film, deskripsi_film)
            VALUES ('$judul', '$tahun', '$bts_usia', '$genre', '$alur', '$artis', '$video', '$cover', '$durasi', '$deskripsi')";
            $query = mysqli_query ($koneksi, $insert);

            // Jika tidak terhubung ke db
            if (!$query) {
                echo "Something's Wrong<br>".$insert."<br>".mysqli_error($koneksi);
            }
?>
            <script>
                alert("Film ditambahkan");
                window.location(tampil_film.php);
            </script>
<?php
        // Jika ada judul film yang sama
        } else {
?>
            <script>
                alert("Judul film sudah ada");
                window.location(upl_film.php);
            </script>
<?php
        }
    }
?>
<script type="text/javascript">
    // Javascrip bootstrap 4 dismissable alert
    $('.alert').alert();
</script>