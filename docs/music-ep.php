<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1">  
  <title>No-Rome | EP</title>
  <link rel="stylesheet" href="../css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Orbitron:700,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:500" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet">
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

  <!--Music-ep Section START -->
  <section id="music-ep-section">
    <div class="container-s">
      <ul class="ep-cover">
        <li><img src="../assets/images/ep-cover-3.jpg" alt="ep cover 1"></li>
        <li><img src="../assets/images/vynil.jpg" alt="vynil image" class="vinyl"></li>
      </ul>
      
      <ul>
        <li><h2>RIP INDO HISASHI</h2></li>
        <li><p>Label: NUMBER LINE RECORDS</p></li>
        <li><p>Release date: July 15, 2015</p></li> 
        <li>
          <ul>
            <li><h3>TRACKS</h3></li>
            <li><h4>01. Pink</h4></li>
            <li><h4>02. 5 Ways To Bleach Your Hair</h4></li>
            <li><h4>03. Crying In The Prettiest Places</h4></li>
            <li><h4>04. All Up In My Head</h4></li>
            <li><h4>05. Cashmoney</h4></li>
            <li><h4>06. Narcissist</h4></li>
          </ul>
        </li>
      </ul>

      <ul>
        <li><h5>STREAM ON:</h5></li>
        <li><a href="#"><img src="../assets/icons/music-stream-1.png" alt="music streaming logo"></a></li>
        <li><a href="https://www.deezer.com/en/album/71422972" target="_blank"><img src="../assets/icons/music-stream-2.png" alt="music streaming logo"></a></li>
        <li><a href="https://open.spotify.com/artist/6auWB5YAlcKaHyrbTH66nd" target="_blank" ><img src="../assets/icons/music-stream-4.png" tralt="music streaming logo"></a></li>
      </ul>
    </div>
  </section>
  <!--Music-ep Section END -->

  <?php
    include_once 'footer.php';
  ?>
</body>

</html>