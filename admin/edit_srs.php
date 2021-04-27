<?php
	include "../koneksi.php";

    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "SELECT * FROM series  WHERE id_series = $id");
    $pecah = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Netflix</title>
	<link rel="stylesheet" type="text/css" href="upl_style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>

<div class="">
    <nav class="navbar navbar-expand-lg">
        <img class="navbar-brand" src="../images/logo.png">     
        <div class="collapse navbar-collapse" id="navbarSupportedContent">         
            <ul class="navbar-nav ml-auto mr-3">
                <li class="nav-item mr-3">
                    <a class="nav-link" href="tampil_user.php">Users</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link" href="tampil_film.php">Movie</a>
                </li>
                <li class="nav-item mr-3">
                    <a class="nav-link" href="tampil_srs.php">TV series</a>
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
        </div>
    </nav>
    <div class="container mt-3">
        <div class="bg-card w-75 mb-5">
            <div class="card-header"><strong><h4>Edit TV series</h4></strong></div>
        </div>
        <form action="edit_srsQuery.php?id=<?=$id?>" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
            <div class="row">
                <div class="col-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Judul series</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="jdl_srs" value="<?php echo $pecah['judul_srs']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Tahun Rilis</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="thn_rilis" value="<?php echo $pecah['tahun_srs']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Batas Usia</label>
                        <div class="col-sm-9 aa">
                            <select class="form-control" name="bts_usia" required>
                                <option value="" hidden>Pilih Batas Usia</option>
                                    <?php
                                        $optionB = "SELECT * FROM batas_usia";
                                        $queryB = mysqli_query($koneksi, $optionB);
                                        while ($rowB = mysqli_fetch_array($queryB)) {
                                    ?>
                                            <option value="<?= $rowB['id_batas_usia'] ?>"><?= $rowB['batas_usia'] ?></option>
                                    <?php
                                        }
                                    ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Genre</label>
                        <div class="col-sm-9 aa">
                            <select class="form-control" name="genre" required="">
                                <option value="" hidden>Pilih Genre</option >
                                    <?php
                                        $optionG = "SELECT * FROM genre";
                                        $queryG = mysqli_query($koneksi, $optionG);
                                        while ($rowG = mysqli_fetch_array($queryG)) {
                                    ?>
                                            <option value="<?= $rowG['id_genre'] ?>"><?= $rowG['genre'] ?></option>
                                    <?php
                                        }
                                    ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Alur</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="alur_srs" value="<?php echo $pecah['alur_srs']; ?>" required>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Pemeran</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="pemeran_srs" value="<?php echo $pecah['pemeran_srs']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Deskripsi</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="deskripsi_srs" value="<?php echo $pecah['deskripsi_srs']; ?>" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Trailer</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="link" name="trailer_srs" value="<?php echo $pecah['trailer_srs']; ?>">
                        </div>
                    </div>
                    <button class="btn float-right mt-3 mb-3" type="submit" name="btn-upl">Simpan</button>
                </div>
            </div>                    
        </form>
    </div>
</div>

<!-- Bootstrap 4 validation -->
<script type="text/javascript">
    (function() {
          'use strict';
          window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');        
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
</script>
</body>
</html>