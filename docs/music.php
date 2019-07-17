<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>No-Rome | Music</title>
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
        <li><a href="../docs/music.php" class="active-menu">Music</a></li>
        <li><a href="../docs/news.php">News</a></li>
        <li><a href="../docs/gallery-videos.php">Videos</a></li>
        <li class="borderBlack"><a href="../docs/gallery-photos.php">Photos</a></li>
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

  <!--Music Section START -->
  <section id="music-section">
    <div class="container">
      <!-- <h3 id="pageTitle">NEWS</h3> -->
      <ul class="ep-cover">
        <li><a href="#"><img src="../assets/images/single-cover-2.jpg" alt="ep cover 1"></a></li>
        <li><h4 class="ep">SEVENTEEN</h4></li>
      </ul>
      <ul class="ep-cover">
        <li><a href="#"><img src="../assets/images/ep-cover-2.jpg" alt="ep cover 1"></a></li>
        <li><h4>HURRY HOME REST</h4></li>
      </ul>
      <ul class="ep-cover">
        <li><a href="../docs/music-ep.php"><img src="../assets/images/ep-cover-3.jpg" alt="ep cover 1"></a></li>
        <li><h4>RIP INDO HISASHI</h4></li>
      </ul>
      <ul class="ep-cover">
        <li><a href="#"><img src="../assets/images/single-cover-1.jpg" alt="ep cover 1"></a></li>
        <li><h4>CRYING IN THE<br> PRETTIEST PLACES</h4></li>
      </ul>
    </div>
  </section>
  <!--Music Section END -->

  <?php
    include_once 'footer.php';
  ?>
</body>

</html>