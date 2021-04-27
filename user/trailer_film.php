<?php
  include "../koneksi.php";

  $id = $_GET['id'];
  $id_f = $_GET['id_f'];

  if (empty($_SESSION['nama_user'])) {
    header ("Location: ../error.php");
    die;
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSS StyleSheet -->
    <link rel="stylesheet" href="custom.css" />

    <!-- Favicon CSS-->
    <link rel="shortcut icon" href="favicon.svg" type="image/x-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap"
      rel="stylesheet"
    />

    <title>Movie Trailer | Netflix</title>
  </head>
  <body>
    <div class="video-container">
      <button
        ion-button
        icon-only
        onclick="location.href='show_film.php?id=<?=$id?>';"
        value="Go Back"
        class="back-btn"
      >
        <ion-icon name="arrow-back-outline"></ion-icon>
        <p>Back to Browse</p>
      </button>
      <div class="banner">
        <?php
          $trail = mysqli_query($koneksi, "SELECT * FROM film WHERE id_film = $id_f");
          foreach ($trai as $t):
        ?>
        <iframe
          width="1000"
          height="600"
          src="<?=$t['trailer_film']?>"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen
        ></iframe>
        <?php
          endforeach;
        ?>
      </div>
    </div>

    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
  </body>
</html>
