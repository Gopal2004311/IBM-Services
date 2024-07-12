<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IBM Services</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/bootstrap.css" />
    <link rel="stylesheet" href="./css/media.css" />
    <link rel="website icon" href="./img/logo1.jpg" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script src="./js/script.js" defer></script>
    <script src="./js/common.js" defer></script>
  </head>
  <body>
    <!--Navbar Included here-->
    <?php require_once "./partials/navbar.php";?>
    <!----Hero section start here---->
    <section id="hero-section">
      <div class="hero-background">
        <div class="image-text">
          <p class="hero-info">
            Are Aim is to provide best <br /><span class="text-warning"
              >services</span
            >
            to customer!
          </p>
          <div class="buttons">
            <a href="#service" class="btn btn-primary">Service</a>
            <a href="about.php" class="btn btn-warning">About</a>
          </div>
        </div>
      </div>
    </section>
    <!----IBM Service section Included here-->
    <section id="service">
      <?php require_once "./partials/services.php"?>
    </section>
     <!-----IBM Consultant section included here---->
    <section id="consultants">
      <?php require_once "./partials/consultants.php";?>
    </section>
    <!-----IBM Technology section included here--->
    <section id="technology">
      <?php require_once "./partials/technology.php";?>
    </section>
    <!------IBM Contact section included here--->
    <section id="contact">
      <?php require_once "./partials/contacts.php";?>
    </section>
    <!--Footer section included here-->
    <section id="footer" class="bg-dark">
      <?php require_once "./partials/footer.php"?>
    </section>
  </body>
</html>
