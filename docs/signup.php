
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


  <section id="infoSignUp">
    <div class="container-s container">
      <div>
        <h3>SIGN UP</h3>
        <p>GUEST REGISTRATION, IT'S FREE - No membership required. You can always upgrade to a Ten Club membership at a later time. Having a *Non-Member account gives you access to non-member items in the store and NO ROME News & Product Emails.</p>
      </div>

      <div class="container-xs horizontalLine">
        <hr>
      </div>

      <div>
        <h3>REGISTRATION INFORMATION</h3>
        <p>Please provide a valid email address. All e-mails from the system will be sent to this address. The e-mail address is not made public but will be our primary means of contacting you for all matters regarding your account (including any ticketing opportuniti</p>
        <p>For your security, your password should be 6 characters or more; contain numbers; and a mix of lowercase and uppercase letters. Please remember your password and never share it with anyone. NO ROME will never ask you for your password.</p>
      </div>
    </div>
  </section>
  
  <!-- Form Section START  -->  
  <section id="signUpForm">
    <div>
      <form action="includes/signup.inc.php" method="POST">
  
        <input type="text" name="first" placeholder="First Name">
        
        <input type="text" name="last" placeholder="Last Name">
        
        <input type="text" name="email" placeholder="E-mail">
      
        <input type="text" name="uid" placeholder="User Name">
  
        <input type="password" name="pwd" placeholder="Password">
        <button type="submit" name="submit" class="createAccount">CREATE MY NO ROME ACCOUNT</button>
      </form>
    </div>
  </section> 
  <!-- Form Section END  -->

  <?php
    include_once 'footer.php';
  ?>
</body>
</html>

