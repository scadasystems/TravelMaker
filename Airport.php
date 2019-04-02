<!DOCTYPE html>
<html class="no-js">
<!-- Head -->
<link rel="stylesheet" href="css/airport.css">
<?php
   include 'commonPHP/commonHead.php'
?>

<body>
  <?php
   include 'commonPHP/Header.php'
  ?>
  <!-- end Header -->

  <!-- start banner Area -->
  <section class="Airport-banner relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
      <div class="row d-flex align-items-center justify-content-center">
        <div class="about-content col-lg-12">
          <h1 class="text-white" style="font-size:80px;font-family: 'Black Han Sans', sans-serif; font-weight:100;">
            Best Airport
          </h1>
          <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="Airport.php"> 항공사</a></p>
        </div>
      </div>
    </div>
  </section>
  <!-- End banner Area -->

  <!-- star list Area -->
  <div class="container">
    <div class="text" style="margin-left:0; margin-top:50px">
      <p style="margin-left:0">Airline Top20</p>
    </div>
    <div id="item-list">
      <ul>
        <li>
          <a class="expand_airline">
            <div class="right-arrow">+</div>
            <div class="icon_airline london"></div>
            <h2>London</h2>
            <span>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</span>
          </a>

          <div class="detail">
            <div><span>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</span></div><br />

            <span class="button">Connect</span>
          </div>
        </li>
        <li>
          <a class="expand_airline">
            <div class="right-arrow">+</div>
            <div class="icon_airline newyork"></div>
            <h2>New York</h2>
            <span>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat</span>
          </a>

          <div class="detail">
            <div><span>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</span></div><br />

            <span class="button">Connect</span>
          </div>
        </li>
        <li>
          <a class="expand_airline">
            <div class="right-arrow">+</div>
            <div class="icon_airline paris"></div>
            <h2>Paris</h2>
            <span>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum</span>
          </a>

          <div class="detail">
            <div><span>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</span></div><br />

            <span class="button">Connect</span>
          </div>
        </li>
        <li>
          <a class="expand_airline">
            <div class="right-arrow">+</div>
            <div class="icon_airline newyork"></div>
            <h2>New York</h2>
            <span>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat</span>
          </a>

          <div class="detail">
            <div><span>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</span></div><br />

            <span class="button">Connect</span>
          </div>
        </li>
        <li>
          <a class="expand_airline">
            <div class="right-arrow">+</div>
            <div class="icon_airline newyork"></div>
            <h2>New York</h2>
            <span>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat</span>
          </a>

          <div class="detail">
            <div><span>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</span></div><br />

            <span class="button">Connect</span>
          </div>
        </li>

      </ul>
    </div>
    <nav class="pagination-container">
      <div class="pagination">
        <a class="pagination-newer" href="#">PREV</a>
        <span class="pagination-inner">
          <a class="pagination-active" href="#">1</a>
          <a href="#">2</a>
          <a href="#">3</a>
          <a href="#">4</a>
          <a href="#">5</a>
        </span>
        <a class="pagination-older" href="#">NEXT</a>
      </div>
    </nav>
  </div>
  
  <script>
    

  </script>
  <!-- End list Area -->
  <!-- start footer Area -->
  <?php
      include 'commonPHP/footer.php';
   ?>
  <!-- End footer Area -->
  <!-- Script -->
  <script src="js/vendor/jquery-2.2.4.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/vendor/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/easing.min.js"></script>
  <script src="js/hoverIntent.js"></script>
  <script src="js/superfish.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/main.js"></script>
  <script src="js/airport.js"></script>
  
</body>

</html>
