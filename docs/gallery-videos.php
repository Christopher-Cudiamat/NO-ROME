<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1">   
  <title>No-Rome | Video</title>
  <link rel="stylesheet" href="../css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Orbitron:700,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:500" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="../assets/icons/no-rome-favicon.png"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <script src="../node_modules/jquery/dist/jquery.js"></script>
  <script src="../js/script.js"></script>
  <script src="../js/video.js"></script>
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
        <li><a href="../docs/gallery-videos.php" class="active-menu">Videos</a></li>
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

  <div>
    <video src=""></video>
  </div>
  
  <!-- Video Full Section START    -->
  <section id="gallery-video-full">

    <div class="video-container">
      <div class="video-player show-controls">
        <h2 class="video-title">NARCISSIST FEAT 1975<span class="share"><h5>SHARE</h5></span> </h2>
        <video>
          <source src="../assets/videos/vid2.mp4#t=1">
        </video>
        <div class="controls active-control">
          <!-- playback controls -->
          <div class="playback-ctrl">
            <button class="btn play-pause-btn play">
              <i class="fa fa-play"></i>
              <i class="fa fa-pause"></i>
            </button>  
          </div>
          <!-- seekBar controls -->
          <span class="start-time">00:00</span>
          <div class="seek-bar-time">
            <div class="progress-bar-time"></div>
          </div>
          <!-- volume controls -->
          <div class="volume-ctrl">
            <div class="icon">
              <i class="fa fa-volume-up"></i>
            </div>
            <div class="seek-bar">
              <div class="progress-bar"></div>
            </div>
          </div> 

          <!-- fullscreen controls -->
          <div class="full-screen-ctrl">
            <button class="full-screen">
              <i class="fa fa-expand"></i>
            </button>
          </div>
        </div>
      </div>
      <!-- VIDEO PLAYER END-->


      

      <?php
      if(isset($_SESSION['u_id'])) {
        echo'<!-- COMMENT SECTION START -->
         <div id="comment-section">
          <form action="" method="">
            <div>
              <textarea name="comments" id="comments" style="font-family:sans-serif;font-size:1.2em;">
                Hey... say something!
              </textarea>
            </div>
            <button type="submit">Comment</button>
          </form>
          <button>Read All Comments</button>
        </div>
        <!-- COMMENT SECTION END-->';
      }else {
        echo'<!-- COMMENT SECTION START -->
         <div id="comment-section-disable">
          <form action="" method="">
            <div>
              <textarea name="comments" id="comments" style="font-family:sans-serif;font-size:1.2em;">
                Hey... say something!
              </textarea>
            </div>
            <button type="submit">Comment</button>
          </form>
          <button>Read All Comments</button>
        </div>
        <!-- COMMENT SECTION END-->';
      }
    ?>
  </div>

  <div class="video-container">
      <div class="video-player show-controls">
        <h2 class="video-title">DO IT AGAIN<span class="share"><h5>SHARE</h5></span> </h2>
        <video>
          <source src="../assets/videos/vid5.mp4#t=1">
        </video>
        <div class="controls active-control">
          <!-- playback controls -->
          <div class="playback-ctrl">
            <button class="btn play-pause-btn play">
              <i class="fa fa-play"></i>
              <i class="fa fa-pause"></i>
            </button>  
          </div>
          <!-- seekBar controls -->
          <span class="start-time">00:00</span>
          <div class="seek-bar-time">
            <div class="progress-bar-time"></div>
          </div>
          <!-- volume controls -->
          <div class="volume-ctrl">
            <div class="icon">
              <i class="fa fa-volume-up"></i>
            </div>
            <div class="seek-bar">
              <div class="progress-bar"></div>
            </div>
          </div> 

          <!-- fullscreen controls -->
          <div class="full-screen-ctrl">
            <button class="full-screen">
              <i class="fa fa-expand"></i>
            </button>
          </div>
        </div>
      </div>
      <!-- VIDEO PLAYER END-->


      

      <?php
      if(isset($_SESSION['u_id'])) {
        echo'<!-- COMMENT SECTION START -->
         <div id="comment-section">
          <form action="" method="">
            <div>
              <textarea name="comments" id="comments" style="font-family:sans-serif;font-size:1.2em;">
                Hey... say something!
              </textarea>
            </div>
            <button type="submit">Comment</button>
          </form>
          <button>Read All Comments</button>
        </div>
        <!-- COMMENT SECTION END-->';
      }else {
        echo'<!-- COMMENT SECTION START -->
         <div id="comment-section-disable">
          <form action="" method="">
            <div>
              <textarea name="comments" id="comments" style="font-family:sans-serif;font-size:1.2em;">
                Hey... say something!
              </textarea>
            </div>
            <button type="submit">Comment</button>
          </form>
          <button>Read All Comments</button>
        </div>
        <!-- COMMENT SECTION END-->';
      }
    ?>
  </div>


  <div class="video-container">
      <div class="video-player show-controls">
        <h2 class="video-title">NARCISSIST FEAT 1975<span class="share"><h5>SHARE</h5></span> </h2>
        <video>
          <source src="../assets/videos/vid1.mp4#t=3">
        </video>
        <div class="controls active-control">
          <!-- playback controls -->
          <div class="playback-ctrl">
            <button class="btn play-pause-btn play">
              <i class="fa fa-play"></i>
              <i class="fa fa-pause"></i>
            </button>  
          </div>
          <!-- seekBar controls -->
          <span class="start-time">00:00</span>
          <div class="seek-bar-time">
            <div class="progress-bar-time"></div>
          </div>
          <!-- volume controls -->
          <div class="volume-ctrl">
            <div class="icon">
              <i class="fa fa-volume-up"></i>
            </div>
            <div class="seek-bar">
              <div class="progress-bar"></div>
            </div>
          </div> 

          <!-- fullscreen controls -->
          <div class="full-screen-ctrl">
            <button class="full-screen">
              <i class="fa fa-expand"></i>
            </button>
          </div>
        </div>
      </div>
      <!-- VIDEO PLAYER END-->


      

      <?php
      if(isset($_SESSION['u_id'])) {
        echo'<!-- COMMENT SECTION START -->
         <div id="comment-section">
          <form action="" method="">
            <div>
              <textarea name="comments" id="comments" style="font-family:sans-serif;font-size:1.2em;">
                Hey... say something!
              </textarea>
            </div>
            <button type="submit">Comment</button>
          </form>
          <button>Read All Comments</button>
        </div>
        <!-- COMMENT SECTION END-->';
      }else {
        echo'<!-- COMMENT SECTION START -->
         <div id="comment-section-disable">
          <form action="" method="">
            <div>
              <textarea name="comments" id="comments" style="font-family:sans-serif;font-size:1.2em;">
                Hey... say something!
              </textarea>
            </div>
            <button type="submit">Comment</button>
          </form>
          <button>Read All Comments</button>
        </div>
        <!-- COMMENT SECTION END-->';
      }
    ?>
  </div>
    
  </section>
  <!-- Video Full Section END  -->

  <!-- Footer Section START -->
  <?php
    include_once 'footer.php';
  ?>
  <!-- Footer Section End -->
</body>

</html>