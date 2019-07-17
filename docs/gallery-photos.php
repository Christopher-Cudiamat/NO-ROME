<!DOCTYPE html>
<html>
<head>
  <title>No-Rome | Photos</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="../css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Orbitron:700,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:500" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet">
  <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">
  <link rel="shortcut icon" type="image/x-icon" href="../assets/icons/no-rome-favicon.png"/>
  <script src="../node_modules/jquery/dist/jquery.js"></script>
  <script src="../js/script.js"></script>
</head>

<body>
  <!-- Lightbox Section START -->
  <div class="lightbox-container">
    <h1 class="btn-lightbox">X</h1>
    <!-- <h2 class="prev btn-lightbox btn-control"><</h2>
    <h2 class="next btn-lightbox btn-control">></h2> -->
    <div class="full-img">
    </div>
    <div class="lightbox-bg-left"></div>
    <div class="lightbox-bg-right"></div>
  </div>
  <!-- Lightbox Section END -->

  <?php
    include_once 'social.php';
  ?>
  
  <?php
    include_once 'nav.php';
  ?>

<nav id="nav" class="changeNavToBlack">
    <div class="container-nav">
      <ul>
        <li><a href="index.php"><img src="../assets/icons/norome-nav-logo-black.png" alt="no-rome logo" class="nav-logo"><a></li>
      </ul>

      <!-- DESKTOP NAV -->
      <ul class="navMenu">
        <li><a href="../docs/about.php">About</a></li>
        <li><a href="../docs/tour.php">Tour</a></li>
        <li><a href="../docs/music.php">Music</a></li>
        <li><a href="../docs/news.php">News</a></li>
        <li><a href="../docs/gallery-videos.php ">Videos</a></li>
        <li class="borderBlack"><a href="../docs/gallery-photos.php" class="active-menu">Photos</a></li>
        <!-- <li><a href="../docs/login.php">Login</a></li> -->
        <?php
          if(isset($_SESSION['u_id'])) {
            // echo "<li><a>Logout</a></li>";
            echo '<li><form action="includes/logout.inc.php" method="POST">
                    <button type="submit" name="submit" class="logout-btn">Logout</button>
                  </form></li>';
          } else {
            echo '<li><a href="../docs/login.php">Login</a></li>';
          }
        ?>
        <li><img src="../assets/icons/social-icon.png" alt="social icon" class="social-icon social-menu"></li>
      </ul>
    </div>
  </nav>

  <!--Gallery Photo Section START -->
  <section id="photo-section">
    <div>
      <figure>
        <img src="../assets/images/gallery-thumb-2.jpg" alt="gallery pic 2" class="test">
      </figure>
      <figure>
        <img src="../assets/images/gallery-thumb-5.jpg" alt="gallery pic 2" class="test">
      </figure>
      <figure>
        <img src="../assets/images/gallery-thumb-20.jpg" alt="gallery pic 3">
      </figure>
      <figure>
        <img src="../assets/images/gallery-thumb-4.jpg" alt="gallery pic 4">
      </figure>
      <figure>
        <h5>5<br> WAYS<br> TO<br> BLEACH<br> YOUR<br> HAIR
        </h5>
      </figure>
      <figure>
        <img src="../assets/images/gallery-thumb-6.jpg" alt="gallery pic 6">
      </figure>
      <figure>
        <img src="../assets/images/gallery-thumb-7.jpg" alt="gallery pic 7">
      </figure>
      <figure>
        <img src="../assets/images/gallery-thumb-8.jpg" alt="gallery pic 8">
      </figure>
      <figure>
        <h5>CRYING<br> IN <br>THE<br> PRETTIEST<br> PLACES
        </h5>
      </figure>
      <figure>
        <img src="../assets/images/gallery-thumb-10.jpg" alt="gallery pic 10">
      </figure>
      <figure class="gallery-icons">
        <div>
            <img src="../assets/icons/icon-yinyang.png" alt="gallery-icons">
            <img src="../assets/icons/logo-norome-footer.png" alt="gallery-icons">
            <img src="../assets/icons/icon-global.png" alt="gallery-icons">
        </div>
      </figure>
      <figure>
        <img src="../assets/images/gallery-thumb-12.jpg" alt="gallery pic 12">
      </figure>
      <figure>
        <img src="../assets/images/gallery-thumb-13.jpg" alt="gallery pic 13">
      </figure>
      <figure>
        <img src="../assets/images/gallery-thumb-14.jpg" alt="gallery pic 13">
      </figure>
      <figure>
        <img src="../assets/images/gallery-thumb-15.jpg" alt="gallery pic 13">
      </figure>
      <figure>
        <img src="../assets/images/gallery-thumb-17.jpg" alt="gallery pic 13">
      </figure>
      <figure>
        <img src="../assets/images/gallery-thumb-18.jpg" alt="gallery pic 13">
      </figure>
      <figure>
        <img src="../assets/images/gallery-thumb-19.jpg" alt="gallery pic 13">
      </figure>
      <figure>
        <img src="../assets/images/gallery-thumb-3.jpg" alt="gallery pic 13">
      </figure>
      <figure>
        <img src="../assets/images/gallery-thumb-24.jpg" alt="gallery pic 13">
      </figure>
      <figure>
        <img src="../assets/images/gallery-thumb-23.jpg" alt="gallery pic 13">
      </figure>
      <figure>
        <img src="../assets/images/gallery-thumb-22.jpg" alt="gallery pic 13">
      </figure>
    </div>
  </section>
  <!--Gallery Photo Section END -->

  <?php
    include_once 'footer.php';
  ?>
</body>

</html>