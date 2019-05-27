<!DOCTYPE html>
<html class="no-js">
<!-- Head -->
<link rel="stylesheet" href="css/experience.css">
<link rel="stylesheet" type="text/css" href="css/base.css" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/modal-video.min.css">
<!--  slide view  -->
<link rel="stylesheet" href="css/icomoon.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/slide-view.css">

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


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
    <div class="intro aos-item" data-aos="fade-up">
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
                <div class="col-lg-7 intro_col aos-item" data-aos="fade-up">
                    <div class="intro_images" data-video-id='5fjQg6XlO0o'>
                        <div class="intro_1 intro_img"><img src="img/experience/image1.jpg" alt=""></div>
                        <div class="intro_2 intro_img"><img src="img/experience/image3.jpg" alt=""></div>
                        <div class="intro_3 intro_img"><img src="img/experience/image2.jpg" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Intro -->


    <!--  Start slide  -->

    <h1 class="text-title aos-item" data-aos="fade-up">세계 여행지 TOP 15</h1>
    <section class="roberto-rooms-area aos-item" data-aos="fade-up">
        <div class="rooms-slides owl-carousel">
            <?php
                include_once('simple_html_dom.php');
                $url = ('https://www.tripadvisor.co.kr/TravelersChoice-Destinations-cTop-g1');
                $html = file_get_html($url);
    
                $href = array(
                    "https://www.tripadvisor.co.kr/Tourism-g186338-London_England-Vacations.html",
                    "https://www.tripadvisor.co.kr/Tourism-g187147-Paris_Ile_de_France-Vacations.html",
                    "https://www.tripadvisor.co.kr/Tourism-g187791-Rome_Lazio-Vacations.html",
                    "https://www.tripadvisor.co.kr/Tourism-g189413-Crete-Vacations.html",
                    "https://www.tripadvisor.co.kr/Tourism-g294226-Bali-Vacations.html",
                    "https://www.tripadvisor.co.kr/Tourism-g293920-Phuket-Vacations.html",
                    "https://www.tripadvisor.co.kr/Tourism-g187497-Barcelona_Catalonia-Vacations.html",
                    "https://www.tripadvisor.co.kr/Tourism-g293974-Istanbul-Vacations.html",
                    "https://www.tripadvisor.co.kr/Tourism-g293734-Marrakech_Marrakech_Tensift_El_Haouz_Region-Vacations.html",
                    "https://www.tripadvisor.co.kr/Tourism-g295424-Dubai_Emirate_of_Dubai-Vacations.html",
                    "https://www.tripadvisor.co.kr/Tourism-g274707-Prague_Bohemia-Vacations.html",
                    "https://www.tripadvisor.co.kr/Tourism-g297390-Siem_Reap_Siem_Reap_Province-Vacations.html",
                    "https://www.tripadvisor.co.kr/Tourism-g60763-New_York_City_New_York-Vacations.html",
                    "https://www.tripadvisor.co.kr/Tourism-g147309-Jamaica-Vacations.html",
                    "https://www.tripadvisor.co.kr/Tourism-g293924-Hanoi-Vacations.html"
                 );
            ?>
            <!-- Single Room Slide -->
            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background-image: url(https://res.klook.com/images/fl_lossy.progressive,q_65/c_fill,w_1295,h_720,f_auto/w_80,x_15,y_15,g_south_west,l_klook_water/activities/rsmbe6ueihbpd2rcmlca/%EB%9F%B0%EB%8D%98%EC%9D%BC%EC%9D%BC%ED%88%AC%EC%96%B4%EA%B7%BC%EC%9C%84%EB%B3%91%EA%B5%90%EB%8C%80%EC%8B%9D.jpg);"></div>

                <!-- Content -->
                <div class="room-content">

                    <h2 data-animation="fadeInUp" data-delay="100ms">
                        <div class="posn"><?php echo $html -> find('.posn', 0) -> plaintext; ?></div><?php echo $html -> find('.mainName', 0) -> plaintext; ?>
                    </h2><br>
                    <h3 data-animation="fadeInUp" data-delay="300ms">추천명소</h3>
                    <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 0) -> plaintext; ?></span></li>
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 1) -> plaintext; ?></span></li>
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 2) -> plaintext; ?></span></li>
                    </ul>
                    <a href="<?php echo $href[0]; ?>" class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms">View Details</a>
                </div>
            </div>

            <!-- Single Room Slide -->
            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background-image: url(https://post-phinf.pstatic.net/MjAxODAxMTZfMjc1/MDAxNTE2MDY5NzQxOTg0.dOC1YNZtUiDg3GU4aq1qfIpPPXvHqm1ouXgRZEYIdlkg.RYxwpLTrTF87TITM509iWFbc-hF-4u58HXrTdutMWawg.JPEG/%ED%8C%8C%EB%A6%AC%EC%9D%BC%EC%9D%BC%ED%88%AC%EC%96%B4_1.jpg?type=w1200);"></div>

                <!-- Content -->
                <div class="room-content">

                    <h2 data-animation="fadeInUp" data-delay="100ms">
                        <div class="posn"><?php echo $html -> find('.posn', 1) -> plaintext; ?></div><?php echo $html -> find('.mainName', 1) -> plaintext; ?>
                    </h2><br>
                    <h3 data-animation="fadeInUp" data-delay="300ms">추천명소</h3>
                    <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 3) -> plaintext; ?></span></li>
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 4) -> plaintext; ?></span></li>
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 5) -> plaintext; ?></span></li>
                    </ul>
                    <a href="<?php echo $href[1]; ?>" class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms">View Details</a>
                </div>
            </div>

            <!-- Single Room Slide -->
            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background-image: url(http://www.tripplan.or.kr/wp-content/uploads/2018/08/%EB%A1%9C%EB%A7%88.jpg);"></div>

                <!-- Content -->
                <div class="room-content">

                    <h2 data-animation="fadeInUp" data-delay="100ms">
                        <div class="posn"><?php echo $html -> find('.posn', 2) -> plaintext; ?></div><?php echo $html -> find('.mainName', 2) -> plaintext; ?>
                    </h2><br>
                    <h3 data-animation="fadeInUp" data-delay="300ms">추천명소</h3>
                    <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 6) -> plaintext; ?></span></li>
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 7) -> plaintext; ?></span></li>
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 8) -> plaintext; ?></span></li>
                    </ul>
                    <a href="<?php echo $href[2]; ?>" class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms">View Details</a>
                </div>
            </div>

            <!-- Single Room Slide -->
            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background-image: url(https://www.discovergreece.com/~/media/images/highlight-large-images/az/a/agios-nikolaos-elounta/agios-nikolaos_crete.ashx);"></div>

                <!-- Content -->
                <div class="room-content">

                    <h2 data-animation="fadeInUp" data-delay="100ms">
                        <div class="posn"><?php echo $html -> find('.posn', 3) -> plaintext; ?></div><?php echo $html -> find('.mainName', 3) -> plaintext; ?>
                    </h2><br>
                    <h3 data-animation="fadeInUp" data-delay="300ms">추천명소</h3>
                    <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 9) -> plaintext; ?></span></li>
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 10) -> plaintext; ?></span></li>
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 11) -> plaintext; ?></span></li>
                    </ul>
                    <a href="<?php echo $href[3]; ?>" class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms">View Details</a>
                </div>
            </div>

            <!-- Single Room Slide -->
            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background-image: url(https://pix10.agoda.net/hotelImages/650/6504/6504_16041513160041537347.jpg?s=1024x768);"></div>

                <!-- Content -->
                <div class="room-content">

                    <h2 data-animation="fadeInUp" data-delay="100ms">
                        <div class="posn"><?php echo $html -> find('.posn', 4) -> plaintext; ?></div><?php echo $html -> find('.mainName', 4) -> plaintext; ?>
                    </h2><br>
                    <h3 data-animation="fadeInUp" data-delay="300ms">추천명소</h3>
                    <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 12) -> plaintext; ?></span></li>
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 13) -> plaintext; ?></span></li>
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 14) -> plaintext; ?></span></li>
                    </ul>
                    <a href="<?php echo $href[4]; ?>" class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms">View Details</a>
                </div>
            </div>

            <!-- Single Room Slide -->
            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background-image: url(https://pix10.agoda.net/hotelImages/448/44882/44882_15082710390035163062.jpg?s=1024x768);"></div>

                <!-- Content -->
                <div class="room-content">

                    <h2 data-animation="fadeInUp" data-delay="100ms">
                        <div class="posn"><?php echo $html -> find('.posn', 5) -> plaintext; ?></div><?php echo $html -> find('.mainName', 5) -> plaintext; ?>
                    </h2><br>
                    <h3 data-animation="fadeInUp" data-delay="300ms">추천명소</h3>
                    <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 15) -> plaintext; ?></span></li>
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 16) -> plaintext; ?></span></li>
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 17) -> plaintext; ?></span></li>
                    </ul>
                    <a href="<?php echo $href[5]; ?>" class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms">View Details</a>
                </div>
            </div>

            <!-- Single Room Slide -->
            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background-image: url(https://img-wishbeen.akamaized.net/plan/1411955921784_barcelona-spain.jpg);"></div>

                <!-- Content -->
                <div class="room-content">

                    <h2 data-animation="fadeInUp" data-delay="100ms">
                        <div class="posn"><?php echo $html -> find('.posn', 6) -> plaintext; ?></div><?php echo $html -> find('.mainName', 6) -> plaintext; ?>
                    </h2><br>
                    <h3 data-animation="fadeInUp" data-delay="300ms">추천명소</h3>
                    <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 18) -> plaintext; ?></span></li>
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 19) -> plaintext; ?></span></li>
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 20) -> plaintext; ?></span></li>
                    </ul>
                    <a href="<?php echo $href[6]; ?>" class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms">View Details</a>
                </div>
            </div>

            <!-- Single Room Slide -->
            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background-image: url(https://post-phinf.pstatic.net/MjAxODAzMDZfMjMy/MDAxNTIwMzEyMzkyMzQy.TwcGQCPR3J41x9VH0n98Itt8FysM3gdKFozCp9r821cg.TB7meYtx57cVCvLZQ9Mw5Rxu9AJOdY2QqnGYcCMQDr8g.JPEG/%EC%9D%B4%EC%8A%A4%ED%83%84%EB%B6%88%283%29-min.jpg?type=w1200);"></div>

                <!-- Content -->
                <div class="room-content">

                    <h2 data-animation="fadeInUp" data-delay="100ms">
                        <div class="posn"><?php echo $html -> find('.posn', 7) -> plaintext; ?></div><?php echo $html -> find('.mainName', 7) -> plaintext; ?>
                    </h2><br>
                    <h3 data-animation="fadeInUp" data-delay="300ms">추천명소</h3>
                    <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 21) -> plaintext; ?></span></li>
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 22) -> plaintext; ?></span></li>
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 23) -> plaintext; ?></span></li>
                    </ul>
                    <a href="<?php echo $href[7]; ?>" class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms">View Details</a>
                </div>
            </div>

            <!-- Single Room Slide -->
            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background-image: url(http://owowcoop.com/wp-content/uploads/2017/11/Trip-Fez-Medina-Guided-Tour.jpg);"></div>

                <!-- Content -->
                <div class="room-content">

                    <h2 data-animation="fadeInUp" data-delay="100ms">
                        <div class="posn"><?php echo $html -> find('.posn', 8) -> plaintext; ?></div><?php echo $html -> find('.mainName', 8) -> plaintext; ?>
                    </h2><br>
                    <h3 data-animation="fadeInUp" data-delay="300ms">추천명소</h3>
                    <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 24) -> plaintext; ?></span></li>
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 25) -> plaintext; ?></span></li>
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 26) -> plaintext; ?></span></li>
                    </ul>
                    <a href="<?php echo $href[8]; ?>" class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms">View Details</a>
                </div>
            </div>

            <!-- Single Room Slide -->
            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background-image: url(https://res.klook.com/images/fl_lossy.progressive,q_65/c_fill,w_1295,h_720,f_auto/w_80,x_15,y_15,g_south_west,l_klook_water/activities/wewnsjktxfxjcmgwxpth/%EB%91%90%EB%B0%94%EC%9D%B4%EC%8B%9C%ED%8B%B0%ED%88%AC%EC%96%B4.jpg);"></div>

                <!-- Content -->
                <div class="room-content">

                    <h2 data-animation="fadeInUp" data-delay="100ms">
                        <div class="posn"><?php echo $html -> find('.posn', 9) -> plaintext; ?></div><?php echo $html -> find('.mainName', 9) -> plaintext; ?>
                    </h2><br>
                    <h3 data-animation="fadeInUp" data-delay="300ms">추천명소</h3>
                    <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 27) -> plaintext; ?></span></li>
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 28) -> plaintext; ?></span></li>
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 29) -> plaintext; ?></span></li>
                    </ul>
                    <a href="<?php echo $href[9]; ?>" class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms">View Details</a>
                </div>
            </div>

            <!-- Single Room Slide -->
            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background-image: url(https://res.klook.com/images/fl_lossy.progressive,q_65/c_fill,w_1295,h_864,f_auto/w_80,x_15,y_15,g_south_west,l_klook_water/activities/skrc1voyybh8jvjvydp7/%ED%94%84%EB%9D%BC%ED%95%98%EB%82%98%EC%9D%B4%ED%8A%B8%EC%9B%8C%ED%82%B9%ED%88%AC%EC%96%B4.jpg);"></div>

                <!-- Content -->
                <div class="room-content">

                    <h2 data-animation="fadeInUp" data-delay="100ms">
                        <div class="posn"><?php echo $html -> find('.posn', 10) -> plaintext; ?></div><?php echo $html -> find('.mainName', 10) -> plaintext; ?>
                    </h2><br>
                    <h3 data-animation="fadeInUp" data-delay="300ms">추천명소</h3>
                    <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 30) -> plaintext; ?></span></li>
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 31) -> plaintext; ?></span></li>
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 32) -> plaintext; ?></span></li>
                    </ul>
                    <a href="<?php echo $href[10]; ?>" class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms">View Details</a>
                </div>
            </div>

            <!-- Single Room Slide -->
            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background-image: url(https://pix6.agoda.net/geo/city/16917/1_16917_02.jpg?s=1920x822);"></div>

                <!-- Content -->
                <div class="room-content">

                    <h2 data-animation="fadeInUp" data-delay="100ms">
                        <div class="posn"><?php echo $html -> find('.posn', 11) -> plaintext; ?></div><?php echo $html -> find('.mainName', 11) -> plaintext; ?>
                    </h2><br>
                    <h3 data-animation="fadeInUp" data-delay="300ms">추천명소</h3>
                    <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 33) -> plaintext; ?></span></li>
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 34) -> plaintext; ?></span></li>
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 35) -> plaintext; ?></span></li>
                    </ul>
                    <a href="<?php echo $href[11]; ?>" class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms">View Details</a>
                </div>
            </div>

            <!-- Single Room Slide -->
            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background-image: url(https://a1.cdn-hotels.com/gdcs/production198/d1715/0a9f0110-c195-11e7-90f2-0242ac110004.jpg);"></div>

                <!-- Content -->
                <div class="room-content">

                    <h2 data-animation="fadeInUp" data-delay="100ms">
                        <div class="posn"><?php echo $html -> find('.posn', 12) -> plaintext; ?></div><?php echo $html -> find('.mainName', 12) -> plaintext; ?>
                    </h2><br>
                    <h3 data-animation="fadeInUp" data-delay="300ms">추천명소</h3>
                    <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 36) -> plaintext; ?></span></li>
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 37) -> plaintext; ?></span></li>
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 38) -> plaintext; ?></span></li>
                    </ul>
                    <a href="<?php echo $href[12]; ?>" class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms">View Details</a>
                </div>
            </div>

            <!-- Single Room Slide -->
            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background-image: url(https://scontent-lht6-1.cdninstagram.com/vp/3f086966846508296d933cb945e69187/5D7738DA/t51.2885-15/e35/52188254_242261403347970_5321177949576649603_n.jpg?_nc_ht=scontent-lht6-1.cdninstagram.com&se=7&ig_cache_key=MTk5MDMyOTE3ODYxNzg3MTU4NA%3D%3D.2);"></div>

                <!-- Content -->
                <div class="room-content">

                    <h2 data-animation="fadeInUp" data-delay="100ms">
                        <div class="posn"><?php echo $html -> find('.posn', 13) -> plaintext; ?></div><?php echo $html -> find('.mainName', 13) -> plaintext; ?>
                    </h2><br>
                    <h3 data-animation="fadeInUp" data-delay="300ms">추천명소</h3>
                    <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 39) -> plaintext; ?></span></li>
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 40) -> plaintext; ?></span></li>
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 41) -> plaintext; ?></span></li>
                    </ul>
                    <a href="<?php echo $href[13]; ?>" class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms">View Details</a>
                </div>
            </div>

            <!-- Single Room Slide -->
            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background-image: url(https://img-wishbeen.akamaized.net/plan/1438568765888_%ED%81%AC%EA%B8%B0%EB%B3%80%ED%99%98_KQ7A2409.jpg);"></div>

                <!-- Content -->
                <div class="room-content">

                    <h2 data-animation="fadeInUp" data-delay="100ms">
                        <div class="posn"><?php echo $html -> find('.posn', 14) -> plaintext; ?></div><?php echo $html -> find('.mainName', 14) -> plaintext; ?>
                    </h2><br>
                    <h3 data-animation="fadeInUp" data-delay="300ms">추천명소</h3>
                    <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 42) -> plaintext; ?></span></li>
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 43) -> plaintext; ?></span></li>
                        <li><span><i class="fa fa-check"></i> <?php echo $html -> find('.bdy li', 44) -> plaintext; ?></span></li>
                    </ul>
                    <a href="<?php echo $href[14]; ?>" class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms">View Details</a>
                </div>
            </div>

        </div>
    </section>
    <!--  End slide  -->


    <!-- Start SlideView -->
    <h1 id="startCartView" class="text-title aos-item" data-aos="fade-up">Experience TOP 15</h1>
    <div id="colorlib-rooms" class="colorlib-light-grey aos-item" data-aos="fade-up">
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
                                <p><a href="https://www.tripadvisor.co.kr/Attraction_Review-g186338-d553603-Reviews-Coca_Cola_London_Eye-London_England.html" class="btn btn-primary btn-book">Book now!</a></p>
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
                                <p><a href="https://www.tripadvisor.co.kr/Attraction_Review-g298566-d11726958-Reviews-MariCAR_Osaka-Osaka_Osaka_Prefecture_Kinki.html" class="btn btn-primary btn-book">Book now!</a></p>
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
                                <p><a href="https://www.tripadvisor.co.kr/Attraction_Review-g293916-d1949569-Reviews-Siam_Park_City-Bangkok.html" class="btn btn-primary btn-book">Book now!</a></p>
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
                                <p><a href="https://www.tripadvisor.co.kr/Attraction_Review-g13808671-d1596376-Reviews-TaipeiEYE-Zhongshan_District_Taipei.html" class="btn btn-primary btn-book">Book now!</a></p>
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
                                <p><a href="https://www.tripadvisor.co.kr/Attraction_Review-g60608-d126657-Reviews-Dolphin_Quest-Waikoloa_Kohala_Coast_Island_of_Hawaii_Hawaii.html" class="btn btn-primary btn-book">Book now!</a></p>
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
                                <p><a href="https://www.tripadvisor.co.kr/Attraction_Review-g187147-d188757-Reviews-Louvre_Museum-Paris_Ile_de_France.html" class="btn btn-primary btn-book">Book now!</a></p>
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
                                <p><a href="https://www.tripadvisor.co.kr/Attraction_Review-g298085-d6612108-Reviews-Dragon_Bridge-Da_Nang.html" class="btn btn-primary btn-book">Book now!</a></p>
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
                                <p><a href="https://www.tripadvisor.co.kr/Attraction_Review-g7351247-d1806269-Reviews-Aguinid_Falls-Samboan_Cebu_Island_Visayas.html" class="btn btn-primary btn-book">Book now!</a></p>
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
                                <p><a href="https://www.tripadvisor.co.kr/Attraction_Review-g297885-d2204930-Reviews-Jeju_Kimnyoung_Maze_Park-Jeju_Jeju_Island.html" class="btn btn-primary btn-book">Book now!</a></p>
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
                                <p><a href="https://www.tripadvisor.co.kr/Attraction_Review-g187791-d4010080-Reviews-The_Roman_Food_Tour-Rome_Lazio.html" class="btn btn-primary btn-book">Book now!</a></p>
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
                                <p><a href="https://www.tripadvisor.co.kr/Attraction_Review-g1535800-d1536672-Reviews-Elafonissi_Beach-Elafonissi_Chania_Prefecture_Crete.html" class="btn btn-primary btn-book">Book now!</a></p>
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
                                <p><a href="https://www.tripadvisor.co.kr/Attraction_Review-g297697-d386919-Reviews-Waterbom_Bali-Kuta_Kuta_District_Bali.html" class="btn btn-primary btn-book">Book now!</a></p>
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
                                <p><a href="https://www.tripadvisor.co.kr/Attraction_Review-g293920-d4985745-Reviews-Phuket_Bird_Park-Phuket.html" class="btn btn-primary btn-book">Book now!</a></p>
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
                                <p><a href="https://www.tripadvisor.co.kr/Attraction_Review-g187497-d190166-Reviews-Basilica_of_the_Sagrada_Familia-Barcelona_Catalonia.html" class="btn btn-primary btn-book">Book now!</a></p>
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
                                <p><a href="https://www.tripadvisor.co.kr/Attraction_Review-g293734-d477277-Reviews-Jardin_Majorelle-Marrakech_Marrakech_Tensift_El_Haouz_Region.html" class="btn btn-primary btn-book">Book now!</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- start silder -->
    <div id="app" class="aos-item" data-aos="fade-up"></div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/react/15.6.1/react.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/react/15.6.1/react-dom.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/classnames/2.2.5/index.min.js'></script>
    <!--End silder -->

    <!-- Start site category title -->
    <div class="header wrap aos-item" data-aos="fade-up">
        <h2 class="background double"><span>다른 것들이 필요하신가요? <span style="color: orange">Travel Maker 카테고리 더 보기</span></span></h2>
    </div> <!-- end site category title-->

    <!-- start site category Grid -->
    <div class="categoty aos-item" data-aos="fade-up">
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
                controls: 1,
                nocookie: false
            }
        });

    </script>
    <!--  animate  -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();

    </script>
    <!--   slide   -->
    <script src="js/roberto.bundle.js"></script>
    <script src="js/active.js"></script>

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
