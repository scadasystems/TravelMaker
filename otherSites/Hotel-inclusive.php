<!DOCTYPE html>
<html class="no-js">
<!-- Head -->

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0, minimum-scale=1.0, shrink-to-fit=no">
    <link rel="shortcut icon" href="../img/fav.png">
    <meta charset="UTF-8">
    <title>Travel Maker</title>

    <link href="https://fonts.googleapis.com/css?family=Black+Han+Sans|Jua|Poppins:100,200,400,300,500,600,700|Cabin" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="../css/linearicons.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <link rel="stylesheet" href="../css/nice-select.css">
    <link rel="stylesheet" href="../css/animate.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="allinone_thumbnailsBanner.css" type="text/css">

    <style>
        html,
        body {margin: 0; padding: 0; overflow-x: hidden;}
        #containingDiv {width: 960px; margin: 0 auto; padding: 140px 0 0 0;}
        #bottomText {width: 100%; font: 18px 'Lato', sans-serif; color: #333333; border-top: 1px solid #cccccc; padding: 10px 0 0 0; margin-top: 100px; text-align: center;}
        @media screen and (min-width:1200px) {
            #containingDiv {width: 960px; margin: 0 auto; padding: 140px 0 0 0;}
            #bottomText {width: 100%; font: 18px 'Lato', sans-serif; color: #333333; border-top: 1px solid #cccccc; padding: 10px 0 0 0; margin-top: 100px; text-align: center;}
        }
        @media screen and (max-width:767px) {
            #containingDiv {width: 100%; margin: 0 auto; padding: 60px 0 0 0;}
            #bottomText {width: 100%; font: 14px 'Lato', sans-serif; color: #333333; border-top: 1px solid #cccccc; padding: 10px 0 0 0; margin-top: 50px; text-align: center;}
        }
    </style>
</head>


