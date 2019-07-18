

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>No-Rome | Login</title>
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
            echo '<li><a href="../docs/login.php" class="active-menu">Login</a></li>';
          }
        ?>
        <li><img src="../assets/icons/social-icon.png" alt="social icon" class="social-icon social-menu"></li>
      </ul>
    </div>
  </nav>

  
    <!-- Form Section START  -->  
  <section id="formSection">
        <div class="border">

        <!-- SIGN UP START -->
          <ul id="signUp">
            <li><h3>JOIN THE SQUAD</h3></li>
            <li><h4>SIGN UP NOW FOR MORE UPDATES</h4></li>
            <li><h5>Create a free account</h5></li>
            <li> 
              <button class="sign-up-btn"><a href="./signup.php" class="sign-up-button">SIGN UP</a></button>
            </li>
          </ul>

          <!-- LOGIN START -->
          <ul id="login">
            <li><h3>NO-ROME LOGIN</h3></li>
            <li><h4>LOG IN TO YOUR ACCOUNT</h4></li>
            <li> 
              <p class="errorMsg"><p>
              <form action="includes/login.inc.php" method="POST">
                <label for="">USER NAME</label>
                <input type="text" name="uid" placeholder="USERNAME/E-MAIL" class="inp">
                <label for="">PASSWORD</label>
                <input type="password" name="pwd" placeholder="PASSWORD" class="inpp">
                <div>
                  <div>
                    <input type="checkbox" name="login" value="login"><span>KEEP ME LOGGED ON</span>
                  </div>
                  <p>Forgotten password</p>
                </div>
                <div class="btn-wrapper">
                  <!-- <button class="login-btn">LOGIN</button> -->
                  <button type="submit" name="submit" class="login-btn-active" disabled>LOGIN</button>
                </div>
              </form>
            </li>
          </ul>
        </div>
      </section>';
  <!-- Form Section END  -->
  
  <?php
    include_once 'footer.php';
  ?>

</body>
</html>

