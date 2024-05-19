<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gallery</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    
  <?php include("app/include/header.php");?>

    <div class="gallery-container">
      <div class="gallery-heading">
        <h2>GALLERY</h2>
      </div>

      <div class="full-img" id="fullImgBox">
        <img src="galleryFoto/foto1.jpg" id="fullImg" />
        <span onclick="closeFullImg()">x</span>
      </div>

      <div class="gallery-img">
        <img src="galleryFoto/foto1.jpg" onclick="openFullImg(this.src)" />
        <img src="galleryFoto/foto2.jpg" onclick="openFullImg(this.src)" />
        <img src="galleryFoto/foto3.jpg" onclick="openFullImg(this.src)" />
        <img src="galleryFoto/foto4.jpg" onclick="openFullImg(this.src)" />
        <img src="galleryFoto/foto5.jpg" onclick="openFullImg(this.src)" />
        <img src="galleryFoto/foto6.jpg" onclick="openFullImg(this.src)" />
        <img src="galleryFoto/foto7.jpg" onclick="openFullImg(this.src)" />
        <img src="galleryFoto/foto8.jpg" onclick="openFullImg(this.src)" />
        <img src="galleryFoto/foto9.jpg" onclick="openFullImg(this.src)" />
      </div>
    </div>
    <script src="script.js"></script>
  </body>
</html>
