<?php

session_start();

?>


<!-- MOBILE NAV -->
<div class="wrapper" id="navMobile">   
  <input type="checkbox" id="nav-toggle">
  <label for="nav-toggle">
    <span> &nbsp;</span>
  </label>
  <!-- <div class="mobileNav-bg">&nbsp;</div> -->
  <nav>
    <ul>
      <li><a href="../docs/about.php">About</a></li>
      <li><a href="../docs/tour.php">Tour</a></li>
      <li><a href="../docs/music.php">Music</a></li>
      <li><a href="../docs/news.php">News</a></li>
      <li><a href="../docs/gallery-videos.php ">Videos</a></li>
      <li><a href="../docs/gallery-photos.php">Photos</a></li>
      <?php
        if(isset($_SESSION['u_id'])) {
          // echo "<li><a>Logout</a></li>";
          echo '<li><form action="includes/logout.inc.php" method="POST">
                  <button type="submit" name="submit" class="logout-mobile-btn">Logout</button>
                </form></li>';
        } else {
          echo '<li><a href="../docs/login.php">Login</a></li>';
        }
      ?>
      <!-- <li><img src="../assets/icons/social-icon.png" alt="social icon" class="social-icon social-menu"></li> -->
    </ul>
  </nav>
</div>
<!-- MOBILE NAV END-->
<!-- Navigation Menu END -->