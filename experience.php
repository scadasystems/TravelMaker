<!DOCTYPE html>
<html class="no-js">
<!-- Head -->
<link rel="stylesheet" href="css/experience.css">
<link rel="stylesheet" type="text/css" href="css/base.css" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.min.css">
<script src="js/textAnimated.js"></script>

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
                    <div class="intro_images magic_up">
                        <div class="intro_1 intro_img"><img src="https://colorlib.com/preview/theme/samira/images/intro_3.jpg" alt=""></div>
                        <div class="intro_2 intro_img"><img src="https://colorlib.com/preview/theme/samira/images/intro_2.jpg" alt=""></div>
                        <div class="intro_3 intro_img"><img src="https://colorlib.com/preview/theme/samira/images/intro_1.jpg" alt=""></div>
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
    <div class="grid-wrap">
        <div class="grid">
            <a href="#" class="grid__item">
                <div class="grid__item-bg"></div>
                <div class="grid__item-wrap">
                    <img class="grid__item-img" src="https://media-cdn.tripadvisor.com/media/photo-w/02/1f/d3/4c/caption.jpg" alt="Some image" />
                </div>
                <h3 class="grid__item-title">Seoul</h3>
                <h4 class="grid__item-number">서울&nbsp;N&nbsp;타워</h4>
            </a>
            <a href="#" class="grid__item">
                <div class="grid__item-bg"></div>
                <div class="grid__item-wrap">
                    <img class="grid__item-img" src="https://media-cdn.tripadvisor.com/media/photo-s/02/1c/ab/64/la-terrasse-lille-et.jpg" alt="Some image" />
                </div>
                <h3 class="grid__item-title">Paris</h3>
                <h4 class="grid__item-number">Musée&nbsp;d'Orsay</h4>
            </a>
            <a href="#" class="grid__item">
                <div class="grid__item-bg"></div>
                <div class="grid__item-wrap">
                    <img class="grid__item-img" src="https://media-cdn.tripadvisor.com/media/photo-o/04/c5/48/a2/comedie-tour-eiffel.jpg" alt="Some image" />
                </div>
                <h3 class="grid__item-title">Paris</h3>
                <h4 class="grid__item-number">에펠&nbsp;타워</h4>
            </a>
            <a href="#" class="grid__item">
                <div class="grid__item-bg"></div>
                <div class="grid__item-wrap">
                    <img class="grid__item-img" src="https://media-cdn.tripadvisor.com/media/photo-w/0f/3e/f4/f0/photo2jpg.jpg" alt="Some image" />
                </div>
                <h3 class="grid__item-title">Rome</h3>
                <h4 class="grid__item-number">콜로세움</h4>
            </a>
            <a href="#" class="grid__item">
                <div class="grid__item-bg"></div>
                <div class="grid__item-wrap">
                    <img class="grid__item-img" src="https://media-cdn.tripadvisor.com/media/photo-s/17/29/0b/80/photo0jpg.jpg" alt="Some image" />
                </div>
                <h3 class="grid__item-title">Beijing</h3>
                <h4 class="grid__item-number">만리장성</h4>
            </a>
            <a href="#" class="grid__item">
                <div class="grid__item-bg"></div>
                <div class="grid__item-wrap">
                    <img class="grid__item-img" src="https://media-cdn.tripadvisor.com/media/photo-s/00/12/08/be/brandenburg-gate-at-night.jpg" alt="Some image" />
                </div>
                <h3 class="grid__item-title">Berlin</h3>
                <h4 class="grid__item-number">Brandenburg&nbsp;Gate</h4>
            </a>

            <a href="#" class="grid__item">
                <div class="grid__item-bg"></div>
                <div class="grid__item-wrap">
                    <img class="grid__item-img" src="https://media-cdn.tripadvisor.com/media/photo-w/13/8f/7e/b0/lincoln-road.jpg" alt="Some image" />
                </div>
                <h3 class="grid__item-title">Miami&nbsp;Beach</h3>
                <h4 class="grid__item-number">링컨로드</h4>
            </a>
            <a href="#" class="grid__item">
                <div class="grid__item-bg"></div>
                <div class="grid__item-wrap">
                    <img class="grid__item-img" src="https://media-cdn.tripadvisor.com/media/photo-s/17/2f/f8/73/torre-na-cidade-velha.jpg" alt="Some image" />
                </div>
                <h3 class="grid__item-title">parague</h3>
                <h4 class="grid__item-number">Charles&nbsp;Bridge</h4>
            </a>
            <a href="#" class="grid__item">
                <div class="grid__item-bg"></div>
                <div class="grid__item-wrap">
                    <img class="grid__item-img" src="https://media-cdn.tripadvisor.com/media/photo-w/15/43/75/21/photo0jpg.jpg" alt="Some image" />
                </div>
                <h3 class="grid__item-title">Kyoto</h3>
                <h4 class="grid__item-number">금각사</h4>
            </a>
            <a href="#" class="grid__item">
                <div class="grid__item-bg"></div>
                <div class="grid__item-wrap">
                    <img class="grid__item-img" src="https://post-phinf.pstatic.net/MjAxODAyMTBfMjEz/MDAxNTE4MjQ5MTEzMTc2.-YIFvgVVdCdpiVizy3rjGPx_VYyE1VCmkZ-CK-Eelokg.WAx0JZV5pmv1HbW0YMxD2PYekznWiDQ6QhiAOlEo94wg.PNG/%EB%94%94%EC%A6%88%EB%8B%88.PNG?type=w1200" alt="Some image" />
                </div>
                <h3 class="grid__item-title">California</h3>
                <h4 class="grid__item-number">Disneyland&nbsp;Park</h4>
            </a>
            <a href="#" class="grid__item">
                <div class="grid__item-bg"></div>
                <div class="grid__item-wrap">
                    <img class="grid__item-img" src="img/experience/11.jpg" alt="Some image" />
                </div>
                <h3 class="grid__item-title">Making the best of it</h3>
                <h4 class="grid__item-number">EC5</h4>
            </a>
            <a href="#" class="grid__item">
                <div class="grid__item-bg"></div>
                <div class="grid__item-wrap">
                    <img class="grid__item-img" src="img/experience/12.jpg" alt="Some image" />
                </div>
                <h3 class="grid__item-title">Haunted Blessings</h3>
                <h4 class="grid__item-number">2VX</h4>
            </a>
        </div>
    </div><!-- /grid-wrap -->
    <div class="content">
        <div class="content__item">
            <div class="content__item-intro">
                <img class="content__item-img" src="https://img.traveldata.sk/hotel/9/90/1436706.jpg" alt="Some image" />
                <h2 class="content__item-title">Sharm El Sheikh</h2>
            </div>
            <h3 class="content__item-subtitle">"스쿠버다이버들의 천국"</h3>
            <div class="content__item-text">
                <p>한국에서는 아직 생소하지만, 유럽인들에게는 최고의 휴양지로 꼽히는 곳이다. 사르코지 프랑스 전 대통령과 토니 블레어 전 영국 총리도 이곳에서 휴가를 보냈으며, 중동의 부호들은 이곳의 고급 리조트에서 VVIP 여행을 즐긴다. 샤름 엘 셰이크의 곳곳에는 '별 다섯 개' 호텔과 리조트가 즐비하다.<br><br>샤름 엘 셰이크에 간다면 꼭 한번 스노클링과 다이빙에 도전할 만하다. 해양 액티비티를 즐기는 이들에게 홍해는 '꿈의 바다'로 꼽히기 때문이다. 이곳에는 250여 종의 산호와 1,000여 종의 물고기가 있는 것으로 알려진다. 하지만 굳이 물 속으로 들어가지 않고, 해변이나 배 위에서 바다를 바라보는 것도 환상적이다.<br><br>시나이 반도에 위치한 샤름 엘 셰이크는 이집트 본토와 '다른 나라'로 느껴질 만큼 분위기가 다르다. 히잡을 둘러쓴 사람을 보기 힘들고, 밤이면 노천 바(Bar)에서 유흥을 즐길 수 있다. 양탄자와 물담배로 외관을 장식하고 있는 노천 바들을 보고 있자면, 비로소 '먼 나라' 이집트에 와 있다는 느낌이 난다.</p>
            </div>
        </div><!-- /content__item -->
        <div class="content__item">
            <div class="content__item-intro">
                <img class="content__item-img" src="img/experience/2.jpg" alt="Some image" />
                <h2 class="content__item-title">Tenerife</h2>
            </div>
            <h3 class="content__item-subtitle">"유럽인들의 하와이"</h3>
            <div class="content__item-text">
                <p>대서양에 위치한 화산섬이다. 총 7개의 섬으로 이뤄진 스페인령 카나리아 제도(Canary Islands) 에 속해 있는데, 위치상으로는 아프리카와 더 가깝다. 유럽권에선 '유럽의 하와이'라고 불리는 곳이지만, 한국인은 축구에 관심 있는 경우가 아니라면(테네리페는 스페인 2부 리그가 있는 곳이다) 모르는 사람이 더 많다. 그러나 테네리페가 60~70년대 한국인 원양어선 선원들이 찾던 곳이며, 이곳에 '한국인 선원 위령비'가 있다는 걸 알고 나면 놀라게 된다.<br><br>테네리페 섬의 가장 큰 볼거리는 해발고도 3,718m의 화산 봉우리 '엘 테이데(El Teide)'다. 대서양에서 가장 높은 이곳에는 국립공원이 조성돼 있다. 매캐한 유황 가스가 뿜어져 나오는 용암, 척박한 땅에서 뿌리내린 희귀 식물 등 사람의 손이 닿지 않은 대자연을 느끼기에 제격이다.<br><br>매년 초에는 세계적인 규모의 카니발 '산타 크루즈 드 테네리페(Santa Cruz de Tenerife)'가 열려 많은 관광객들이 찾는다. 테네리페 섬을 포함한 카나리아 제도 일대는 미국 드라마 '왕좌의 게임', 영화 '본 시리즈' 촬영지로도 유명하다.</p>
            </div>
        </div><!-- /content__item -->
        <div class="content__item">
            <div class="content__item-intro">
                <img class="content__item-img" src="https://media-cdn.tripadvisor.com/media/photo-s/0d/af/70/3c/the-white-tower-the-norman.jpg" alt="Some image" />
                <h2 class="content__item-title">Courchevewl</h2>
            </div>
            <h3 class="content__item-subtitle">"알프스에 둘러싸인 산속 마을"</h3>
            <div class="content__item-text">
                <p>알프스 산자락에 위치한 프랑스의 조그만 마을이다. 사실 쿠쉐빌은 겨울철 스키어들에게 더 유명하다. 높은 고도와 산맥이 만든 자연 스키장은 전세계 모든 스키어들의 로망이다. 여름의 쿠쉐빌은 느긋하게 휴식을 취하기에 좋다. 클래식을 들으며 자연경관을 즐길 수 있는데, 이곳에서 매년 7월 실내악 축제인 '뮤직알프 페스티벌'이 열리기 때문이다.<br><br>단 하나 오점은 쿠쉐빌에 가기 위해 '세계에서 가장 위험한 공항'을 거쳐야 하는 것이다. 쿠쉐빌 국제공항은 스키장마냥 경사진 활주로를 가져 인터넷상에서도 화제가 된 적이 있다. 여기에 주변으로 솟은 높은 알프스 산들 때문에 이·착륙시 위험한 공항으로 꼽힌다. 공항을 이용하지 않고, 파리에서 열차와 버스를 갈아타 쿠쉐빌까지 가는 방법도 있다.</p>

            </div>
        </div><!-- /content__item -->
        <div class="content__item">
            <div class="content__item-intro">
                <img class="content__item-img" src="img/experience/4.jpg" alt="Some image" />
                <h2 class="content__item-title">The silent thief</h2>
            </div>
            <h3 class="content__item-subtitle">"How I learned to cherish life after a trip to hell"</h3>
            <div class="content__item-text">
                <p>When I was in the islands nearly a generation ago, I was fright.</p>
            </div>
        </div><!-- /content__item -->
        <div class="content__item">
            <div class="content__item-intro">
                <img class="content__item-img" src="img/experience/5.jpg" alt="Some image" />
                <h2 class="content__item-title">Locked away</h2>
            </div>
            <h3 class="content__item-subtitle">"How I learned to cherish life after a trip to hell"</h3>
            <div class="content__item-text">
                <p>When I was in the islands nearly a generation ago, I was</p>
            </div>
        </div><!-- /content__item -->
        <div class="content__item">
            <div class="content__item-intro">
                <img class="content__item-img" src="https://media-cdn.tripadvisor.com/media/photo-s/17/2f/f8/73/torre-na-cidade-velha.jpg" alt="Some image" />
                <h2 class="content__item-title">Isolation and me</h2>
            </div>
            <h3 class="content__item-subtitle">"How I learned to cherish life after a trip to hell"</h3>
            <div class="content__item-text">
                <p>When I was in the islands nearly a generation ago, I was </p>
            </div>
        </div><!-- /content__item -->
        <div class="content__item">
            <div class="content__item-intro">
                <img class="content__item-img" src="img/experience/7.jpg" alt="Some image" />
                <h2 class="content__item-title">Desert races</h2>
            </div>
            <h3 class="content__item-subtitle">"How I learned to cherish life after a trip to hell"</h3>
            <div class="content__item-text">
                <p>When I was in the islands nearly a generation ago, I was </p>
            </div>
        </div><!-- /content__item -->
        <div class="content__item">
            <div class="content__item-intro">
                <img class="content__item-img" src="img/experience/8.jpg" alt="Some image" />
                <h2 class="content__item-title">Transcendence</h2>
            </div>
            <h3 class="content__item-subtitle">"How I learned to cherish life after a trip to hell"</h3>
            <div class="content__item-text">
                <p>When I was in the islands nearly a generation ago, I was </p>
            </div>
        </div><!-- /content__item -->
        <div class="content__item">
            <div class="content__item-intro">
                <img class="content__item-img" src="img/experience/9.jpg" alt="Some image" />
                <h2 class="content__item-title">Loosing my mind</h2>
            </div>
            <h3 class="content__item-subtitle">"How I learned to cherish life after a trip to hell"</h3>
            <div class="content__item-text">
                <p>When I was in the islands nearly a generation ago, I was </p>
            </div>
        </div><!-- /content__item -->
        <div class="content__item">
            <div class="content__item-intro">
                <img class="content__item-img" src="img/experience/10.jpg" alt="Some image" />
                <h2 class="content__item-title">Holding your breath</h2>
            </div>
            <h3 class="content__item-subtitle">"How I learned to cherish life after a trip to hell"</h3>
            <div class="content__item-text">
                <p>When I was in the islands nearly a generation ago, I was </p>
            </div>
        </div><!-- /content__item -->
        <div class="content__item">
            <div class="content__item-intro">
                <img class="content__item-img" src="img/experience/11.jpg" alt="Some image" />
                <h2 class="content__item-title">Making the best of it</h2>
            </div>
            <h3 class="content__item-subtitle">"How I learned to cherish life after a trip to hell"</h3>
            <div class="content__item-text">
                <p>When I was in the islands nearly a generation ago, I was </p>
            </div>
        </div><!-- /content__item -->
        <div class="content__item">
            <div class="content__item-intro">
                <img class="content__item-img" src="img/experience/12.jpg" alt="Some image" />
                <h2 class="content__item-title">Haunted Blessings</h2>
            </div>
            <h3 class="content__item-subtitle">"How I learned to cherish life after a trip to hell"</h3>
            <div class="content__item-text">
                <p>When I was in the islands nearly a generation ago, I was </p>
            </div>
        </div><!-- /content__item -->
        <button class="content__close">Close</button>
        <svg class="content__indicator icon icon--caret">
            <use xlink:href="#icon-caret"></use>
        </svg>
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
    <script src="js/experience_siler.js"></script>
    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

    <!-- CardView -->
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/charming.min.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/cardView.js"></script>



</body>

</html>
