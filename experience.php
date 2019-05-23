<!DOCTYPE html>
<html class="no-js">
<!-- Head -->
<link rel="stylesheet" href="css/experience.css">
<link rel="stylesheet" type="text/css" href="css/base.css" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/modal-video.min.css">
<script src="js/textAnimated.js"></script>
<!--  slide view  -->
<link rel="stylesheet" href="css/icomoon.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/slide-view.css">

<!--  Card View  -->
<script>
    document.documentElement.className = "js";
    var supportsCssVars = function() {
        var e, t = document.createElement("style");
        return t.innerHTML = "root: { --tmp-var: bold; }", document.head.appendChild(t), e = !!(window.CSS && window.CSS.supports && window.CSS.supports("font-weight", "var(--tmp-var)")), t.parentNode.removeChild(t), e
    };

</script>
<!--  Card View  -->
<?php
   include 'commonPHP/commonHead.php'
?>

<body>
    <?php
   include 'commonPHP/Header.php'
  ?>
    <!-- end Header -->

    <!-- start banner Area -->
    <section class="experience-banner relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white" style="font-size:80px;font-family: 'Black Han Sans', sans-serif; font-weight:100;">
                        Experience
                    </h1>
                    <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="experience.php">경험</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!--Start Intro -->
    <div class="intro animated slideInUp">
        <div class="container">
            <div class="row row-lg-eq-height">

                <!-- Intro Content -->
                <div class="col-lg-5 intro_col">
                    <div class="intro_container d-flex flex-column align-items-start justify-content-center magic_up">
                        <div class="intro_content">
                            <div class="section_title_container">
                                <div class="section_subtitle">EXPERIENCE</div>
                                <div class="section_title">
                                    <h2 style="font-family: 'Jua', sans-serif">세계의 다양한 경험</h2>
                                </div>
                            </div>
                            <div class="intro_text">
                                <p>다양한 경험을 체험해 보세요. 인기 오락거리, 음식 / 음료, 벼룩시장 & 재래시장, 유서깊은 산책로, 워터파크 & 놀이공원, 쇼핑, 전망대, 야외활동, 농산물 직거래 장터, 아트뮤지엄, 흥미거리 & 랜드마크, 농작물 직거래 장터, 즐길거리 / 게임, 테마파크, 역사적인 장소 등 가족, 친구, 연인과의 잊을 수 없는 추억을 만들어 보세요.</p>
                            </div>
                            <div class="intro_link"><a href="#startCartView">Experience</a></div>
                        </div>
                    </div>
                </div>

                <!-- Intro Image -->
                <div class="col-lg-7 intro_col">
                    <div class="intro_images" data-video-id='L61p2uyiMSo' data-video-url="https://www.youtube.com/embed/5fjQg6XlO0o">
                        <div class="intro_1 intro_img"><img src="img/experience/image1.jpg" alt=""></div>
                        <div class="intro_2 intro_img"><img src="img/experience/image3.jpg" alt=""></div>
                        <div class="intro_3 intro_img"><img src="img/experience/image2.jpg" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Intro -->
    <!-- start silder -->
    <div id="app" class="show-on-scroll"></div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/react/15.6.1/react.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/react/15.6.1/react-dom.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/classnames/2.2.5/index.min.js'></script>
    <!--End silder -->



    <!-- Start CardView -->
    <h1 id="startCartView" class="text_cardView">Experience TOP 15</h1>
    <div id="colorlib-rooms" class="colorlib-light-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-12 animate-box">
                    <div class="owl-carousel owl-carousel2">
                        <div class="item">
                            <a href="img/experience/photo_2.jpg" class="room image-popup-link" style="background-image: url(img/experience/photo_2.jpg);"></a>
                            <div class="desc text-center">
                                <span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-half full"></i></span>
                                <h3><a>London Eye</a></h3>
                                <p class="price">
                                    <span class="currency">런던</span>
                                </p>
                                <ul>
                                    <li><i class="icon-check"></i> 랜드마크, 전망대 & 타워, 흥미거리 & 랜드마크</li>
                                    <li><i class="icon-check"></i> 비싸지만 런던에서 꼭 봐야하는 경치</li>
                                    <li><i class="icon-check"></i> 오전 11:00 - 오후 6:00</li>
                                </ul>
                                <p><a class="btn btn-primary btn-book">Book now!</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <a href="img/experience/take_on_a_street_go_kart.jpg" class="room image-popup-link" style="background-image: url(img/experience/take_on_a_street_go_kart.jpg);"></a>
                            <div class="desc text-center">
                                <span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i></span>
                                <h3><a>MariCAR</a></h3>
                                <p class="price">
                                    <span class="currency">오사카</span>
                                </p>
                                <ul>
                                    <li><i class="icon-check"></i> 투어, 야외 활동, 관광 투어, 개인 여행, 야간 투어</li>
                                    <li><i class="icon-check"></i> 오사카에서 짜릿한 액티비티 여행</li>
                                    <li><i class="icon-check"></i> 오전 10:00 - 오후 10:00</li>
                                </ul>
                                <p><a class="btn btn-primary btn-book">Book now!</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <a href="img/experience/siam_park.jpg" class="room image-popup-link" style="background-image: url(img/experience/siam_park.jpg);"></a>
                            <div class="desc text-center">
                                <span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-half full"></i><i class="icon-star-full"></i></span>
                                <h3><a href="rooms-suites.html">Siam Park City</a></h3>
                                <p class="price">
                                    <span class="currency">방콕</span>
                                </p>
                                <ul>
                                    <li><i class="icon-check"></i> 워터파크 & 놀이공원, 테마 파크 , 흥미거리</li>
                                    <li><i class="icon-check"></i> 좋은 모험과 워터 파크, 환상적인 장소</li>
                                    <li><i class="icon-check"></i> 오전 10:00 - 오후 6:00</li>
                                </ul>
                                <p><a class="btn btn-primary btn-book">Book now!</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <a href="img/experience/caption.jpg" class="room image-popup-link" style="background-image: url(img/experience/caption.jpg);"></a>
                            <div class="desc text-center">
                                <span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-half full"></i></span>
                                <h3><a>TaipeiEYE</a></h3>
                                <p class="price">
                                    <span class="currency">타이페이</span>
                                </p>
                                <ul>
                                    <li><i class="icon-check"></i> 콘서트 & 쇼, 극장</li>
                                    <li><i class="icon-check"></i> 경극과 기예공연을 동시에 볼수 있어요.</li>
                                    <li><i class="icon-check"></i> 오후 7:00 - 오후 9:00</li>
                                </ul>
                                <p><a class="btn btn-primary btn-book">Book now!</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <a href="img/experience/dolphin_quest.jpg" class="room image-popup-link" style="background-image: url(img/experience/dolphin_quest.jpg);"></a>
                            <div class="desc text-center">
                                <span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-half full"></i></span>
                                <h3><a>Dolphin Quest</a></h3>
                                <p class="price">
                                    <span class="currency">하와이</span>
                                </p>
                                <ul>
                                    <li><i class="icon-check"></i> 보트 투어 / 수상 스포츠, 투어, 야외 활동</li>
                                    <li><i class="icon-check"></i> 와이콜로아 돌핀퀘스트 키즈프로그램!</li>
                                    <li><i class="icon-check"></i> 오전 8:30 - 오후 5:00</li>
                                </ul>
                                <p><a class="btn btn-primary btn-book">Book now!</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <a href="img/experience/musee_du_louvre.jpg" class="room image-popup-link" style="background-image: url(img/experience/musee_du_louvre.jpg);"></a>
                            <div class="desc text-center">
                                <span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-half full"></i></span>
                                <h3><a href="rooms-suites.html">Louvre Museum</a></h3>
                                <p class="price">
                                    <span class="currency">파리</span>
                                </p>
                                <ul>
                                    <li><i class="icon-check"></i> 랜드마크, 박물관, 건축물, 흥미거리 & 랜드마크</li>
                                    <li><i class="icon-check"></i> 파리의 대표적 박물관</li>
                                    <li><i class="icon-check"></i> 오전 9:00 - 오후 9:45</li>
                                </ul>
                                <p><a class="btn btn-primary btn-book">Book now!</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <a href="img/experience/danang_dragon_bridge.jpg" class="room image-popup-link" style="background-image: url(img/experience/danang_dragon_bridge.jpg);"></a>
                            <div class="desc text-center">
                                <span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i></span>
                                <h3><a>Dragon Bridge</a></h3>
                                <p class="price">
                                    <span class="currency">다낭</span>
                                </p>
                                <ul>
                                    <li><i class="icon-check"></i> 랜드마크, 흥미거리 & 랜드마크, 브리지</li>
                                    <li><i class="icon-check"></i> 비싸지만 런던에서 꼭 봐야하는 경치</li>
                                    <li><i class="icon-check"></i> 오전 12:00 - 오후 12:00</li>
                                </ul>
                                <p><a class="btn btn-primary btn-book">Book now!</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <a href="img/experience/nice.jpg" class="room image-popup-link" style="background-image: url(img/experience/nice.jpg);"></a>
                            <div class="desc text-center">
                                <span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i></span>
                                <h3><a>Aguinid Falls</a></h3>
                                <p class="price">
                                    <span class="currency">세부</span>
                                </p>
                                <ul>
                                    <li><i class="icon-check"></i> 자연 / 공원, 폭포</li>
                                    <li><i class="icon-check"></i> 세부는 축복받은 자연의땅</li>
                                    <li><i class="icon-check"></i> 오전 12:00 - 오후 12:00</li>
                                </ul>
                                <p><a class="btn btn-primary btn-book">Book now!</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <a href="img/experience/jaeju.jpg" class="room image-popup-link" style="background-image: url(img/experience/jaeju.jpg);"></a>
                            <div class="desc text-center">
                                <span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i></span>
                                <h3><a href="rooms-suites.html">제주김녕미로공원</a></h3>
                                <p class="price">
                                    <span class="currency">제주</span>
                                </p>
                                <ul>
                                    <li><i class="icon-check"></i> 랜드마크, 자연 / 공원, 가든, 흥미거리</li>
                                    <li><i class="icon-check"></i> 미로찾는 재미가 좋아요</li>
                                    <li><i class="icon-check"></i> 오전 9:00 - 오후 6:00</li>
                                </ul>
                                <p><a class="btn btn-primary btn-book">Book now!</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <a href="img/experience/getlstd_property_photo.jpg" class="room image-popup-link" style="background-image: url(img/experience/getlstd_property_photo.jpg);"></a>
                            <div class="desc text-center">
                                <span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i></span>
                                <h3><a>The Roman Food Tour</a></h3>
                                <p class="price">
                                    <span class="currency">로마</span>
                                </p>
                                <ul>
                                    <li><i class="icon-check"></i> 강좌 & 워크숍, 투어, 음식 / 음료, 푸드 투어</li>
                                    <li><i class="icon-check"></i> 현지인처럼 먹는다!</li>
                                    <li><i class="icon-check"></i> 오전 12:00 - 오후 12:00</li>
                                </ul>
                                <p><a class="btn btn-primary btn-book">Book now!</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <a href="img/experience/elafonissi_beach.jpg" class="room image-popup-link" style="background-image: url(img/experience/elafonissi_beach.jpg);"></a>
                            <div class="desc text-center">
                                <span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-half full"></i></span>
                                <h3><a>Elafonissi Beach</a></h3>
                                <p class="price">
                                    <span class="currency">그리스</span>
                                </p>
                                <ul>
                                    <li><i class="icon-check"></i> 자연 / 공원, 야외 활동, 해변</li>
                                    <li><i class="icon-check"></i>너무나도 낭만적인</li>
                                    <li><i class="icon-check"></i>오전 12:00 - 오후 12:00</li>
                                </ul>
                                <p><a class="btn btn-primary btn-book">Book now!</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <a href="img/experience/waterbom_bali.jpg" class="room image-popup-link" style="background-image: url(img/experience/waterbom_bali.jpg);"></a>
                            <div class="desc text-center">
                                <span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-half full"></i></span>
                                <h3><a>Waterbom Bali</a></h3>
                                <p class="price">
                                    <span class="currency">발리</span>
                                </p>
                                <ul>
                                    <li><i class="icon-check"></i> 워터파크 & 놀이공원</li>
                                    <li><i class="icon-check"></i> 깨끗한 물과 복잡하지 않은 워터파크</li>
                                    <li><i class="icon-check"></i> 오전 9:00 - 오후 6:00</li>
                                </ul>
                                <p><a class="btn btn-primary btn-book">Book now!</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <a href="img/experience/phuket_bird_park.jpg" class="room image-popup-link" style="background-image: url(img/experience/phuket_bird_park.jpg);"></a>
                            <div class="desc text-center">
                                <span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-half full"></i><i class="icon-star-full"></i></span>
                                <h3><a>Phuket Bird Park</a></h3>
                                <p class="price">
                                    <span class="currency">푸켓</span>
                                </p>
                                <ul>
                                    <li><i class="icon-check"></i> 자연 / 공원, 자연 & 야생동물 서식지</li>
                                    <li><i class="icon-check"></i> 여러쇼와 새를 보는 즐거움</li>
                                    <li><i class="icon-check"></i> 오전 9:00 - 오후 5:00</li>
                                </ul>
                                <p><a class="btn btn-primary btn-book">Book now!</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <a href="img/experience/photo.jpg" class="room image-popup-link" style="background-image: url(img/experience/photo.jpg);"></a>
                            <div class="desc text-center">
                                <span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-half full"></i></span>
                                <h3><a>Basilica of the Sagrada Familia</a></h3>
                                <p class="price">
                                    <span class="currency">바르셀로나</span>
                                </p>
                                <ul>
                                    <li><i class="icon-check"></i> 랜드마크, 건축물, 흥미거리 & 랜드마크, 교회 & 성당</li>
                                    <li><i class="icon-check"></i> 스페인에 오면 꼭 가봐야할 곳</li>
                                    <li><i class="icon-check"></i> 오전 9:00 - 오후 8:00
