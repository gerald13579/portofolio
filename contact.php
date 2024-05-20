<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    
  <?php include("app/include/header.php");?>

    <div class="contact">
      <div class="contact-head">
        <h2>CONTACT ME</h2>
      </div>
      <div class="contact-container">
          <div class="contact-form">
            <h3>send me a message</h3>
            <form action="proses.php" method="POST">
              <div class="form-group">
                <input type="text" name="nama" placeholder="Your Name" required>
              </div>
              <div class="form-group">
                <input type="email" name="email" placeholder="Your Email" required>
              </div>
              <div class="form-group">
                <textarea name="message" placeholder="send message" required></textarea>
              </div>
              <button type="submit">submit</button>
            </form>
          </div>

          <div class="contact-social">
          <h3>Social Media:</h3>
            <p>Email: <a href="mailto: geraldtakalamingan@gmial.com">geraldtakalamingan@gmial.com</a></p>
            <p>IG: <a href="https://www.instagram.com/gtklmngn/">@gtklmngn</a></p>
            <p>FB: <a href="https://www.facebook.com/gerald.takalamingan">@Gerald Takalamingan</a></p>
          </div>
      </div>
    </div>
    <script src="script.js"></script>
  </body>
</html>
