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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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

  <!-- start list Area -->
  <div class="container">
    <div class="text" style="margin-left:0; margin-top:50px">
      <p style="margin-left:0">Airline Top15</p>
    </div>
    <div id="item-list">
      <ul>
        <li>
          <a class="expand_airline">
            <div class="right-arrow">1</div>
            <div class="icon_airline qantas"></div>
            <h2>Qantas</h2>
            <span>콴타스항공</span>
          </a>

          <div class="detail" style="display: block">
            <div class="blog-card alt">
              <div class="meta">
                <div class="photo" style="background-image: url(../img/Airport/airline_photos/qantas.jpg)"></div>
              </div>
              <div class="description">
                <h1>"역사만큼 깊은 수준"</h1>
                <h2>4.9 <i class="fas fa-heart"></i></h2>
                <p>"Qantas와 함께하는 비행은 언제나 즐겁습니다. 서비스의 품격도 높고요. 수많은 엔터테인먼트 채널을 갖추고 있어요. 서비스가 모든 면에서 최고입니다. 승무원들은 예의 바르고 일 처리가 효율적이에요. 항공기는 신형이고 편안해요. 계속 탈 수 있을 것 같아요." <br><br><br></p>
                <p class="read-more">
                  <a href="https://www.qantas.com/kr/en.html"> visit Website</a>
                </p>
              </div>
            </div>
          </div>
        </li>
        <li>
          <a class="expand_airline">
            <div class="right-arrow">2</div>
            <div class="icon_airline delta"></div>
            <h2>Delta</h2>
            <span>델타항공</span>
          </a>

          <div class="detail">
            <div class="blog-card">
              <div class="meta">
                <div class="photo" style="background-image: url(..//img/Airport/airline_photos/delta.jpg)"></div>
              </div>
              <div class="description">
                <h1>"편안한 비행"</h1>
                <h2>4.9 <i class="fas fa-heart"></i></h2>
                <p> "여행 중에도 내 집 같은 편안함을 느낄 수 있습니다. 목적지에 도착하기 전부터 환대를 누릴 수 있습니다. 여러 가지 일을 처리하느라 바쁜 와중에도 세심한 보살핌을 받을 수 있습니다. 짧은 비행이라도 상쾌한 기분으로 도착할 수 있습니다. 긴 환승 후에도 편안하게 휴식을 취할 수 있습니다. 장거리 여행 중에도 본인만의 시간을 즐길 수 있습니다." <br><br></p>
                <p class="read-more">
                  <a href="https://ko.delta.com/"> visit Website</a>
                </p>
              </div>
            </div>
          </div>
        </li>
        <li>
          <a class="expand_airline">
            <div class="right-arrow">3</div>
            <div class="icon_airline lufthansa"></div>
            <h2>Lufthansa</h2>
            <span>루프트한자</span>
          </a>

          <div class="detail">
            <div class="blog-card">
              <div class="meta">
                <div class="photo" style="background-image: url(..//img/Airport/airline_photos/lufthansa.jpg)"></div>
              </div>
              <div class="description">
                <h1>"모든면에서 뛰어남"</h1>
                <h2>4.9 <i class="fas fa-heart"></i></h2>
                <p>"의심할 여지 없이 맛있는 음식과 서비스 및 편안함과 최고의 기내 엔터테인먼트를 갖춘 항공사 중 하나임에 틀림 없어요. 승무원들은 승객을 편안하게 모시기 위해 정성을 다합니다." <br><br><br><br></p>
                <p class="read-more">
                  <a href="https://www.lufthansa.com/xx/ko/homepage"> visit Website</a>
                </p>
              </div>
            </div>
          </div>
        </li>
        <li>
          <a class="expand_airline">
            <div class="right-arrow">4</div>
            <div class="icon_airline virgin"></div>
            <h2>Virgin atlantic</h2>
            <span>버진 아틀란틱</span>
          </a>

          <div class="detail">
            <div class="blog-card alt">
              <div class="meta">
                <div class="photo" style="background-image: url(../img/Airport/airline_photos/virgin.png)"></div>
              </div>
              <div class="description">
                <h1>"생의 최고의 항공사"</h1>
                <h2>4.8 <i class="fas fa-heart"></i></h2>
                <p>“이제는 다른 항공사로 여행하지 않을 거예요. 승무원들의 서비스가 최고입니다. 다리를 뻗을 수 있는 공간이 다른 어느 프리미엄 이코노미 비행사보다 넓어요. 훌륭한 엔터테인먼트 패키지도 갖춰져 있고요. 올해에만 세 번 예약했어요. 그 이유는 쉽게 알 수 있어요.” <br><br><br></p>
                <p class="read-more">
                  <a href="https://www.virginatlantic.com/"> visit Website</a>
                </p>
              </div>
            </div>
          </div>
        </li>
        <li>
          <a class="expand_airline">
            <div class="right-arrow">5</div>
            <div class="icon_airline swis"></div>
            <h2>Swis Airline</h2>
            <span>스위스 항공</span>
          </a>

          <div class="detail">
            <div class="blog-card">
              <div class="meta">
                <div class="photo" style="background-image: url(..//img/Airport/airline_photos/swiss.png)"></div>
              </div>
              <div class="description">
                <h1>"부족함이 없습니다."</h1>
                <h2>4.8 <i class="fas fa-heart"></i></h2>
                <p>"기본에 충실하여 모든 상품과 서비스에 대해 가급적 최고의 품질을 제공하고자 최선을 다합니다. 또한 고객들과 최대한 가까운 곳에서 개개인에게 필요한 사항을 충족할 수 있도록 최적화된 상태를 갖추고 있습니다."<br><br><br><br></p>
                <p class="read-more">
                  <a href="https://www.staralliance.com/ko/member-airline-details?airlineCode=LX"> visit Website</a>
                </p>
              </div>
            </div>
          </div>
        </li>
        <li>
          <a class="expand_airline">
            <div class="right-arrow">6</div>
            <div class="icon_airline eva"></div>
            <h2>Eva Airline</h2>
            <span>에바 항공</span>
          </a>
          <div class="detail">
            <div class="blog-card">
              <div class="meta">
                <div class="photo" style="background-image: url(..//img/Airport/airline_photos/eva.jpg)"></div>
              </div>
              <div class="description">
                <h1>"인생 항공사"</h1>
                <h2>4.8 <i class="fas fa-heart"></i></h2>
                <p>“지금까지 이용해본 항공사 중 최고급 항공사였어요. 훌륭한 직원과 승무원들, 아주 맛있는 음식, 매우 편안한 좌석, 훌륭한 기내 제공 물품까지. 모든 면에서 예상보다 훨씬 좋았어요.” <br><br><br><br></p>
                <p class="read-more">
                  <a href="https://www.evaair.com/ko-kr/about-eva-air/"> visit Website</a>
                </p>
              </div>
            </div>
          </div>
        </li>
        <li>
          <a class="expand_airline">
            <div class="right-arrow">7</div>
            <div class="icon_airline newzealand"></div>
            <h2>Air Newzealand</h2>
            <span>뉴질랜드 항공</span>
          </a>

          <div class="detail">
            <div class="blog-card alt">
              <div class="meta">
                <div class="photo" style="background-image: url(../img/Airport/airline_photos/newzealand.jpg)"></div>
              </div>
              <div class="description">
                <h1>"우수한 서비스와 항공기"</h1>
                <h2>4.8 <i class="fas fa-heart"></i></h2>
                <p>"좋은 영화, 질 좋은 음식, 온갖 종류의 무료 음료 제공과 유쾌한 승무원 등 처음부터 끝까지 환상 그 자체입니다. 진심으로 추천합니다." <br><br><br><br></p>
                <p class="read-more">
                  <a href="https://www.airnewzealand.co.kr/"> visit Website</a>
                </p>
              </div>
            </div>
          </div>
        </li>
        <li>
          <a class="expand_airline">
            <div class="right-arrow">8</div>
            <div class="icon_airline alaska"></div>
            <h2>Alaska Airline</h2>
            <span>알래스카 항공</span>
          </a>

          <div class="detail">
            <div class="blog-card alt">
              <div class="meta">
                <div class="photo" style="background-image: url(../img/Airport/airline_photos/alaska.png)"></div>
              </div>
              <div class="description">
                <h1>""최고의 가족여행"</h1>
                <h2>4.8 <i class="fas fa-heart"></i></h2>
                <p>“친절한 직원들이 탁월한 서비스를 제공합니다. 가족과 함께 앉는 것이 중요하다면 우선 탑승권을 구입하세요. 직원분들이 정말 신경 써 주고 그런 것들이 눈에 보여요. 게다가 수하물이 무료예요.” <br><br><br><br></p>
                <p class="read-more">
                  <a href="https://www.alaskaair.com/"> visit Website</a>
                </p>
              </div>
            </div>
          </div>
        </li>
        <li>
          <a class="expand_airline">
            <div class="right-arrow">9</div>
            <div class="icon_airline sas"></div>
            <h2>Scandinavia Airlines</h2>
            <span>스칸디나비아 항공</span>
          </a>

          <div class="detail">
            <div class="blog-card">
              <div class="meta">
                <div class="photo" style="background-image: url(../img/Airport/airline_photos/sas.jpg)"></div>
              </div>
              <div class="description">
                <h1>"쾌적한 비행"</h1>
                <h2>4.8 <i class="fas fa-heart"></i></h2>
                <p>승객들이 이동 시간을 줄이고 원활하게 여행할 수 있도록 해주는 혁신적이고 다양한 여행 솔루션을 제공합니다. 음식또한 정말 맛있고 직원들은 친절합니다. <br><br><br><br></p>
                <p class="read-more">
                  <a href="https://www.staralliance.com/ko/member-airline-details?airlineCode=SK"> visit Website</a>
                </p>
              </div>
            </div>
          </div>
        </li>
        <li>
          <a class="expand_airline">
            <div class="right-arrow">10</div>
            <div class="icon_airline euro"></div>
            <h2>Japan Airlines</h2>
            <span>일본항공</span>
          </a>

          <div class="detail">
            <div class="blog-card alt">
              <div class="meta">
                <div class="photo" style="background-image: url(../img/Airport/airline_photos/japan.jpg)"></div>
              </div>
              <div class="description">
                <h1>"지금까지 이용한 항공사 중 최고입니다."</h1>
                <h2>4.9 <i class="fas fa-heart"></i></h2>
                <p>“승무원들의 복장은 말쑥하고 매우 정중했어요. 음식은 훌륭했고 항공기는 티끌 하나 없이 깨끗했어요.”<br><br><br><br><br></p>
                <p class="read-more">
                  <a href="https://www.kr.jal.co.jp/krl/ko/"> visit Website</a>
                </p>
              </div>
            </div>
          </div>
        </li>
        <li>
          <a class="expand_airline">
            <div class="right-arrow">11</div>
            <div class="icon_airline finnair"></div>
            <h2>Finnair</h2>
            <span>핀에어</span>
          </a>

          <div class="detail">
            <div class="blog-card">
              <div class="meta">
                <div class="photo" style="background-image: url(../img/Airport/airline_photos/finnair.jpg)"></div>
              </div>
              <div class="description">
                <h1>"만족스러운 비행"</h1>
                <h2>4.8 <i class="fas fa-heart"></i></h2>
                <p>“처음으로 핀에어를 이용한 비행이었어요. 아주 좋은 항공기였어요. 승무원이 항상 세심했고 비행 내내 맛있는 식사, 음료, 스낵이 제공되었어요.” <br><br><br><br></p>
                <p class="read-more">
                  <a href="https://www.finnair.com/kr/ko/"> visit Website</a>
                </p>
              </div>
            </div>
          </div>
        </li>
        <li>
          <a class="expand_airline">
            <div class="right-arrow">12</div>
            <div class="icon_airline klm"></div>
            <h2>KLM UK</h2>
            <span>KLM 영국</span>
          </a>

          <div class="detail">
            <div class="blog-card alt">
              <div class="meta">
                <div class="photo" style="background-image: url(../img/Airport/airline_photos/klm.png)"></div>
              </div>
              <div class="description">
                <h1>"깔끔하며 친절한 항공사"</h1>
                <h2>4.7 <i class="fas fa-heart"></i></h2>
                <p>"깔끔한 이미지에 걸맞게 깨끗하고 정갈한 실내 분위기가 좋았고, 승무원들도 친절했으며 좌석 앞도 꽤 넓은 편이였습니다. 특별한 서비스는 없었어도 편안하게 12시간 비행을 했다는 느낌을 받았습니다." <br><br><br><br></p>
                <p class="read-more">
                  <a href="https://www.klm.com/home/gb/en"> visit Website</a>
                </p>
              </div>
            </div>
          </div>
        </li>
        <li>
          <a class="expand_airline">
            <div class="right-arrow">13</div>
            <div class="icon_airline france"></div>
            <h2>Air France</h2>
            <span>에어프랑스</span>
          </a>

          <div class="detail">
            <div class="blog-card">
              <div class="meta">
                <div class="photo" style="background-image: url(../img/Airport/airline_photos/france.jpg)"></div>
              </div>
              <div class="description">
                <h1>"깔끔하고 믿을만한 비행"</h1>
                <h2>4.7 <i class="fas fa-heart"></i></h2>
                <p>"에어프랑스는 광고부터 프랑스 특유의 유쾌함과 신선함을 담은 항공사 라는 생각이 듭니다. 수하물 분실이 잦다고들 하지만, 다행히 저는 수하물 분실 없이 잘 도착 했습니다. 체코에서 파리로 가는 1시간 반 남짓한 짧은 비행이었지만 중간에 간식도 공짜로 주고 승무원들도 친절한 편입니다." <br><br><br></p>
                <p class="read-more">
                  <a href="https://www.airfrance.co.kr/"> visit Website</a>
                </p>
              </div>
            </div>
          </div>
        </li>
        <li>
          <a class="expand_airline">
            <div class="right-arrow">14</div>
            <div class="icon_airline american"></div>
            <h2>American Airlines</h2>
            <span>아메리칸 항공</span>
          </a>

          <div class="detail">
            <div class="blog-card">
              <div class="meta">
                <div class="photo" style="background-image: url(../img/Airport/airline_photos/american.png)"></div>
              </div>
              <div class="description">
                <h1>"매우 만족스럽습니다."</h1>
                <h2>4.7 <i class="fas fa-heart"></i></h2>
                <p>“체크인 절차가 '체크아웃' 스타일 데스크에서 매우 신속하고 간단하게 이루어졌어요. 기내 서비스는 특별했고 객실 승무원들도 매우 친절했으며 정말 좋은 다과를 제공하더군요.” <br><br><br><br></p>
                <p class="read-more">
                  <a href="https://www.american-airlines.co.kr/intl/kr/index.jsp?locale=ko_KR"> visit Website</a>
                </p>
              </div>
            </div>
          </div>
        </li>
        <li>
          <a class="expand_airline">
            <div class="right-arrow">15</div>
            <div class="icon_airline korean"></div>
            <h2>Korean Air</h2>
            <span>대한항공</span>
          </a>

          <div class="detail">
            <div class="blog-card">
              <div class="meta">
                <div class="photo" style="background-image: url(../img/Airport/airline_photos/korean.png)"></div>
              </div>
              <div class="description">
                <h1>"아주 편안한"</h1>
                <h2>4.8 <i class="fas fa-heart"></i></h2>
                <p>"비행기에서 기분이 좋은 충분한 공간이있었습니다. 나는 꽤 편안했다. 내가 지불 한 가격도 매우 합리적입니다. 아주 좋은 경험이었습니다. 영화는 좋은 보너스였습니다. 나는 술에 매우 만족했다." <br><br><br><br></p>
                <p class="read-more">
                  <a href="https://kr.koreanair.com/korea/ko.html"> visit Website</a>
                </p>
              </div>
            </div>
          </div>
        </li>

      </ul>
    </div>
    <!--
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
-->
  </div>
  <!-- End list Area -->
  
  <!-- start airline slider -->

  <div class="aos-item fslider-body">
    <div class="fslider-container" data-aos="fade-up-right">
      <div class="fslider-control left infactive"></div>
      <div class="fslider-control fright"></div>
      <ul class="fslider-pagi"></ul>
      <div class="aos-item__inner fslider">
        <div class="fslide fslide-0 factive">
          <div class="fslide__bg"></div>
          <div class="fslide__content">
            <svg class="fslide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
              <path class="fslide__overlay-path" d="M0,0 150,0 500,405 0,405" />
            </svg>
            <div class="fslide__text">
              <h2 class="fslide__text-heading">Best Hotel</h2>
              <a href="Hotel.php" target="_blank" class="fslide__text-link" style="color: white; cursor: none;">Read More</a>
            </div>
          </div>
        </div>
        <div class="fslide fslide-1 ">
          <div class="fslide__bg"></div>
          <div class="fslide__content">
            <svg class="fslide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
              <path class="fslide__overlay-path" d="M0,0 150,0 500,405 0,405" />
            </svg>
            <div class="fslide__text">
              <h2 class="fslide__text-heading">Experience</h2>
              <a href="experience.php" target="_blank" class="fslide__text-link" style="color: white; cursor: none">Read More</a>
            </div>
          </div>
        </div>
        <div class="fslide fslide-2">
          <div class="fslide__bg"></div>
          <div class="fslide__content">
            <svg class="fslide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
              <path class="fslide__overlay-path" d="M0,0 150,0 500,405 0,405" />
            </svg>
            <div class="fslide__text">
              <h2 class="fslide__text-heading">Food</h2>
              <a href="Food.php" target="_blank" class="fslide__text-link" style="color: white; cursor: none;">Read More</a>
            </div>
          </div>
        </div>
        <div class="fslide fslide-3">
          <div class="fslide__bg"></div>
          <div class="fslide__content">
            <svg class="fslide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
              <path class="fslide__overlay-path" d="M0,0 150,0 500,405 0,405" />
            </svg>
            <div class="fslide__text">
              <h2 class="fslide__text-heading">2019 Best</h2>
              <a href="#" target="_blank" class="fslide__text-link" style="color: white; cursor: none;">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end airline slider -->
  
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
