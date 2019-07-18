<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>No-Rome | Home</title>
  <link rel="stylesheet" href="../css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Orbitron:700,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:500" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="../assets/icons/no-rome-favicon.png"/>
  <script src="../node_modules/jquery/dist/jquery.js"></script>
  <script src="../js/tour-ajax-index.js"></script>
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
        <li><a href="../docs/news.php">News</a></li>
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


  <!-- Header Section START -->
  <section id="header" class="container">
    <ul>
      <li><img src="../assets/images/header-title2.png" alt="no-rome image"></li>
      <li><h2>EXPLORE MUSIC</h2></li>
      <li><button><a href="./music.php">STREAM</a></button></li>
    </ul>
    <img src="../assets/images/home-hero5.png" alt="no-rome" image class="hero-no-rome">
  </section>
  <!-- Header Section END -->

  <!-- Tour Section END -->
  <section id="tour">
    <div class="container-m">
    <ul class="tour-header">
        <li>
          <ul class="container-m section-title">
              <li><h2>2019</h2></li>
              <li><h3>TOUR</h3></li>
          </ul>
        </li>
        </li>
          <a href="../docs/tour.php">SEE ALL TOURS</a>
        </li>
      </ul>

      <table>
        <thead>
          <tr>
            <th>DATE</th>
            <th>VENUE</th>
            <th>CITY</th>
            <th>SHARE</th>
            <th><a>TICKET</a></th>
          </tr>
        </thead>
        
        <tbody id="tour-data">
         
          <!-- AJAX CALL -->
          
           
        </tbody>
        <!-- Tour schedule END--> 
      </table>
    </div> 
  </section>

  <!-- News Section START --> 
  <section id="news" class="sectionFadeIn">
    <ul class="container-m section-title">
      <li><h2>NEWS</h2></li>
      <li><a href="../docs/news.html">SEE ALL NEWS</a></li>
    </ul>
    <div class="container-m">
      <ul>
        <li><img src="../assets/images/news-logo-1.png" alt="news article logo"></li>
        <li><p>by: www.nme.com</p></li>
        <li><h4>THE 1975 JOINS NO ROME IN HIS SULTRY POP SONG "NARCISSIST".</h4></li>
        <li><a href="#">Read More</a><span></span><img src="../assets/icons/right-arrow.png" alt="arrow-link" class="arrow-right"></span></li>
      </ul>

      <ul>
        <li><img src="../assets/images/news-logo-5.png" alt="news article logo"></li>
        <li><p>by: www.clash-blogs.com</p></li>
        <li><h4>MATT HEALEY SAYS NO ROME IS HIS "MUSE".</h4></li>
        <li><a href="#">Read More</a><span></span><img src="../assets/icons/right-arrow.png" alt="arrow-link" class="arrow-right"></span></li>
      </ul>

      <ul>
        <li><img src="../assets/images/news-logo-3.png" alt="news article logo"></li>
        <li><p>by: www.dork.com</p></li>
        <li><h4>NO ROME:"THE ALBUM HAS ALWAYS BEEN ON THE WAY IT KEEPS CHANGING".</h4></li>
        <li><a href="#">Read More</a><span></span><img src="../assets/icons/right-arrow.png" alt="arrow-link" class="arrow-right"></span></li>
      </ul>

      <a href="../docs/news.html">SEE ALL NEWS</a>
    </div> 
  </section>  
    <!-- News Section END -->

  <!-- Gallery Section START --> 
  <section id="gallery" class="sectionFadeIn">
    <div>
      <a  href="../docs/gallery-photos.php">
        <img src="../assets/images/home-gal-section-bw-1.jpg" alt="no-rome-image-pink" class="img-1">
        <h4 class="photos">VIEW PHOTO GALLERY</h4>
      </a>
    </div>
    <div>
      <a  href="../docs/gallery-videos.php">
        <img src="../assets/images/home-gal-section-bw-2.jpg" alt="no-rome-image-pink" class="img-2">
        <h4 class="watch">WATCH MUSIC VIDEOS</h4>
      </a>
    </div>
  </section>  
  <!-- Gallery Section END -->

  <?php
    include 'footer.php';  
  ?>

</body>

</html>