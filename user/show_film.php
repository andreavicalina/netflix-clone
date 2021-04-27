<?php
  include "../koneksi.php";

  $id = $_GET['id'];

  if (empty($_SESSION['nama_user'])) {
    header ("Location: ../error.php");
    die;
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Netflix</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Roboto:wght@300;500&display=swap"
      rel="stylesheet"/>
    <link href="custom.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d370445269.js" crossorigin="anonymous"></script>

  </head>

  <body>
    <!-- HEADER -->

  <div class="container-fluid">
    <div class="contenedor">
      <header>
        <div class="header">
          <div>
            <img src="../images/logo.png" height="40">     
          </div>

          <div>
            <nav class="navbar navbar-expand-lg">
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="homepage.php?id=<?=$id?>">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="show_film.php?id=<?=$id?>">Movies <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="show_srs.php?id=<?=$id?>">TV series</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="favorite.php?id=<?=$id?>">Favorite</a>
                  </li>
                  <li class="nav-item dropdown">
                  <?php
                    $profil = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE id_user = $id");
                    foreach ($profil as $p):
                  ?>
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <?= $p['nama_user'] ?>
                    </a>
                  <?php
                    endforeach;
                  ?>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="profil.php?id=<?=$id?>">Profil</a>
                      <a class="dropdown-item" href="../logout.php">Logout</a>
                    </div>
                  </li>
                </ul>
              </div>
          </nav>
        </div>
      </header>
    </div>

    <!-- SUGGEST SECTION  -->
    
    <div class="container-fluid mt-3">
      <h3 style="color: white;">Yang mungkin Anda sukai</h3>
      <div class="row d-flex justify-content-center">
      <?php
        $query = mysqli_query($koneksi, "SELECT * FROM film");
        foreach ($query as $q):
      ?>
        <div class=" col-3 mr-4 mb-5 gmbr-utama">
          <a type="button" data-toggle="modal" data-target="#detfilm<?= $q['id_film']; ?>">
            <img src="<?= "../admin/cover/".$q['poster_film']?>"  alt="">
          </a>
        </div>
        <div class="modal fade" id="detfilm<?= $q['id_film']; ?>" role="dialog">
          <div class="modal-dialog modal-dialog-centered" style="background: #221f1f;">
            <div class="modal-content" style="background: #221f1f;">
              <button type="button" class="close m-2" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" style="color: white;">&times;</span>
              </button>
              <div class="modal-body text-left">
              <?php
                $id_film = $q['id_film'];
                $detfilm = mysqli_query($koneksi, "SELECT * FROM film a, genre b, batas_usia c WHERE id_film = $id_film AND a.id_genre = b.id_genre AND a.id_batas_usia = c.id_batas_usia");
                          foreach ($detfilm as $film) {
              ?>
                  <div class="card mb-3" style="background: #221f1f; color: white;">
                    <img class="card-img-top" src="<?= "../admin/cover/".$q['poster_film']?>" alt="Card image cap">
                    <div class="card-body">
                      <ul class="modal__btns row">
                        <li>
                          <a class="modal__btn modal__btn--play ml-3">
                            <button ion-button icon-only onclick="location.href='<?=$film['trailer_film']?>';" value="Movie Trailer">
                              <ion-icon name="play"></ion-icon>
                            </button>
                          </a>
                          <a href="add_favorite.php?id=<?=$id?>&id_cont=<?=$film['id_film']?>" class="modal__btn" style="color: white;">
                            <ion-icon name="add"></ion-icon>
                            <span class="tool-tip">
                              Add to Favorite
                            </span>
                          </a>
                          <a class="modal__btn">
                            <ion-icon name="thumbs-up-outline"></ion-icon>
                            <span class="tool-tip">
                              I like this
                            </span>
                          </a>
                        </li>
                      </ul>
                      <ul class="modal__ratings row">
                        <p class="modal__pg ml-3"><?= $film['batas_usia'] ?></p>
                        <p class="modal__season ml-3"><strong><?= $film['judul_film'] ?></strong></p>
                      </ul>
                      <ul class="modal__categories row">
                        <p class="modal__category ml-3"><?= $film['alur_film'] ?></p>
                      </ul>
                      <p class="card-text"><?= $film['deskripsi_film'] ?></p>
                    </div>
                  </div>
              <?php
                          }
              ?>
              </div>  
            </div>
          </div>  
        </div>
      <?php
        endforeach;
      ?>
      </div>
    </div>
  </div>

  <script src="js/main.js"></script>
  <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
  <script src=",yscript.js"></script>
  <script src="https://kit.fontawesome.com/d370445269.js" crossorigin="anonymous"></script>

</body>
</html>
