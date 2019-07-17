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
        <li><a href="../docs/tour.php" class="active-menu">Tour</a></li>
        <li><a href="../docs/music.php">Music</a></li>
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

  <!-- Header Section START -->
  <section id="tour-header">
    <div></div>
  </section>
  <!-- Header Section END -->
  
  <!-- Tour Section START -->
  <section id="tour">
    <div class="container-m">

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
  <!-- Tour Section End -->

  <!-- Slider Section START -->
  <div id="slider">
    <figure>
      <img src="../assets/images/slider-img-big-1.jpg" alt="tour images">
      <img src="../assets/images/slider-img-big-2.jpg" alt="tour images">
      <img src="../assets/images/slider-img-big-3.jpg" alt="tour images">
      <img src="../assets/images/slider-img-big-4.jpg" alt="tour images">
      <img src="../assets/images/slider-img-big-5.jpg" alt="tour images">
      <img src="../assets/images/slider-img-big-6.jpg" alt="tour images">
      <img src="../assets/images/slider-img-big-3.jpg" alt="tour images">
      <img src="../assets/images/slider-img-big-4.jpg" alt="tour images">
      <img src="../assets/images/slider-img-big-5.jpg" alt="tour images">
      <img src="../assets/images/slider-img-big-6.jpg" alt="tour images">
    </figure>
  </div>
  <!-- Slider Section End -->

  <?php
    include_once 'footer.php';
  ?>
</body>

</html>