</li>
                                </ul>
                                <p><a class="btn btn-primary btn-book">Book now!</a></p>
                            </div>
                        </div>
                        <div class="item">
                            <a href="img/experience/l_un_des_bassins.jpg" class="room image-popup-link" style="background-image: url(img/experience/l_un_des_bassins.jpg);"></a>
                            <div class="desc text-center">
                                <span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-half full"></i></span>
                                <h3><a>Jardin Majorelle</a></h3>
                                <p class="price">
                                    <span class="currency">마라케시</span>
                                </p>
                                <ul>
                                    <li><i class="icon-check"></i> 자연 / 공원, 가든</li>
                                    <li><i class="icon-check"></i> 마라케시에서 가장 현대적인곳</li>
                                    <li><i class="icon-check"></i>오전 8:00 - 오후 5:30</li>
                                </ul>
                                <p><a class="btn btn-primary btn-book">Book now!</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start site category title -->
    <div class="header wrap">
        <h2 class="background double"><span>다른 것들이 필요하신가요? <span style="color: orange">Travel Maker 카테고리 더 보기</span></span></h2>
    </div> <!-- end site category title-->
    <!--  -->
    <!-- start site category Grid -->
    <div class="categoty">
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
    </div>

    <!-- End Gallery -->

    <!-- start footer Area -->
    <?php
      include 'commonPHP/footer.php';
   ?>
    <!-- End footer Area -->

    <!-- Script -->
    <script src="js/experience_slider.js"></script>
    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

    <!--   modalVideo   -->
    <script src="js/jquery-modal-video.min.js"></script>
    <script>
        $(".intro_images").modalVideo({
            channel: 'youtube',
            youtube: {
                autoplay: 1,
                controls: 0,
                nocookie: true
            }
        });

    </script>

    <!--  slide view  -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <script src="js/slide-view.js"></script>

</body>

</html>
