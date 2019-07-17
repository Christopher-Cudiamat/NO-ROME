<!-- Footer Section START -->

<footer  id="footer">
    <div>
      <!-- Sign Up START-->
      <?php
          if(isset($_SESSION['u_id'])) {
            echo'<ul class="sign-up">
                  <li><h5>USER ACCOUNT LOGGED IN: </h5></li>
                  <li><h2>'.$_SESSION['u_uid'].'</h2></li>
                </ul>'; 
          } else {
            echo '<ul class="sign-up">
                    <li><h5>JOIN THE NO ROME SQUAD</h5></li>
                    <li><a href="../docs/login.php"><h2>SIGN UP TODAY</h2></a></li>
                  </ul>';
          }
        ?>
      <!-- Sign Up END-->

      <!-- Subscribe Form SECTION START-->
      <ul class="subscribe-section">
        <li><h5>SUBSCRIBE FOR MORE UODATES</h5></li>
        <form action="">
          <input type="text" placeholder="Email" id="emailSubscribe" >
          <button type="submit">SUBSCRIBE</button>
        </form>
      </ul>
      <!-- Subscribe Form SECTION END-->

      <!-- Social Media Footer SECTION -->
      <ul class="social-footer">
        <li><h5>SOCIAL MEDIA:</h5></li>
        <li>
          <a href=""><img src="../assets/icons/../icons/social-icon-facebook.png" alt="social media small icon"></a>
        </li>  
        <li>
          <a href=""><img src="../assets/icons/social-icon-instagram.png" alt="social media small icon"></a>
        </li>
        <li>
          <a href=""><img src="../assets/icons/social-icon-tumbler.png" alt="social media small icon"></a>
        </li>
        <li>
          <a href=""><img src="../assets/icons/social-icon-tweeter.png" alt="social media small icon"></a>
        </li>
        <li>
          <a href=""><img src="../assets/icons/social-icon-youtube.png" alt="social media small icon"></a>
        </li>
      </ul>
    </div>
    <!-- Sitemap Footer SECTION -->
    <ul class="sitemap">
      <!-- <li>
        <img  src="../assets/icons/norome-nav-logo-white.png" alt="no-rome image footer" class="logo-footer">
      </li> -->
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Tour</a></li>
      <li><a href="#">Music</a></li>
      <li><a href="#">Gallery</a></li>
      <li><a href="#">Login</a></li>
    </ul>
    <!-- Footer Logo SECTION -->
    <ul class="footer-logo">
      <li>
        <img  src="../assets/icons/norome-nav-logo-white.png" alt="no-rome image footer" class="logo-footer">
      </li>
    </ul>
  </footer>
  <!-- Footer Section End -->