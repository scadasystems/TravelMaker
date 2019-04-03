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

  <!--================ Start banner section =================-->
  <section class="home-banner-area relative">
    <div class="container-fluid">
      <div class="row d-flex align-items-center justify-content-center">
        <div class="header-right col-lg-6 col-md-6">
          <h1>
            베스트 호텔 <br>Top 20<br>in the world
          </h1>
          <p class="pt-20">
            <script>
              document.write(new Date().getFullYear() + '년 ');

            </script>
            <script>
              document.write((new Date().getMonth() + 1) + '월 ');

            </script>
            <script>
              document.write(new Date().getDate() + '일 ');

            </script>
            까지<br>전 세계 여행자들이 추천한 여행지를 보여드립니다~
          </p>
          <a href="#go-slide" class="main_btn">
            보러가기
            <img src="img/next.png" alt="">
          </a>
        </div>

        <div class="col-lg-6 col-md-6 header-left">
          <div class="">
            <img class="img-fluid w-100" src="img/banner/Tulemar%20Bungalows.jpg">
          </div>
          <div class="video-popup d-flex align-items-center">
            <a class="play-video video-play-button animate" href="https://www.youtube.com/watch?v=C1lAmdD0XGI" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s">
              <span></span>
            </a>
            <div class="watch">
              <h5 style="padding: 5px; background-color: rgb(0, 0, 0, 0.3)">Watch Intro Video</h5>
              <p style="padding: 5px; background-color: rgb(0, 0, 0, 0.3)">Now Top 1 hotel - Tulemar Bungalows & Villas</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End banner section =================-->
  <div id="go-slide"></div>
  <!-- start Slider -->
  <div class="text">
    <p>키보드 방향키 중 </p>
    <p>
      <span class="word wisteria"> ← 을 누르면 이전으로 이동</span>
      <span class="word belize"> → 을 누르면 다음으로 이동</span>
    </p>
    <p>합니다.</p>
  </div>
  <div class="carousel">
    <div class="carousel__control">
    </div>
    <div class="carousel__stage">
      <div class="spinner spinner--left">
        <div class="spinner__face js-active" data-bg="#27323c">
          <div class="content" data-type="tulemar">
            <div class="content__left">
              <h1>Tulemar Bungalows<br><span>마누엘 안토니오, 코스타리카</span></h1>
            </div>
            <div class="content__right">
              <div class="content__main">
                <p>“완벽한 휴가. 가장 좋았던 부분은 그저 베란다에서 쉬면서 바다를 바라보고 날아가는 앵무새를 보는 것이었습니다.” </p>
                <!-- 버튼 넣기 -->
                <p><button class="btn-hotel">이동하기</button></p>
              </div>
              <h3 class="content__index">01</h3>
            </div>
          </div>
        </div>
        <!-- 베스트 호텔 top 20-->
        
        
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
