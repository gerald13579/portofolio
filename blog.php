<?php include("app/database/connect.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      Menghadapi Tantangan dalam Dunia Game: Meningkatkan Keterampilan dan
      Kreativitas
    </title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    
  <?php include("app/include/header.php");?>

    <div class="artikel">
      <?php
      $sql = "SELECT * FROM blog";
      $hasil = mysqli_query($conn, $sql);

      $jmlBlog = mysqli_num_rows($hasil);
      if ($jmlBlog > 0) {
        while($row = mysqli_fetch_assoc($hasil)) {
      ?>
      <div class="artikel-head">
        <h2>
          <?= $row["judul"]; ?>
        </h2>
      </div>

        <div class="artikel-text">
          <p>
          <?= $row["konten"]; ?>
          </p>
        </div>

        <br>
        <hr>
        <br>
        <?php
          }
        }
        ?>

      </div>
    </div>
    <script src="../script.js"></script>
  </body>
</html>
