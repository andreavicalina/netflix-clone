<?php
    include "../koneksi.php";

    // Simpan input ke dalam variabel
    if (isset($_POST['btn-upl'])) {
        $judul = $_POST['jdl_srs'];
        $tahun = $_POST['thn_srs'];
        $cover = $_FILES['cover_srs']['name'];
        $file_tmpPic = "cover/".basename($_FILES['cover_srs']['name']);
        $bts_usia = $_POST['bts_usia'];
        $genre = $_POST['genre'];
        $alur = $_POST['alur_srs'];
        $artis = $_POST['pemeran_srs'];
        $deskripsi = $_POST['desc_srs'];
        $video = $_POST['trailer_srs'];

        // Cek apakah ada judul yang sama
        $check = mysqli_query($koneksi, "SELECT * FROM series WHERE judul_srs= '$judul'");
        $count = mysqli_num_rows($check);

        // Jika tidak ada judul series yang sama
        if ($count == 0) {
            // Masukkan cover dan trailer ke folder
            move_uploaded_file($_FILES['cover_srs']['tmp_name'], $file_tmpPic);

            //Memasukkan data series ke db
            $insert =
            "INSERT INTO series (judul_srs, tahun_srs, id_batas_usia, id_genre, alur_srs, pemeran_srs, trailer_srs, poster_srs, deskripsi_srs)
            VALUES ('$judul', '$tahun', '$bts_usia', '$genre', '$alur', '$artis', '$video', '$cover', '$deskripsi')";
            $query = mysqli_query ($koneksi, $insert);

            // Jika tidak terhubung ke db
            if (!$query) {
                echo "Something's Wrong<br>".$insert."<br>".mysqli_error($koneksi);
            }
?>
            <script>
                alert("Series ditambahkan");
                window.location(tampil_srs.php);
            </script>
<?php
        // Jika ada judul film yang sama
        } else {
?>
            <script>
                alert("Judul Series Sudah Ada");
                window.location(upl_srs.php);
            </script>
<?php
        }
    }
?>