<?php
    include "../koneksi.php";
    $id = $_GET['id'];
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
    <div class="container mt-3 w-50">
        <div class="bg-card w-75 mb-5">
            <div class="card-header"><strong><h4>Tambah Episode Baru</h4></strong></div>
        </div>
        <form action="upl_epsQuery.php?id=<?=$id?>" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
            <?php
                $add = mysqli_query($koneksi, "SELECT * FROM series WHERE id_series = $id");
                foreach ($add as $s):
            ?>
            <div class="">
                <div class="">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Judul tv series</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" value="<?= $s['judul_srs'] ?>" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Season</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="number" min="1" name="season" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Episode</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="number" min="1" name="episode" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Durasi</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" name="durasi" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Deskripsi</label>
                        <div class="col-sm-9">
                            <textarea name="deskripsi" style="width: 400px;" required></textarea>
                        </div>
                    </div>
                    <button class="btn float-right mt-3 mb-3" type="submit" name="btn-upl">Upload</button>
                </div>
            </div> 
            <?php
                endforeach;
            ?>                   
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