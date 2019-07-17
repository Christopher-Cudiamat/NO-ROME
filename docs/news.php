<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>No-Rome | News</title>
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
        <li><a href="../docs/music.php">Music</a></li>
        <li><a href="../docs/news.php" class="active-menu">News</a></li>
        <li><a href="../docs/gallery-videos.php ">Videos</a></li>
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

  <!--About News Section START -->
  <!-- <h3 id="pageTitle">NEWS</h3> -->
  <section id="about-news">
    <div class="container">
      <ul>
        <li><img src="../assets/images/news-logo-1.png" alt="news article logo"></li>
        <li class="captions"><caption>by: www.nme.com</caption></li>
        <li><h4>THE 1975 JOINS NO ROME IN HIS SULTRY POP SONG "NARCISSIST".</h4></li>
        <li><img src="../assets/icons/right-arrow.png" alt="arrow-link" class="arrow-right"><span><a href="https://www.nme.com/blogs/nme-radar/1975-collaborater-no-rome-shares-lush-new-single-cashmoney-2478011" target="_blank">Read More</a></span></li>
      </ul>

      <ul>
        <li><img src="../assets/images/news-logo-2.png" alt="news article logo"></li>
        <li class="captions"><caption>by: www.clash-blogs.com</caption></li>
        <li><h4>MATT HEALEY SAYS NO ROME IS HIS "MUSE".</h4></li>
        <li><img src="../assets/icons/right-arrow.png" alt="arrow-link" class="arrow-right"><span><a href="#">Read More</a></span></li>
      </ul>

      <ul>
        <li><img src="../assets/images/news-logo-3.png" alt="news article logo"></li>
        <li class="captions"><caption>by: www.dork.com</caption></li>
        <li><h4>NO ROME:"THE ALBUM HAS ALWAYS BEEN ON THE WAY IT KEEPS CHANGING".</h4></li>
        <li><img src="../assets/icons/right-arrow.png" alt="arrow-link" class="arrow-right"><span><a href="#">Read More</a></span></li>
      </ul>

      <ul>
        <li><img src="../assets/images/news-logo-44.png" alt="news article logo"></li>
        <li class="captions"><caption>by: www.nme.com</caption></li>
        <li><h4>THE 1975 JOINS NO ROME IN HIS SULTRY POP SONG "NARCISSIST".</h4></li>
        <li><img src="../assets/icons/right-arrow.png" alt="arrow-link" class="arrow-right"><span><a href="#">Read More</a></span></li>
      </ul>

      <ul>
        <li><img src="../assets/images/news-logo-5.png" alt="news article logo"></li>
        <li class="captions"><caption>by: www.clash-blogs.com</caption></li>
        <li><h4>MATT HEALEY SAYS NO ROME IS HIS "MUSE".</h4></li>
        <li><img src="../assets/icons/right-arrow.png" alt="arrow-link" class="arrow-right"><span><a href="#">Read More</a></span></li>
      </ul>

      <ul>
        <li><img src="../assets/images/news-logo-66.png" alt="news article logo"></li>
        <li class="captions"><caption>by: www.dork.com</caption></li>
        <li><h4>NO ROME:"THE ALBUM HAS ALWAYS BEEN ON THE WAY IT KEEPS CHANGING".</h4></li>
        <li><img src="../assets/icons/right-arrow.png" alt="arrow-link" class="arrow-right"><span><a href="#">Read More</a></span></li>
      </ul>
    </div>
  </section>
  <!--About Section END -->

  <?php
    include_once 'footer.php';
  ?>
</body>

</html>