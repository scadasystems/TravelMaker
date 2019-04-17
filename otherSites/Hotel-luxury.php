<!DOCTYPE html>
<html class="no-js">
<!-- Head -->
<?php
   include '../commonPHP/commonHead.php'
?>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
</head>

<body>
  <?php
   include '../commonPHP/Header.php'
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
                            document.write((new Date().getMonth() + 1) + '월 ');
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
                                <p><button class="btn-hotel">호텔 웹사이트 방문</button></p>
                            </div>
                            <h3 class="content__index">01</h3>
                        </div>
                    </div>
                </div>
                <div class="spinner__face" data-bg="#19304a">
                    <div class="content" data-type="belvedere">
                        <div class="content__left">
                            <h1>Hotel Belvedere<br><span>리치오네, 이탈리아</span></h1>
                        </div>
                        <div class="content__right">
                            <div class="content__main">
                                <p>
                                    “환상적인 분위기, 훌륭한 직원들, 좋은 가이드는 물론 자전거도 즐길 수 있어 계속 다시 찾고 싶어요. 냉정한 비평가마저 만족시킬 수 있는 것이 성공의 공식이죠.”
                                </p>
                                <p><button class="btn-hotel">호텔 웹사이트 방문</button></p>
                            </div>
                            <h3 class="content__index">02</h3>
                        </div>
                    </div>
                </div>
                <div class="spinner__face" data-bg="#2b2533">
                    <div class="content" data-type="viroth">
                        <div class="content__left">
                            <h1>Viroth's Hotel<br><span>시엠립, 캄보디아</span></h1>
                        </div>
                        <div class="content__right">
                            <div class="content__main">
                                <p>
                                    “세련되고 고요한, 푸르고 럭셔리한 오아시스. 친절하게 도움을 주면서도 지나치지 않은 서비스. 비로스는 장엄한 사원을 볼 수 있는 멋진 장소에 그치지 않고 그 자체로도 갈 만한 곳입니다.”
                                </p>
                                <p><button class="btn-hotel">호텔 웹사이트 방문</button></p>
                            </div>
                            <h3 class="content__index">03</h3>
                        </div>
                    </div>
                </div>
                <div class="spinner__face" data-bg="#312f2d">
                    <div class="content" data-type="kenting">
                        <div class="content__left">
                            <h1>Kenting Amanda Hotel<br><span>Hengchun, 핑둥</span></h1>
                        </div>
                        <div class="content__right">
                            <div class="content__main">
                                <p>“...”</p>
                                <p><button class="btn-hotel">호텔 웹사이트 방문</button></p>
                            </div>
                            <h3 class="content__index">04</h3>
                        </div>
                    </div>
                </div>
                <div class="spinner__face" data-bg="#312f2d">
                    <div class="content" data-type="tux">
                        <div class="content__left">
                            <h1>Hotel Alpin Spa Tuxerhof<br><span>턱스, 오스트리아</span></h1>
                        </div>
                        <div class="content__right">
                            <div class="content__main">
                                <p>“...”</p>
                                <p><button class="btn-hotel">호텔 웹사이트 방문</button></p>
                            </div>
                            <h3 class="content__index">05</h3>
                        </div>
                    </div>
                </div>
                <div class="spinner__face" data-bg="#312f2d">
                    <div class="content" data-type="inn">
                        <div class="content__left">
                            <h1>French Quarter Inn<br><span>찰스턴, 사우스캐롤라이나</span></h1>
                        </div>
                        <div class="content__right">
                            <div class="content__main">
                                <p>“위치는 편리하고 객실은 깔끔하며 와인, 치즈, 쿠키를 비롯한 다른 서프라이즈 역시 훌륭합니다. 베개도 직접 선택할 수 있었고요."</p>
                                <p><button class="btn-hotel">호텔 웹사이트 방문</button></p>
                            </div>
                            <h3 class="content__index">06</h3>
                        </div>
                    </div>
                </div>
                <div class="spinner__face" data-bg="#312f2d">
                    <div class="content" data-type="pedregal">
                        <div class="content__left">
                            <h1>The Resort at Pedregal<br><span>카보 산 루카스, 멕시코</span></h1>
                        </div>
                        <div class="content__right">
                            <div class="content__main">
                                <p>“..."</p>
                                <p><button class="btn-hotel">호텔 웹사이트 방문</button></p>
                            </div>
                            <h3 class="content__index">07</h3>
                        </div>
                    </div>
                </div>
                <div class="spinner__face" data-bg="#312f2d">
                    <div class="content" data-type="palacio">
                        <div class="content__left">
                            <h1>Belmond Palacio Nazarenas<br><span>쿠스코, 페루</span></h1>
                        </div>
                        <div class="content__right">
                            <div class="content__main">
                                <p>“..."</p>
                                <p><button class="btn-hotel">호텔 웹사이트 방문</button></p>
                            </div>
                            <h3 class="content__index">08</h3>
                        </div>
                    </div>
                </div>
                <div class="spinner__face" data-bg="#312f2d">
                    <div class="content" data-type="caves">
                        <div class="content__left">
                            <h1>Kayakapi Premium Caves<br><span>위르귀프, 터키</span></h1>
                        </div>
                        <div class="content__right">
                            <div class="content__main">
                                <p>
                                    “최고입니다!!!”<br>
                                    “완벽한 호텔”
                                </p>
                                <p><button class="btn-hotel">호텔 웹사이트 방문</button></p>
                            </div>
                            <h3 class="content__index">09</h3>
                        </div>
                    </div>
                </div>
                <div class="spinner__face" data-bg="#312f2d">
                    <div class="content" data-type="siesta">
                        <div class="content__left">
                            <h1>Hanoi La Siesta Hotel<br><span>하노이, 베트남</span></h1>
                        </div>
                        <div class="content__right">
                            <div class="content__main">
                                <p>
                                    “서비스, 객실 그리고 음식에 완전히 반했습니다. 평가에서 가능하면 10개라도 별을 주고 싶네요.”
                                </p>
                                <p><button class="btn-hotel">호텔 웹사이트 방문</button></p>
                            </div>
                            <h3 class="content__index">10</h3>
                        </div>
                    </div>
                </div>
                <div class="spinner__face" data-bg="#312f2d">
                    <div class="content" data-type="retreat">
                        <div class="content__left">
                            <h1>Golden Temple Retreat<br><span>시엠립, 캄보디아</span></h1>
                        </div>
                        <div class="content__right">
                            <div class="content__main">
                                <p>
                                    “Amazing hotel ever ”
                                    “만족만족만족”
                                </p>
                                <p><button class="btn-hotel">호텔 웹사이트 방문</button></p>
                            </div>
                            <h3 class="content__index">11</h3>
                        </div>
                    </div>
                </div>
                <div class="spinner__face" data-bg="#312f2d">
                    <div class="content" data-type="12">
                        <div class="content__left">
                            <h1>Quinta Jardins do Lago<br><span>푼샬, 포르투갈</span></h1>
                        </div>
                        <div class="content__right">
                            <div class="content__main">
                                <p>
                                    “...”
                                </p>
                                <p><button class="btn-hotel">호텔 웹사이트 방문</button></p>
                            </div>
                            <h3 class="content__index">12</h3>
                        </div>
                    </div>
                </div>
                <div class="spinner__face" data-bg="#312f2d">
                    <div class="content" data-type="13">
                        <div class="content__left">
                            <h1>The Oberoi Rajvilas<br><span>자이푸르, 인도</span></h1>
                        </div>
                        <div class="content__right">
                            <div class="content__main">
                                <p>
                                    “...”
                                </p>
                                <p><button class="btn-hotel">호텔 웹사이트 방문</button></p>
                            </div>
                            <h3 class="content__index">13</h3>
                        </div>
                    </div>
                </div>
                <div class="spinner__face" data-bg="#312f2d">
                    <div class="content" data-type="14">
                        <div class="content__left">
                            <h1>Hotel Amira Istanbul<br><span>이스탄불, 터키</span></h1>
                        </div>
                        <div class="content__right">
                            <div class="content__main">
                                <p>
                                    “마주쳤던 모든 직원이 친절했고 잘 응대해주었어요. 옥상 데크는 평화로운 오아시스 같은 곳이구요. 와인 한 잔을 즐기면서 아름다운 마르마라해를 즐기기에 완벽한 곳입니다.”
                                </p>
                                <p><button class="btn-hotel">호텔 웹사이트 방문</button></p>
                            </div>
                            <h3 class="content__index">14</h3>
                        </div>
                    </div>
                </div>
                <div class="spinner__face" data-bg="#312f2d">
                    <div class="content" data-type="15">
                        <div class="content__left">
                            <h1>Hotel 41<br><span>런던, 영국</span></h1>
                        </div>
                        <div class="content__right">
                            <div class="content__main">
                                <p>
                                    “숙박과 서비스 모두 훌륭합니다.”<br>
                                    “놀라운 서비스 덕에 좋은 시간을 보냈습니다!!! ”
                                </p>
                                <p><button class="btn-hotel">호텔 웹사이트 방문</button></p>
                            </div>
                            <h3 class="content__index">15</h3>
                        </div>
                    </div>
                </div>
                <!-- end Best Hotel 15-->
            </div>
        </div>
    </div>
    <!-- end slider -->
    <!-- start Category title -->
    <div class="category-section">
        <div class="category-title">
            <div class="flip-container">
                <div class="flipper">
                    <p class="word1"><span class="blue">여행</span><span class="orange">의 </span><span class="red">모든것</span></p>
                    <p class="word2"><span class="blue">Tra</span><span class="orange">vel </span><span class="red">Maker</span></p>
                </div>
            </div>
            <div class="word3">
                <span>에서 인기많은 호텔 카테고리 더 보기</span>
            </div>
        </div> <!-- end Category title-->
        <!-- start Category Grid -->
        <div class="container">
            <div class="row">
                <!-- 1. -->
                <figure class="lulzmGrid col-sm">
                    <!-- Label -->
                    <div class="lulzmGrid-img" style="background-image: url(img/Hotel/hotel-best.jpg);">
                        <div class="lulzmGrid-label">Best Hotel</div>
                        <div class="lulzmGrid-img-cover"></div>
                    </div>
                    <!-- end Label -->
                    <figcaption>
                        <h3>Best Hotel</h3>
                        <p>2019년도 1분기 베스트 호텔을 보러 가고 싶나요?</p>
                        <button class="lulzm-readmore-button" type="button" onclick="location.href='Hotel.php' "><span>Go ! </span></button>
                    </figcaption>
                </figure>
                <figure class="lulzmGrid col-sm">
                    <!-- Label -->
                    <div class="lulzmGrid-img" style="background-image: url(img/Hotel/hotel-luxury.jpg);">
                        <div class="lulzmGrid-label">Luxury</div>
                        <div class="lulzmGrid-img-cover"></div>
                    </div>
                    <!-- end Label -->
                    <figcaption>
                        <h3>Luxury</h3>
                        <p>최고의 럭셔리한 호텔을 찾으시나요?</p>
                        <button class="lulzm-readmore-button" type="button" onclick="location.href='otherSites/Hotel-luxury.php' "><span>Go ! </span></button>
                    </figcaption>
                </figure>
                <figure class="lulzmGrid col-sm">
                    <!-- Label -->
                    <div class="lulzmGrid-img" style="background-image: url(img/Hotel/hotel-romantic.jpg);">
                        <div class="lulzmGrid-label">Romantic</div>
                        <div class="lulzmGrid-img-cover"></div>
                    </div>
                    <!-- end Label -->
                    <figcaption>
                        <h3>Romantic</h3>
                        <p>사랑하는 사람과 최고의 추억을 만들고 싶은가요?</p>
                        <button class="lulzm-readmore-button" type="button" onclick="location.href='otherSites/Hotel-romantic.php' "><span>Go ! </span></button>
                    </figcaption>
                </figure>
            </div>
            <div class="row">
                <figure class="lulzmGrid col-sm">
                    <!-- Label -->
                    <div class="lulzmGrid-img" style="background-image: url(img/Hotel/hotel-service.jpg);">
                        <div class="lulzmGrid-label">Service</div>
                        <div class="lulzmGrid-img-cover"></div>
                    </div>
                    <!-- end Label -->
                    <figcaption>
                        <h3>Service</h3>
                        <p>여행객들이 추천하는 서비스 좋은 호텔을 찾으시나요?</p>
                        <button class="lulzm-readmore-button" type="button" onclick="location.href='otherSites/Hotel-service.php' "><span>Go ! </span></button>
                    </figcaption>
                </figure>
                <figure class="lulzmGrid col-sm">
                    <!-- Label -->
                    <div class="lulzmGrid-img" style="background-image: url(img/Hotel/hotel-goodvalue.jpg);">
                        <div class="lulzmGrid-label">Good Value</div>
                        <div class="lulzmGrid-img-cover"></div>
                    </div>
                    <!-- end Label -->
                    <figcaption>
                        <h3>Good Value</h3>
                        <p>가성비가 좋은 호텔! 여기 있습니다.</p>
                        <button class="lulzm-readmore-button" type="button" onclick="location.href='otherSites/Hotel-goodvalue.php' "><span>Go ! </span></button>
                    </figcaption>
                </figure>
                <figure class="lulzmGrid col-sm">
                    <!-- Label -->
                    <div class="lulzmGrid-img" style="background-image: url(img/Hotel/hotel-family.jpg);">
                        <div class="lulzmGrid-label">Family</div>
                        <div class="lulzmGrid-img-cover"></div>
                    </div>
                    <!-- end Label -->
                    <figcaption>
                        <h3>Family</h3>
                        <p>가족들과 오붓한 시간을 보내시려고요?</p>
                        <button class="lulzm-readmore-button" type="button" onclick="location.href='otherSites/Hotel-family.php' "><span>Go ! </span></button>
                    </figcaption>
                </figure>
            </div>
            <div class="row">
                <figure class="lulzmGrid col-sm">
                    <!-- Label -->
                    <div class="lulzmGrid-img" style="background-image: url(img/Hotel/hotel-small.jpg);">
                        <div class="lulzmGrid-label">Small</div>
                        <div class="lulzmGrid-img-cover"></div>
                    </div>
                    <!-- end Label -->
                    <figcaption>
                        <h3>Small Hotel</h3>
                        <p>작지만 행복을 만들기에는 충분합니다.</p>
                        <button class="lulzm-readmore-button" type="button" onclick="location.href='otherSites/Hotel-smallhotel.php' "><span>Go ! </span></button>
                    </figcaption>
                </figure>
                <figure class="lulzmGrid col-sm">
                    <!-- Label -->
                    <div class="lulzmGrid-img" style="background-image: url(img/Hotel/hotel-motel.jpg);">
                        <div class="lulzmGrid-label">Motel</div>
                        <div class="lulzmGrid-img-cover"></div>
                    </div>
                    <!-- end Label -->
                    <figcaption>
                        <h3>Motel / B&B</h3>
                        <p>숙소에 돈을 투자하고 싶지 않다고요?</p>
                        <button class="lulzm-readmore-button" type="button" onclick="location.href='otherSites/Hotel-motel.php' "><span>Go ! </span></button>
                    </figcaption>
                </figure>
                <figure class="lulzmGrid col-sm">
                    <!-- Label -->
                    <div class="lulzmGrid-img" style="background-image: url(img/Hotel/hotel-inclusive.jpeg);">
                        <div class="lulzmGrid-label">All inclusive Hotel</div>
                        <div class="lulzmGrid-img-cover"></div>
                    </div>
                    <!-- end Label -->
                    <figcaption>
                        <h3>All inclusive Hotel</h3>
                        <p>All Inclusive : 조식,중식,석식 세끼와 함께 여러가지 제공</p>
                        <button class="lulzm-readmore-button" type="button" onclick="location.href='otherSites/Hotel-inclusive.php'"><span>Go ! </span></button>
                    </figcaption>
                </figure>
            </div>
        </div> <!-- end Category Grid -->
    </div>
    <!-- Start site category title -->
    <div class="header wrap">
        <h2 class="background double"><span>다른 것들이 필요하신가요? <span style="color: orange">Travel Maker 카테고리 더 보기</span></span></h2>
    </div> <!-- end site category title-->
    <!--  -->
    <!-- start site category Grid -->
    <div class="container">
        <div class="row">
            <!-- 1. -->
            <figure class="lulzmGrid col-sm">
                <!-- Label -->
                <div class="lulzmGrid-img" style="background-image: url(img/Hotel/hotels-main.jpg);">
                    <div class="lulzmGrid-label">Best Hotel</div>
                    <div class="lulzmGrid-img-cover"></div>
                </div>
                <!-- end Label -->
                <figcaption>
                    <h3>Best Hotel</h3>
                    <p>2019년도 1분기 베스트 호텔을 보러 가고 싶나요?</p>
                    <button class="lulzm-readmore-button" type="button" onclick="location.href='Hotel.php' "><span>Go ! </span></button>
                </figcaption>
            </figure>
            <figure class="lulzmGrid col-sm">
                <!-- Label -->
                <div class="lulzmGrid-img" style="background-image: url(img/experience/experience-main.jpg);">
                    <div class="lulzmGrid-label">Experience</div>
                    <div class="lulzmGrid-img-cover"></div>
                </div>
                <!-- end Label -->
                <figcaption>
                    <h3>Best Experience</h3>
                    <p>재미있고 추억의 경험을 얻고 싶으세요?</p>
                    <button class="lulzm-readmore-button" type="button" onclick="location.href='experience.php' "><span>Go ! </span></button>
                </figcaption>
            </figure>
            <figure class="lulzmGrid col-sm">
                <!-- Label -->
                <div class="lulzmGrid-img" style="background-image: url(img/Food/Food-banner.png);">
                    <div class="lulzmGrid-label">Best Food</div>
                    <div class="lulzmGrid-img-cover"></div>
                </div>
                <!-- end Label -->
                <figcaption>
                    <h3>Best Food</h3>
                    <p>현지에 유명한 요리를 드시고 싶으신가요?</p>
                    <button class="lulzm-readmore-button" type="button" onclick="location.href='Food.php' "><span>Go ! </span></button>
                </figcaption>
            </figure>
        </div>
        <div class="row">
            <figure class="lulzmGrid col-sm">
                <!-- Label -->
                <div class="lulzmGrid-img" style="background-image: url(img/Airport/airport.jpg);">
                    <div class="lulzmGrid-label">Best Airport</div>
                    <div class="lulzmGrid-img-cover"></div>
                </div>
                <!-- end Label -->
                <figcaption>
                    <h3>Best Airport</h3>
                    <p>수많은 항공사 중 여행객들이 추천하는 항공사는?</p>
                    <button class="lulzm-readmore-button" type="button" onclick="location.href='Airport.php' "><span>Go ! </span></button>
                </figcaption>
            </figure>
            <figure class="lulzmGrid col-sm">
                <!-- Label -->
                <div class="lulzmGrid-img" style="background-image: url(img/main/main-banner.jpg);">
                    <div class="lulzmGrid-label">2019 BEST</div>
                    <div class="lulzmGrid-img-cover"></div>
                </div>
                <!-- end Label -->
                <figcaption>
                    <h3>2019 BEST</h3>
                    <p>
                        <script>
                            document.write(new Date().getFullYear() + '년 ');
                            document.write((new Date().getMonth() + 1) + '월 ');
                            document.write(new Date().getDate() + '일 ');
                        </script>
                        - Best를 알고 싶나요?
                    </p>
                    <button class="lulzm-readmore-button" type="button" onclick="location.href='2019-best.php' "><span>Go ! </span></button>
                </figcaption>
            </figure>
            <figure class="lulzmGrid col-sm">
                <!-- Label -->
                <div class="lulzmGrid-img" style="background-image: url(img/our_team2.jpg);">
                    <div class="lulzmGrid-label">Help Center</div>
                    <div class="lulzmGrid-img-cover"></div>
                </div>
                <!-- end Label -->
                <figcaption>
                    <h3>Help Center</h3>
                    <p>저희한테 궁금한 점이 있으신가요?</p>
                    <button class="lulzm-readmore-button" type="button" onclick="location.href='contact.php' "><span>Go ! </span></button>
                </figcaption>
            </figure>
        </div>
    </div> <!-- end site category Grid -->
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