<body>
    <header id="header" class="header-scrolled">
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6 col-6 header-top-left">
                        <ul>
                            <li><a href="../commonPHP/developer.html">Visit Us</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-6 header-top-right">
                        <div class="header-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="https://github.com/scadasystems/TravelMaker" target="_blank"><i class="fa fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="../index.php"><img src="../img/logo2.png" style="width:100px"></a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="../Hotel.php">호텔</a></li>
                        <li><a href="../experience.php">경험</a></li>
                        <li><a href="../Food.php">음식점</a></li>
                        <li><a href="../Airport.php">항공사</a></li>
                        <li><a href="">2019 베스트</a></li>
                        <li><a href="#">Help Center</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
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
                    <p class="text-white link-nav"><a href="../index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="../Hotel.php"> 호텔</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->
    <!--================ Start slider section =================-->
    <div id="bannerBg">
        <div id="containingDiv">
            <div id="allinone_thumbnailsBanner_simple" style="display:none;">
                <ul class="allinone_thumbnailsBanner_list">
                    <!-- SLIDER IMAGES -->
                    <?php
                        include('../simple_html_dom.php');
                        $html = file_get_html('https://www.tripadvisor.co.kr/TravelersChoice-Hotels-cAllInclusive');
                    ?>
                    <!-- 카야카피 -->
                    <li data-bottom-thumb="images/Slide-inclusive/1.jpg" data-text-id="#allinone_thumbnailsBanner_photoText1"><img src="images/Slide-inclusive/1.jpg" alt="" /></li>
                    <li data-bottom-thumb="images/Slide-inclusive/2.jpg" data-text-id="#allinone_thumbnailsBanner_photoText2"><img src="images/Slide-inclusive/2.jpg" alt="" /></li>
                    <li data-bottom-thumb="images/Slide-inclusive/3.jpg" data-text-id="#allinone_thumbnailsBanner_photoText3"><img src="images/Slide-inclusive/3.jpg" alt="" /></li>
                    <li data-bottom-thumb="images/Slide-inclusive/4.jpg" data-text-id="#allinone_thumbnailsBanner_photoText4"><img src="images/Slide-inclusive/4.jpg" alt="" /></li>
                    <li data-bottom-thumb="images/Slide-inclusive/5.jpg" data-text-id="#allinone_thumbnailsBanner_photoText5"><img src="images/Slide-inclusive/5.jpg" alt="" /></li>
                    <li data-bottom-thumb="images/Slide-inclusive/6.jpg" data-text-id="#allinone_thumbnailsBanner_photoText6"><img src="images/Slide-inclusive/6.jpg" alt="" /></li>
                    <li data-bottom-thumb="images/Slide-inclusive/7.jpg" data-text-id="#allinone_thumbnailsBanner_photoText7"><img src="images/Slide-inclusive/7.jpg" alt="" /></li>
                    <li data-bottom-thumb="images/Slide-inclusive/8.jpg" data-text-id="#allinone_thumbnailsBanner_photoText8"><img src="images/Slide-inclusive/8.jpg" alt="" /></li>
                    <li data-bottom-thumb="images/Slide-inclusive/9.jpg" data-text-id="#allinone_thumbnailsBanner_photoText9"><img src="images/Slide-inclusive/9.jpg" alt="" /></li>
                    <li data-bottom-thumb="images/Slide-inclusive/10.jpg" data-text-id="#allinone_thumbnailsBanner_photoText10"><img src="images/Slide-inclusive/10.jpg" alt="" /></li>
                    <li data-bottom-thumb="images/Slide-inclusive/11.jpg" data-text-id="#allinone_thumbnailsBanner_photoText11"><img src="images/Slide-inclusive/11.jpg" alt="" /></li>
                    <li data-bottom-thumb="images/Slide-inclusive/12.jpg" data-text-id="#allinone_thumbnailsBanner_photoText12"><img src="images/Slide-inclusive/12.jpg" alt="" /></li>
                    <li data-bottom-thumb="images/Slide-inclusive/13.jpg" data-text-id="#allinone_thumbnailsBanner_photoText13"><img src="images/Slide-inclusive/13.jpg" alt="" /></li>
                    <li data-bottom-thumb="images/Slide-inclusive/14.jpg" data-text-id="#allinone_thumbnailsBanner_photoText14"><img src="images/Slide-inclusive/14.jpg" alt="" /></li>
                    <li data-bottom-thumb="images/Slide-inclusive/15.jpg" data-text-id="#allinone_thumbnailsBanner_photoText15"><img src="images/Slide-inclusive/15.jpg" alt="" /></li>
                </ul>
                <!--
                <?php print $html -> find('.mainName', 0) -> plaintext; ?></a><br/>&nbsp;&nbsp;&nbsp;<?php print $html -> find('.smaller', 0) -> plaintext; ?>
                <?php print $html -> find('.mainName', 1) -> plaintext; ?></a></span><br><?php print $html -> find('.smaller', 1) -> plaintext; ?>
              -->
                <?php
                  $href = array(
                    "https://kr.hotels.com/ho240380/?tab=description&ZSX=0&SYE=3&q-room-0-children=0&q-room-0-adults=2",
                    "https://kr.hotels.com/ho470506/?tab=description&ZSX=0&SYE=3&q-room-0-children=0&q-room-0-adults=2",
                    "https://kr.hotels.com/ho234667/?pa=1&tab=description&ZSX=0&SYE=3&q-room-0-children=0&q-room-0-adults=2",
                    "https://kr.hotels.com/ho220535/?tab=description&ZSX=0&SYE=3&q-room-0-children=0&q-room-0-adults=2",
                    "https://kr.hotels.com/ho261348/?tab=description&ZSX=0&SYE=3&q-room-0-children=0&q-room-0-adults=2",
                    "https://kr.hotels.com/ho600109/?tab=description&ZSX=0&SYE=3&q-room-0-children=0&q-room-0-adults=2",
                    "https://kr.hotels.com/ho698648/?pa=1&tab=description&ZSX=0&SYE=3&q-room-0-children=0&q-room-0-adults=2",
                    "https://kr.hotels.com/ho418530/?tab=description&ZSX=0&SYE=3&q-room-0-children=0&q-room-0-adults=2",
                    "https://kr.hotels.com/ho1019552512/?pa=1&tab=description&ZSX=0&SYE=3&q-room-0-children=0&q-room-0-adults=2",
                    "https://kr.hotels.com/ho489309/?tab=description&ZSX=0&SYE=3&q-room-0-children=0&q-room-0-adults=2",
                    "https://kr.hotels.com/ho275231/?tab=description&ZSX=0&SYE=3&q-room-0-children=0&q-room-0-adults=2",
                    "https://kr.hotels.com/ho225773/?tab=description&ZSX=0&SYE=3&q-room-0-children=0&q-room-0-adults=2",
                    "https://kr.hotels.com/ho476042/?tab=description&ZSX=0&SYE=3&q-room-0-children=0&q-room-0-adults=2",
                    "https://kr.hotels.com/ho469335/?tab=description&ZSX=0&SYE=3&q-room-0-children=0&q-room-0-adults=2",
                    "https://kr.hotels.com/ho254669/?tab=description&ZSX=0&SYE=3&q-room-0-children=0&q-room-0-adults=2"
                  );
                ?>
                <!-- TEXTS -->
                <div id="allinone_thumbnailsBanner_photoText1" class="allinone_thumbnailsBanner_texts">
                    <div class="allinone_thumbnailsBanner_text_line textElement11_simpleResponsive" data-initial-left="0" data-initial-top="60" data-final-left="0" data-final-top="400" data-duration="0.5" data-fade-start="0" data-delay="0">
                        &nbsp;&nbsp;&nbsp;
                        1. <a href="<?php echo $href[0]; ?>" target="_blank">
                        <?php print $html -> find('.mainName', 0) -> plaintext; ?></a><br/>&nbsp;&nbsp;&nbsp;<?php print $html -> find('.smaller', 0) -> plaintext; ?>
                    </div>
                </div>

                <div id="allinone_thumbnailsBanner_photoText2" class="allinone_thumbnailsBanner_texts">
                    <div class="allinone_thumbnailsBanner_text_line textElement21_simpleResponsive" data-initial-left="200" data-initial-top="60" data-final-left="45" data-final-top="60" data-duration="0.5" data-fade-start="0" data-delay="0">
                        <span style="font-weight:bold;">
                          2. <a href="<?php echo $href[1]; ?>" target="_blank">
                          <?php print $html -> find('.mainName', 1) -> plaintext; ?></a></span><br><?php print $html -> find('.smaller', 1) -> plaintext; ?>
                    </div>
                </div>

                <div id="allinone_thumbnailsBanner_photoText3" class="allinone_thumbnailsBanner_texts">
                    <div class="allinone_thumbnailsBanner_text_line textElement31_simpleResponsive" data-initial-left="70" data-initial-top="160" data-final-left="70"
                      data-final-top="60" data-duration="0.5" data-fade-start="0" data-delay="0"><span>
                      3. <a href="<?php echo $href[2]; ?>" target="_blank">
                      <?php print $html -> find('.mainName', 2) -> plaintext; ?></a></span><br><?php print $html -> find('.smaller', 2) -> plaintext; ?>
                    </div>
                </div>

                <div id="allinone_thumbnailsBanner_photoText4" class="allinone_thumbnailsBanner_texts">
                    <div class="allinone_thumbnailsBanner_text_line textElement41_simpleResponsive" data-initial-left="100" data-initial-top="60" data-final-left="480"
                    data-final-top="60" data-duration="0.5" data-fade-start="0" data-delay="0"><span style="text-transform:uppercase; font-weight:bold;">
                    4. <a href="<?php echo $href[3]; ?>" target="_blank">
                      <?php print $html -> find('.mainName', 3) -> plaintext; ?></a></span><br><?php print $html -> find('.smaller', 3) -> plaintext; ?>
                    </div>
                </div>

                <div id="allinone_thumbnailsBanner_photoText5" class="allinone_thumbnailsBanner_texts">
                    <div class="allinone_thumbnailsBanner_text_line textElement51_simpleResponsive" data-initial-left="0" data-initial-top="200" data-final-left="0"
                    data-final-top="0" data-duration="0.5" data-fade-start="0" data-delay="0"><span style="font-weight:bold; text-transform:uppercase;">
                      5. <a href="<?php echo $href[4]; ?>" target="_blank">
                        <?php print $html -> find('.mainName', 4) -> plaintext; ?></a></span><br><?php print $html -> find('.smaller', 4) -> plaintext; ?>
                    </div>
                </div>
                <!---------------------------------------->
                <div id="allinone_thumbnailsBanner_photoText6" class="allinone_thumbnailsBanner_texts">
                    <div class="allinone_thumbnailsBanner_text_line textElement11_simpleResponsive" data-initial-left="0" data-initial-top="60" data-final-left="0"
                    data-final-top="400" data-duration="0.5" data-fade-start="0" data-delay="0">
                        &nbsp;&nbsp;&nbsp;
                        6. <a href="<?php echo $href[5]; ?>" target="_blank">
                          <?php print $html -> find('.mainName', 5) -> plaintext; ?></a><br/>&nbsp;&nbsp;&nbsp;<?php print $html -> find('.smaller', 5) -> plaintext; ?>
                    </div>
                </div>

                <div id="allinone_thumbnailsBanner_photoText7" class="allinone_thumbnailsBanner_texts">
                    <div class="allinone_thumbnailsBanner_text_line textElement21_simpleResponsive" data-initial-left="200" data-initial-top="60" data-final-left="45" data-final-top="60" data-duration="0.5" data-fade-start="0" data-delay="0">
                        <span style="font-weight:bold;">
                          7. <a href="<?php echo $href[6]; ?>" target="_blank">
                          <?php print $html -> find('.mainName', 6) -> plaintext; ?></a></span><br><?php print $html -> find('.smaller', 6) -> plaintext; ?>
                    </div>
                </div>

                <div id="allinone_thumbnailsBanner_photoText8" class="allinone_thumbnailsBanner_texts">
                    <div class="allinone_thumbnailsBanner_text_line textElement31_simpleResponsive" data-initial-left="70" data-initial-top="160" data-final-left="70"
                    data-final-top="60" data-duration="0.5" data-fade-start="0" data-delay="0"><span>
                      8. <a href="<?php echo $href[7]; ?>" target="_blank">
                        <?php print $html -> find('.mainName', 7) -> plaintext; ?></a></span><br><?php print $html -> find('.smaller', 7) -> plaintext; ?>
                    </div>
                </div>

                <div id="allinone_thumbnailsBanner_photoText9" class="allinone_thumbnailsBanner_texts">
                    <div class="allinone_thumbnailsBanner_text_line textElement41_simpleResponsive" data-initial-left="100" data-initial-top="60" data-final-left="480"
                    data-final-top="60" data-duration="0.5" data-fade-start="0" data-delay="0"><span style="text-transform:uppercase; font-weight:bold;">
                      9. <a href="<?php echo $href[8]; ?>" target="_blank">
                        <?php print $html -> find('.mainName', 8) -> plaintext; ?></a></span><br><?php print $html -> find('.smaller', 8) -> plaintext; ?>
                    </div>
                </div>

                <div id="allinone_thumbnailsBanner_photoText10" class="allinone_thumbnailsBanner_texts">
                    <div class="allinone_thumbnailsBanner_text_line textElement51_simpleResponsive" data-initial-left="0" data-initial-top="200" data-final-left="0"
                    data-final-top="0" data-duration="0.5" data-fade-start="0" data-delay="0"><span style="font-weight:bold; text-transform:uppercase;">
                      10. <a href="<?php echo $href[9]; ?>" target="_blank">
                      <?php print $html -> find('.mainName', 9) -> plaintext; ?></a></span><br><?php print $html -> find('.smaller', 9) -> plaintext; ?>
                    </div>
                </div>
                <!---------------------------------------->
                <div id="allinone_thumbnailsBanner_photoText11" class="allinone_thumbnailsBanner_texts">
                    <div class="allinone_thumbnailsBanner_text_line textElement11_simpleResponsive" data-initial-left="0" data-initial-top="60" data-final-left="0" data-final-top="400" data-duration="0.5" data-fade-start="0" data-delay="0">
                        &nbsp;&nbsp;&nbsp;
                        11. <a href="<?php echo $href[10]; ?>" target="_blank">
                          <?php print $html -> find('.mainName', 10) -> plaintext; ?></a><br/>&nbsp;&nbsp;&nbsp;<?php print $html -> find('.smaller', 10) -> plaintext; ?>
                        </div>
                </div>

                <div id="allinone_thumbnailsBanner_photoText12" class="allinone_thumbnailsBanner_texts">
                    <div class="allinone_thumbnailsBanner_text_line textElement21_simpleResponsive" data-initial-left="200" data-initial-top="60" data-final-left="45"
                    data-final-top="60" data-duration="0.5" data-fade-start="0" data-delay="0"><span style="font-weight:bold;">
                      12. <a href="<?php echo $href[11]; ?>" target="_blank">
                        <?php print $html -> find('.mainName', 11) -> plaintext; ?></a></span><br><?php print $html -> find('.smaller', 11) -> plaintext; ?>
                    </div>
                </div>

                <div id="allinone_thumbnailsBanner_photoText13" class="allinone_thumbnailsBanner_texts">
                    <div class="allinone_thumbnailsBanner_text_line textElement31_simpleResponsive" data-initial-left="70" data-initial-top="160" data-final-left="70"
                    data-final-top="60" data-duration="0.5" data-fade-start="0" data-delay="0"><span>
                      13. <a href="<?php echo $href[12]; ?>" target="_blank">
                        <?php print $html -> find('.mainName', 12) -> plaintext; ?></a></span><br><?php print $html -> find('.smaller', 12) -> plaintext; ?>
                    </div>
                </div>

                <div id="allinone_thumbnailsBanner_photoText14" class="allinone_thumbnailsBanner_texts">
                    <div class="allinone_thumbnailsBanner_text_line textElement41_simpleResponsive" data-initial-left="100" data-initial-top="60" data-final-left="480"
                    data-final-top="60" data-duration="0.5" data-fade-start="0" data-delay="0"><span style="text-transform:uppercase; font-weight:bold;">
                      14. <a href="<?php echo $href[13]; ?>" target="_blank">
                        <?php print $html -> find('.mainName', 13) -> plaintext; ?></a></span><br><?php print $html -> find('.smaller', 13) -> plaintext; ?>
                    </div>
                </div>

                <div id="allinone_thumbnailsBanner_photoText15" class="allinone_thumbnailsBanner_texts">
                    <div class="allinone_thumbnailsBanner_text_line textElement51_simpleResponsive" data-initial-left="0" data-initial-top="200" data-final-left="0"
                    data-final-top="0" data-duration="0.5" data-fade-start="0" data-delay="0"><span style="font-weight:bold; text-transform:uppercase;">
                      15. <a href="<?php echo $href[14]; ?>" target="_blank">
                        <?php print $html -> find('.mainName', 14) -> plaintext; ?></a></span><br><?php print $html -> find('.smaller', 14) -> plaintext; ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="bottomText" style="margin-top:140px;"></div>
    </div>
    <!--================ Finish slider section =================-->


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
                    <div class="lulzmGrid-img" style="background-image: url(../img/Hotel/hotel-best.jpg);">
                        <div class="lulzmGrid-label">Best Hotel</div>
                        <div class="lulzmGrid-img-cover"></div>
                    </div>
                    <!-- end Label -->
                    <figcaption>
                        <h3>Best Hotel</h3>
                        <p>2019년도 1분기 베스트 호텔을 보러 가고 싶나요?</p>
                        <button class="lulzm-readmore-button" type="button" onclick="location.href='../Hotel.php' "><span>Go ! </span></button>
                    </figcaption>
                </figure>
                <figure class="lulzmGrid col-sm">
                    <!-- Label -->
                    <div class="lulzmGrid-img" style="background-image: url(../img/Hotel/hotel-luxury.jpg);">
                        <div class="lulzmGrid-label">Luxury</div>
                        <div class="lulzmGrid-img-cover"></div>
                    </div>
                    <!-- end Label -->
                    <figcaption>
                        <h3>Luxury</h3>
                        <p>최고의 럭셔리한 호텔을 찾으시나요?</p>
                        <button class="lulzm-readmore-button" type="button" onclick="location.href='../otherSites/Hotel-luxury.php' "><span>Go ! </span></button>
                    </figcaption>
                </figure>
                <figure class="lulzmGrid col-sm">
                    <!-- Label -->
                    <div class="lulzmGrid-img" style="background-image: url(../img/Hotel/hotel-romantic.jpg);">
                        <div class="lulzmGrid-label">Romantic</div>
                        <div class="lulzmGrid-img-cover"></div>
                    </div>
                    <!-- end Label -->
                    <figcaption>
                        <h3>Romantic</h3>
                        <p>사랑하는 사람과 최고의 추억을 만들고 싶은가요?</p>
                        <button class="lulzm-readmore-button" type="button" onclick="location.href='../otherSites/Hotel-romantic.php' "><span>Go ! </span></button>
                    </figcaption>
                </figure>
            </div>
            <div class="row">
                <figure class="lulzmGrid col-sm">
                    <!-- Label -->
                    <div class="lulzmGrid-img" style="background-image: url(../img/Hotel/hotel-service.jpg);">
                        <div class="lulzmGrid-label">Service</div>
                        <div class="lulzmGrid-img-cover"></div>
                    </div>
                    <!-- end Label -->
                    <figcaption>
                        <h3>Service</h3>
                        <p>여행객들이 추천하는 서비스 좋은 호텔을 찾으시나요?</p>
                        <button class="lulzm-readmore-button" type="button" onclick="location.href='../otherSites/Hotel-service.php' "><span>Go ! </span></button>
                    </figcaption>
                </figure>
                <figure class="lulzmGrid col-sm">
                    <!-- Label -->
                    <div class="lulzmGrid-img" style="background-image: url(../img/Hotel/hotel-goodvalue.jpg);">
                        <div class="lulzmGrid-label">Good Value</div>
                        <div class="lulzmGrid-img-cover"></div>
                    </div>
                    <!-- end Label -->
                    <figcaption>
                        <h3>Good Value</h3>
                        <p>가성비가 좋은 호텔! 여기 있습니다.</p>
                        <button class="lulzm-readmore-button" type="button" onclick="location.href='../otherSites/Hotel-goodvalue.php' "><span>Go ! </span></button>
                    </figcaption>
                </figure>
                <figure class="lulzmGrid col-sm">
                    <!-- Label -->
                    <div class="lulzmGrid-img" style="background-image: url(../img/Hotel/hotel-family.jpg);">
                        <div class="lulzmGrid-label">Family</div>
                        <div class="lulzmGrid-img-cover"></div>
                    </div>
                    <!-- end Label -->
                    <figcaption>
                        <h3>Family</h3>
                        <p>가족들과 오붓한 시간을 보내시려고요?</p>
                        <button class="lulzm-readmore-button" type="button" onclick="location.href='../otherSites/Hotel-family.php' "><span>Go ! </span></button>
                    </figcaption>
                </figure>
            </div>
            <div class="row">
                <figure class="lulzmGrid col-sm">
                    <!-- Label -->
                    <div class="lulzmGrid-img" style="background-image: url(../img/Hotel/hotel-small.jpg);">
                        <div class="lulzmGrid-label">Small</div>
                        <div class="lulzmGrid-img-cover"></div>
                    </div>
                    <!-- end Label -->
                    <figcaption>
                        <h3>Small Hotel</h3>
                        <p>작지만 행복을 만들기에는 충분합니다.</p>
                        <button class="lulzm-readmore-button" type="button" onclick="location.href='../otherSites/Hotel-smallhotel.php' "><span>Go ! </span></button>
                    </figcaption>
                </figure>
                <figure class="lulzmGrid col-sm">
                    <!-- Label -->
                    <div class="lulzmGrid-img" style="background-image: url(../img/Hotel/hotel-motel.jpg);">
                        <div class="lulzmGrid-label">Motel</div>
                        <div class="lulzmGrid-img-cover"></div>
                    </div>
                    <!-- end Label -->
                    <figcaption>
                        <h3>Motel / B&B</h3>
                        <p>숙소에 돈을 투자하고 싶지 않다고요?</p>
                        <button class="lulzm-readmore-button" type="button" onclick="location.href='../otherSites/Hotel-motel.php' "><span>Go ! </span></button>
                    </figcaption>
                </figure>
                <figure class="lulzmGrid col-sm">
                    <!-- Label -->
                    <div class="lulzmGrid-img" style="background-image: url(../img/Hotel/hotel-inclusive.jpeg);">
                        <div class="lulzmGrid-label">All inclusive Hotel</div>
                        <div class="lulzmGrid-img-cover"></div>
                    </div>
                    <!-- end Label -->
                    <figcaption>
                        <h3>All inclusive Hotel</h3>
                        <p>All Inclusive : 조식,중식,석식 세끼와 함께 여러가지 제공</p>
                        <button class="lulzm-readmore-button" type="button" onclick="location.href='../otherSites/Hotel-inclusive.php'"><span>Go ! </span></button>
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
                <div class="lulzmGrid-img" style="background-image: url(../img/Hotel/hotels-main.jpg);">
                    <div class="lulzmGrid-label">Best Hotel</div>
                    <div class="lulzmGrid-img-cover"></div>
                </div>
                <!-- end Label -->
                <figcaption>
                    <h3>Best Hotel</h3>
                    <p>2019년도 1분기 베스트 호텔을 보러 가고 싶나요?</p>
                    <button class="lulzm-readmore-button" type="button" onclick="location.href='../Hotel.php' "><span>Go ! </span></button>
                </figcaption>
            </figure>
            <figure class="lulzmGrid col-sm">
                <!-- Label -->
                <div class="lulzmGrid-img" style="background-image: url(../img/experience/experience-main.jpg);">
                    <div class="lulzmGrid-label">Experience</div>
                    <div class="lulzmGrid-img-cover"></div>
                </div>
                <!-- end Label -->
                <figcaption>
                    <h3>Best Experience</h3>
                    <p>재미있고 추억의 경험을 얻고 싶으세요?</p>
                    <button class="lulzm-readmore-button" type="button" onclick="location.href='../experience.php' "><span>Go ! </span></button>
                </figcaption>
            </figure>
            <figure class="lulzmGrid col-sm">
                <!-- Label -->
                <div class="lulzmGrid-img" style="background-image: url(../img/Food/Food-banner.png);">
                    <div class="lulzmGrid-label">Best Food</div>
                    <div class="lulzmGrid-img-cover"></div>
                </div>
                <!-- end Label -->
                <figcaption>
                    <h3>Best Food</h3>
                    <p>현지에 유명한 요리를 드시고 싶으신가요?</p>
                    <button class="lulzm-readmore-button" type="button" onclick="location.href='../Food.php' "><span>Go ! </span></button>
                </figcaption>
            </figure>
        </div>
        <div class="row">
            <figure class="lulzmGrid col-sm">
                <!-- Label -->
                <div class="lulzmGrid-img" style="background-image: url(../img/Airport/airport.jpg);">
                    <div class="lulzmGrid-label">Best Airport</div>
                    <div class="lulzmGrid-img-cover"></div>
                </div>
                <!-- end Label -->
                <figcaption>
                    <h3>Best Airport</h3>
                    <p>수많은 항공사 중 여행객들이 추천하는 항공사는?</p>
                    <button class="lulzm-readmore-button" type="button" onclick="location.href='../Airport.php' "><span>Go ! </span></button>
                </figcaption>
            </figure>
            <figure class="lulzmGrid col-sm">
                <!-- Label -->
                <div class="lulzmGrid-img" style="background-image: url(../img/main/main-banner.jpg);">
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
                    <button class="lulzm-readmore-button" type="button" onclick="location.href='../2019-best.php' "><span>Go ! </span></button>
                </figcaption>
            </figure>
            <figure class="lulzmGrid col-sm">
                <!-- Label -->
                <div class="lulzmGrid-img" style="background-image: url(../img/our_team2.jpg);">
                    <div class="lulzmGrid-label">Help Center</div>
                    <div class="lulzmGrid-img-cover"></div>
                </div>
                <!-- end Label -->
                <figcaption>
                    <h3>Help Center</h3>
                    <p>저희한테 궁금한 점이 있으신가요?</p>
                    <button class="lulzm-readmore-button" type="button" onclick="location.href='../contact.php' "><span>Go ! </span></button>
                </figcaption>
            </figure>
        </div>
    </div> <!-- end site category Grid -->
    <!-- start footer Area -->
    <footer class="footer-area section-gap">
        <div class="container">

            <div class="row">
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>About</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Navigation Links</h6>
                        <div class="row">
                            <div class="col">
                                <ul>
                                    <li><a href="../index.php">Home</a></li>
                                    <li><a href="../Hotel.php">호텔</a></li>
                                    <li><a href="../experience.php">경험</a></li>
                                    <li><a href="../Food.php">음식점</a></li>
                                </ul>
                            </div>
                            <div class="col">
                                <ul>
                                    <li><a href="../Airport.php">항공사</a></li>
                                    <li><a href="#">2019 베스트</a></li>
                                    <li><a href="#">Help Center</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Newsletter</h6>
                        <p>
                            새로운 정보를 원하시는 분들은 아래에 이메일 주소를 적어주세요. <br>저희가 따끈한 신상들을 보내드릴게요!
                        </p>
                        <div id="mc_embed_signup">
                            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscription relative">
                                <div class="input-group d-flex flex-row">
                                    <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                    <button class="btn bb-btn"><span class="lnr lnr-location"></span></button>
                                </div>
                                <div class="mt-10 info"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget mail-chimp">
                        <h6 class="mb-20">Developers</h6>
                        <ul>
                            <li><img src="../img/our_team.jpg" alt="" style="width: 250xp; height: 130px"></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row footer-bottom d-flex justify-content-between align-items-center">
                <p class="col-lg-8 col-sm-12 footer-text m-0">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <a>Copyright &copy;<script>
                            document.write(new Date().getFullYear());

                        </script> All rights reserved | This Site is made with <i class="fa fa-heart-o" aria-hidden="true"></i>by Travel Maker</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                <div class="col-lg-4 col-sm-12 footer-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="https://github.com/scadasystems/TravelMaker" target="_blank"><i class="fa fa-github"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->
    <!-- Script -->
    <script src="../js/vendor/jquery-2.2.4.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/vendor/bootstrap.min.js"></script>
    <script src="../js/jquery-ui.js"></script>
    <script src="../js/easing.min.js"></script>
    <script src="../js/hoverIntent.js"></script>
    <script src="../js/superfish.min.js"></script>
    <script src="../js/jquery.ajaxchimp.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/mail-script.js"></script>
    <script src="ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
    <script src="ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
    <script src="js/jquery.touchSwipe.min.js" type="text/javascript"></script>
    <script src="js/allinone_thumbnailsBanner.js" type="text/javascript"></script>
    <script src="js/reflection.js" type="text/javascript"></script>
    <script>
        jQuery(function() {
            jQuery('#allinone_thumbnailsBanner_simple').allinone_thumbnailsBanner({
                skin: 'simple',
                numberOfThumbsPerScreen: 7,
                width: 960,
                height: 480,
                thumbsReflection: 0,
                responsive: true
            });
        });
    </script>
</body>

</html>
