<?php
    include "koneksi.php";
    $email = $_GET['email'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Netflix</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="register_style.css">
</head>
<body>
    <div class="bg">
        <div class="top">
            <img src="images/logo.png" alt="Netflix Logo">
            <a href="login.php" class="btn btn-rounded">Masuk</a>
        </div>
        <?php
            if(isset($_POST['btn-daftar'])) {            
                $username = strtolower(stripslashes($_POST["username"]));
                $email = strtolower($email);
                $password = md5($_POST["password"]);
                $paket = $_POST["paket"];
                
                $sql2 = "INSERT INTO pengguna(nama_user, email_user, pass_user, id_paket) VALUES ('$username', '$email', '$password', '$paket')";
                $berhasil = mysqli_query($koneksi, $sql2);
        ?>
                <script>
                    alert("Registration Succeed!\nTry login into your account");
                    window.location.href="index.php"
                </script>
        <?php
                header ("location: login.php");
            }
        ?>
        <div class="showcase-content">
            <form method="post" enctype="multipart/form-data" class="needs-validation w-50" novalidate>                
                <h1 class="text-center mb-3"><b>Daftar</b></h1>
                <div class="form-group">
                    <label >Username</label>
                    <input type="text" class="form-control" name="username" required>
                </div>
                <div class="form-group">
                    <label >Email</label>
                    <input type="email" class="form-control" name="email" value="<?=$email?>" required>
                </div>
                 <div class="form-group">
                    <label >Sandi</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
                <div class="form-group">
      				<label >Paket</label>
      				<select id="inputState" class="form-control" name="paket">
        			<option hidden>Pilih Paket</option>
       				<?php 
                        $sql3 = mysqli_query($koneksi, "SELECT * FROM paket");
                        while($j = mysqli_fetch_array ($sql3)) {
                    ?>
                            <option value="<?= $j['id_paket']?>"> <?= $j['paket'] ?></option>
                    <?php 
                        }
                    ?>
      				</select>
   			 	</div>
   			 	<button type="submit" name="btn-daftar" class="btn btn-danger btn-block">Daftar</button>
              </form>                
            </div>
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