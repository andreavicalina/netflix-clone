<?php
    include "koneksi.php";
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
    <link rel="stylesheet" type="text/css" href="index_style.css">
    <style> 
    .showcases{
        width: 100%;
        height: 100vh;
        position: relative;
        background: url("images/1.jpg") no-repeat center center/cover;
      }               
    .top{
        position: relative;
        z-index: 2;
        height: 90px;
    }
    .top img{
        width: 140px;
        position: absolute;
        top: 50%;
        left: 0;
        transform: translate(40% , -50%);
    }
    .form-container{
        border: 0px solid;
        padding: 50px 60px;
        margin-top: 2vh;
        -webkit-box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
        -moz-box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
        box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
        color: white;
        background-color: rgba(0,0,0,0.85);
    }
    .form-group a {
        transition: 0.3s ease;
    }
    .form-group a:hover {
        text-decoration: none;
        color: #db0000;
    }
    </style>
</head>
<body>
<div class="showcases">
    <div class="showcase-top">
        <img src="images/logo.png" alt="Netflix Logo">
        <a href="admin/admin-login.php" class="btn btn-rounded float-right">Admin</a>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-sm4 col-xs-12"></div>            
            <div class="col-md-4 col-sm4 col-xs-12">
                <?php
                    if(isset($_POST['btn-login'])) {
                        $email = strtolower($_POST['email']);
                        $password = md5($_POST['password']);
                    
                        $sql = "SELECT * FROM pengguna WHERE email_user = '$email' AND pass_user = '$password'";
                        $ambil = $koneksi -> query($sql);
                        $count = mysqli_num_rows($ambil);
                        if($count != 0) {
                            while ($row = mysqli_fetch_array($ambil)) {
                                $id = $row['id_user'];
                                $nama = $row['nama_user'];
                                $email = $row['email_user'];
                                $paket = $row['id_paket'];

                                header("location: user/homepage.php?id=".$id);
                                $_SESSION['id_user'] = $id;
                                $_SESSION['nama_user'] = $nama;
                                $_SESSION['email_user'] = $email;
                                die;
                            }
                        } else {
                            echo 
                                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Email atau sandi salah</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>';
                        }
                    }
                ?>
                <form class="form-container needs-validation" method="post" novalidate>
                    <div class="form-group">
                        <h1 class="text-center"><b>Masuk</b></h1>
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Sandi</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-danger btn-block" name="btn-login">Masuk</button>
                    <div class="form-group">
                        <br> <br>
                        <h5 style="color:#564d4d;">Baru di Netflix? <a href="index.php">Daftar sekarang.</a></h5>
                    </div>
                </form>               
            </div>
            <div class="col-md-4 col-sm4 col-xs-12"></div>
        </div> 
    </div>
    </div>
</div>

<script type="text/javascript">
    // Javascrip bootstrap 4 dismissable alert
    $('.alert').alert();

  // Boottrap 4 validation
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