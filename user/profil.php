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
    <style type="text/css">
      .form-container{
          border-radius: 10px;
          background-color: rgba(0, 0, 0, 0.3);
          padding: 25px 25px 5px 25px;
      }

      .form-group input, input[type="text"]:disabled {
          margin-bottom: 10px;
          border-radius: 10px;
          background-color: rgba(0, 0, 0, 0.3);
          border: 1px solid grey;
          color: #f5f5f1; 
      }

      .form-group input:focus, input:active {
          background-color: rgba(0, 0, 0, 0.3);
          border: none;
          outline: none;
          color: #f5f5f1;
      }
    </style>
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
                    <a class="nav-link" href="#">Movies <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">TV series</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Favorite</a>
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

    <!-- Form header  -->
    
    <?php
      $profil = mysqli_query($koneksi, "SELECT * FROM pengguna a, paket b WHERE id_user = $id AND a.id_paket = b.id_paket");

      foreach ($profil as $p) {
    ?>
    <div class="container w-50 mt-4" style="color: #f5f1f1">
      <h3 class="mb-4">Profil</h3>
      <form method="post" >
        <div class="form-group">
          <label>Nama pengguna</label>
          <input class="form-control" type="text" name="nama" value="<?=$p['nama_user']?>">
        </div>        
        <div class="form-group">
          <label>Email</label>
          <input class="form-control" type="email" name="email" value="<?=$p['email_user']?>">
        </div>
        <div class="form-group">
          <label>Paket</label>
          <input class="form-control" type="text" value="<?=$p['paket']?>" disabled>
        </div>
        <button class="btn btn-danger" type="submit" name="btn-ubah">Simpan</button>
        <a class="btn" type="submit" href="homepage.php?id=<?=$id?>">Batal</a>
      </form>
    </div>
  <?php
    }

    if (isset($_POST['btn-ubah'])) {
      $nama = strtolower(stripslashes($_POST["nama"]));
      $email = strtolower($_POST["email"]);

      $ubah = mysqli_query($koneksi, "UPDATE pengguna SET nama_user = '$nama', email_user = '$email' WHERE id_user = $id");

      header ("location: homepage.php?id=<?=$id?>");
    }
  ?>
  </div>
  </div>
  
  <script src="js/main.js"></script>
  <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
  <script src=",yscript.js"></script>
  <script src="https://kit.fontawesome.com/d370445269.js" crossorigin="anonymous"></script>

</body>
</html>
