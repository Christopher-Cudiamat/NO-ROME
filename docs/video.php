<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1">   
  <title>No-Rome | Home</title>
  <link rel="stylesheet" href="../css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Orbitron:700,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:500" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald:700" rel="stylesheet">
  <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">
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

  <div>
    <video src=""></video>
  </div>
  
  <!-- Video Full Section START    -->
  <section id="gallery-video-full">

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

    <div class="video-player show-controls">
      <h2 class="video-title">BLUE JEANS<span class="share"><h5>SHARE</h5></span> </h2>
      <video>
        <source src="../assets/videos/vid1.mp4#t=5">
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
    
  </section>
  <!-- Video Full Section END  -->

  <?php
    include_once 'footer.php';
  ?>
</body>

</html>