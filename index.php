<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="index_style.css">
    <title>Netflix</title>
</head>
<body>
<div>
    <header class="showcase">
        <!-- Navbar -->
        <div class="showcase-top">
            <img src="images/logo.png" alt="Netflix Logo">
            <a href="login.php" class="btn btn-rounded">Masuk</a>
        </div>
        <!-- Body content -->
        <div class="showcase-content">
            <h1>Film, acara TV tak terbatas, dan lebih banyak lagi.</h1>
            <h3>Tonton di mana pun. Batalkan kapan pun.</h3>
            <p>Siap Menonton? Masukkan email untuk membuat atau memulai keanggotaanmu</p>
            <?php
                include "koneksi.php";

                if (isset($_GET['btn-mulai'])) {
                    $email = $_GET['email'];
                    $query = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE email_user = '$email'");
                    $sudahada = $query -> fetch_assoc();
                    if ($sudahada) {
                        echo 
                            '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Email sudah terdaftar</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>';
                    } else {
                        header("location: register.php?email=".$email);    
                    }        
                }
            ?>
            <form method="get" action="">
                <input type="email" name="email" placeholder="Masukkan Email Anda" required>
                <button class="btn btn-lg" name="btn-mulai" type="submit">Mulai</button>
            </form>
        </div>
    </header>
</div>

<script type="text/javascript">
    // Javascrip bootstrap 4 dismissable alert
    $('.alert').alert();
</script>
</body>
</html>