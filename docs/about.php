<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>No-Rome | About</title>
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
        <li><a href="../docs/about.php" class="active-menu">About</a></li>
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

  <!--About Header Section START -->
  <section id="about-header">
    <div>
      <h2>HUMBLE BEGINNINGS</h2>
      <p>With an intoxicating mix of R&B, shoegaze, and electronic dream pop, No Rome      developed his sound in his native Philippines, turning out a handful of independent releases before gaining international success in 2018 as part of U.K. label Dirty Hit's roster.

      Rome Gomez was born and raised in Manila to a musical family and began recording and releasing his own music at the age of only 12. A singer, songwriter, and producer,"


      Gomez began using the No Rome moniker for his laid-back electronic pop songs in 2013, releasing his first EP, Fantasy, that same year. A second independent EP, Hurry Home & Rest, appeared in 2015, after which No Rome signed with London's Dirty Hit Records, home to acts like the 1975 and the Japanese House. He would go on to work with 1975 members Matty Healy and George Daniel on his label debut, the 2018 EP RIP Indo Hisashi, which featured the breakout single "Narcissist.
      </p>
    </div>
    <img src="../assets/images/about-img-1.jpg" alt="no-rome picture">
    <img src="../assets/images/about-img-2.jpg" alt="no-rome picture">
    <div>
        <h2>THE STORY SO FAR</h2>
        <p>With an intoxicating mix of R&B, shoegaze, and electronic dream pop, No Rome      developed his sound in his native Philippines, turning out a handful of independent releases before gaining international success in 2018 as part of U.K. label Dirty Hit's roster.
  
        Rome Gomez was born and raised in Manila to a musical family and began recording and releasing his own music at the age of only 12. A singer, songwriter, and producer,"
  
  
        Gomez began using the No Rome moniker for his laid-back electronic pop songs in 2013, releasing his first EP, Fantasy, that same year. A second independent EP, Hurry Home & Rest, appeared in 2015, after which No Rome signed with London's Dirty Hit Records, home to acts like the 1975 and the Japanese House. He would go on to work with 1975 members Matty Healy and George Daniel on his label debut, the 2018 EP RIP Indo Hisashi, which featured the breakout single "Narcissist.
        </p>
      </div>
      
  </section>
  <!--About Section END -->

  <?php
    include_once 'footer.php';
  ?>
</html>