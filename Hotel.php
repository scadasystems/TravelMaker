<!DOCTYPE html>
<html class="no-js">
<!-- Head -->
<?php
   include 'commonPHP/commonHead.php'
?>

<body>
  <?php
   include 'commonPHP/Header.php'
  ?>
  <!-- end Header -->

  <!-- start banner Area -->
  <section class="about-banner relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
      <div class="row d-flex align-items-center justify-content-center">
        <div class="about-content col-lg-12">
          <h1 class="text-white" style="font-size:80px;font-family: 'Black Han Sans', sans-serif; font-weight:100;">
            Best Hotels
          </h1>
          <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="Hotel.php"> 호텔</a></p>
        </div>
      </div>
    </div>
  </section>
  <!-- End banner Area -->

  <!-- start Slider -->
    <div class="text">
      <p>키보드 방향키 중 </p>
      <p>
        <span class="word wisteria"> ← 을 누르면 이전으로 이동</span>
        <span class="word belize"> → 을 누르면 다음으로 이동</span>
        <!--     
    <span class="word pomegranate"></span>
    <span class="word green"></span>
    <span class="word midnight"></span> 
    -->
      </p>
      <p>합니다.</p>
    </div>
  <div class="carousel">
    <div class="carousel__control">
    </div>
    <div class="carousel__stage">
      <div class="spinner spinner--left">
        <div class="spinner__face js-active" data-bg="#27323c">
          <div class="content" data-type="iceland">
            <div class="content__left">
              <h1>ICELAND<br><span>EUROPE</span></h1>
            </div>
            <div class="content__right">
              <div class="content__main">
                <p>“As I flew north to begin my third circuit of Iceland in four years, I was slightly anxious. The number of visitors to Iceland has doubled in that period, and I feared this might mean a little less magic to go around. At the end of this trip, 6000km later, I'm thrilled to report that the magic levels remain high. It's found in glorious football victories and Viking chants, kayaking among icebergs, sitting with puffins under the midnight sun and crunching across brand-new lava fields.” </p>
                <p>– Carolyn Bain</p>
              </div>
              <h3 class="content__index">01</h3>
            </div>
          </div>
        </div>
        <div class="spinner__face" data-bg="#19304a">
          <div class="content" data-type="china">
            <div class="content__left">
              <h1>CHINA<br><span>ASIA</span></h1>
            </div>
            <div class="content__right">
              <div class="content__main">
                <p>“Its modern face is dazzling, but China is no one-trick pony. The world's oldest continuous civilisation isn't all smoked glass and brushed aluminium and while you won't be tripping over artefacts – three decades of round-the-clock development and rash town-planning have taken their toll – rich seams of antiquity await.”</p>
                <p>– Damian Harper</p>
              </div>
              <h3 class="content__index">02</h3>
            </div>
          </div>
        </div>
        <div class="spinner__face" data-bg="#2b2533">
          <div class="content" data-type="usa">
            <div class="content__left">
              <h1>USA<br><span>NORTH AMERICA</span></h1>
            </div>
            <div class="content__right">
              <div class="content__main">
                <p>“When it comes to travel, America has always floored me with its staggering range of possibilities. Not many other countries have so much natural beauty – mountains, beaches, rainforest, deserts, canyons, glaciers – coupled with fascinating cities to explore, an unrivaled music scene and all the things that make travel so rewarding (friendly locals, great restaurants and farmers markets, and plenty of quirky surprises).” </p>
                <p>– Regis St Louis</p>
              </div>
              <h3 class="content__index">03</h3>
            </div>
          </div>
        </div>
        <div class="spinner__face" data-bg="#312f2d">
          <div class="content" data-type="peru">
            <div class="content__left">
              <h1>PERU<br><span>SOUTH AMERICA</span></h1>
            </div>
            <div class="content__right">
              <div class="content__main">
                <p>“For me, Peru is the molten core of South America, a distillation of the oldest traditions and the finest building, weaving and art made by the most sophisticated cultures on the continent. In Peru the wildest landscapes – from frozen Andean peaks to the deep Amazon – help us re-forge our connection to the natural world. It is also a cultural stew, where diverse peoples live side by side, negotiating modern life with humor and aplomb. Beyond that, the cuisine alone makes it worth the trip. Every return is rich and surprising.”</p>
                <p>– Carolyn McCarthy</p>
              </div>
              <h3 class="content__index">04</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end slider -->

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

</body>

</html>
