<!DOCTYPE html>
<html class="no-js">
<!-- Head -->
<link rel="stylesheet" href="css/food.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>

    
<?php
   include 'commonPHP/commonHead.php'
?>

<body>
  <?php
   include 'commonPHP/Header.php'
  ?>
  <!-- end Header -->

  <!-- start banner Area -->
  <section class="Food-banner relative">
    <div class="overlay overlay-bg"></div>
    <div class="item-container">
      <div class="row d-flex align-items-center justify-content-center">
        <div class="about-content col-lg-12">
          <h1 class="text-white" style="font-size:80px;font-family: 'Black Han Sans', sans-serif; font-weight:100;">
            Best Food
          </h1>
          <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="Food.php"> 음식점</a></p>
        </div>
      </div>
    </div>
  </section>
  <!-- End banner Area -->
<div id="go-slide"></div>
  <!-- start Slider -->
  <div class="ftext">
    <p>전 세계 </p>
    <p>
      <span class="fword wisteria"> 레스토랑</span>
      <span class="fword belize"> TOP15를 안내</span>
    </p>
    <p>합니다.</p>
  </div>
  <!--start food-slider -->
   
    <!--<div class="aos-item fslider-body">
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
                <h2 class="fslide__text-heading">1. Odette</h2>
                <p class="fslide__text-desc" style="color: white">
                  Odette는 상대적으로 겸손한 싱가포르의 신중한 레스토랑으로 남아 있습니다. 또한 세계에서 가장 훌륭한 식사 경험 중 하나를 제공하며, 맹렬한 근대성을 지닌 전통과 고풍스런 맛을 지닌 철학적 개념, 대담하고 따뜻한 감동을 결합합니다.
                </p>
                <a href="http://www.odetterestaurant.com/?utm_source=tripadvisor&utm_medium=referral" target="_blank" class="fslide__text-link" style="color: white; cursor: none;">Read More</a>
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
                <h2 class="fslide__text-heading">2. Gaggan</h2>
                <p class="fslide__text-desc" style="color: white">Gaggan 레스토랑은 놀랍고 풍미가 깊은 요리로 방콕에서 유명한 레스토랑이며, 향후 2020 년에 개간을 마친 후, 후쿠오카 (일본)로 이동하여 La Maison de la Nature Goh의 동료 요리사 Takeshi Fukuyama와 함께 10 석의 레스토랑을 오픈 할 계획이랍니다 그전에 가보시는건 어떨까요?</p>
                <a href="http://www.eatatgaggan.com/" target="_blank" class="fslide__text-link" style="color: white; cursor: none">Read More</a>
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
                <h2 class="fslide__text-heading">3. Den</h2>
                <p class="fslide__text-desc" style="color: white">
                  관광객들에 고향의 맛은 각각 다르지만 부드럽고 매일 먹고 싶어지는 맛을 여행객들에게 전함으로써 레스토랑 랭킹 3위를 달리고 있습니다. 
                </p>
                <a href="https://www.jimbochoden.com/" target="_blank" class="fslide__text-link" style="color: white; cursor: none;">Read More</a>
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
                <h2 class="fslide__text-heading">4. Sühring</h2>
                <p class="fslide__text-desc" style="color: white">
                  아름답게 복원 된 타운 하우스의 현대 독일 음식 및 제철 재료와 많은 양의 기술을 사용하여 쌍둥이 인 Thomas와 Mathias Sühring은 본국에서 영감을 얻은 제철 요리의 시식 메뉴를 제공합니다. 수링 (Sühring)은 2017 년 아시아 최고의 레스토랑 50 위 중 두 번째로 높은 순위에 올랐으며 2 년 연속 4 위를 유지했다
                </p>
                <a href="http://www.restaurantsuhring.com/" target="_blank" class="fslide__text-link" style="color: white; cursor: none;">Read More</a>
              </div>
            </div>
          </div>
            <div class="fslide fslide-4">
            <div class="fslide__bg"></div>
            <div class="fslide__content">
              <svg class="fslide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                <path class="fslide__overlay-path" d="M0,0 150,0 500,405 0,405" />
              </svg>
              <div class="fslide__text">
                <h2 class="fslide__text-heading">5. Florilège</h2>
                <p class="fslide__text-desc" style="color: white">
                  떠오르는 별 요리사가 독창적 인 프랑스 요리로 군중 가운데 서 있습니다.꼭 먹어야 할 요리에는 녹색 호랑이 새우, 오리와 옥살류, 비둘기로 채워진 만주족 만두와 포트 와인 조림 등이 있습니다. 이 레스토랑은 2016 년 One To Watch 상을 처음 수상했으며 지난 2 년간 아시아 최고의 레스토랑 50 개 목록 중 5 위 안에 머물렀다.
                </p>
                <a href="http://www.aoyama-florilege.jp/" target="_blank" class="fslide__text-link" style="color: white; cursor: none;">Read More</a>
              </div>
            </div>
          </div>
            <div class="fslide fslide-5">
            <div class="fslide__bg"></div>
            <div class="fslide__content">
              <svg class="fslide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                <path class="fslide__overlay-path" d="M0,0 150,0 500,405 0,405" />
              </svg>
              <div class="fslide__text">
                <h2 class="fslide__text-heading">6. Ultraviolet by Paul Pairet</h2>
                <p class="fslide__text-desc" style="color: white">
                  식사와 환대가 예술로 만들어진 상하이 미식 핫스팟. Paul Pairet의 자외선은 세계에서 가장 전위가 많은 레스토랑 경험으로 여겨집니다. 앞서 언급 한 프랑스 주방장 인 Ultraviolet은 밤 10 명 정도의 손님으로 열리 며 비밀의 도시 지역에서 최고의 식사를 경험할 수 있습니다.
                </p>
                <a href="http://uvbypp.cc/" target="_blank" class="fslide__text-link" style="color: white; cursor: none;">Read More</a>
              </div>
            </div>
          </div>
            <div class="fslide fslide-6">
            <div class="fslide__bg"></div>
            <div class="fslide__content">
              <svg class="fslide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                <path class="fslide__overlay-path" d="M0,0 150,0 500,405 0,405" />
              </svg>
              <div class="fslide__text">
                <h2 class="fslide__text-heading">7. Mume</h2>
                <p class="fslide__text-desc" style="color: white">
                  유럽의 기법은 접시에 식용 예술을 만들기 위해 대만 재료를 만난다. 농부, 어부 및 지역 식품 생산자들과 긴밀히 협력하여 지역 식량 공급망을 지원하고 수입 제품의 탄소 발자국을 줄이기 위해 제품의 아름다움을 선보입니다.
                </p>
                <a href="http://www.mume.tw" target="_blank" class="fslide__text-link" style="color: white; cursor: none;">Read More</a>
              </div>
            </div>
          </div>
            <div class="fslide fslide-7">
            <div class="fslide__bg"></div>
            <div class="fslide__content">
              <svg class="fslide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                <path class="fslide__overlay-path" d="M0,0 150,0 500,405 0,405" />
              </svg>
              <div class="fslide__text">
                <h2 class="fslide__text-heading">8. Narisawa</h2>
                <p class="fslide__text-desc" style="color: white">
                  세계적으로 유명한 일식 요리사의 혁신적인 사토 야마 요리.<br>2018 년 나리사와 (Narisawa) 요리사는 아시아 50 대 레스토랑 목록에서 동료들의 투표로 선정 된 Chef 's Choice Award에 대한 찬사를 보냈습니다.
                </p>
                <a href="http://www.narisawa-yoshihiro.com/" target="_blank" class="fslide__text-link" style="color: white; cursor: none;">Read More</a>
              </div>
            </div>
          </div>
            <div class="fslide fslide-8">
            <div class="fslide__bg"></div>
            <div class="fslide__content">
              <svg class="fslide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                <path class="fslide__overlay-path" d="M0,0 150,0 500,405 0,405" />
              </svg>
              <div class="fslide__text">
                <h2 class="fslide__text-heading">9. Nihonryori RyuGin</h2>
                <p class="fslide__text-desc" style="color: white">
                  일본 가이세키 왕이 계절의 재료를 작은 예술 작품으로 승화시킵니다. 야마모토 세이지 (Seiji Yamamoto) 요리사가 아메리칸 익스프레스 아이콘 상을 수상한 최초의 상인으로 2019 년 아시아 50 대 레스토랑에 처음으로 선정되었으며 10 년 이상 일본의 미식가 중 한 명이었던 사람에게 경의를 표하는 찬사를 보냈습니다.
                </p>
                <a href="http://www.nihonryori-ryugin.com/" target="_blank" class="fslide__text-link" style="color: white; cursor: none;">Read More</a>
              </div>
            </div>
          </div>
            <div class="fslide fslide-9">
            <div class="fslide__bg"></div>
            <div class="fslide__content">
              <svg class="fslide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                <path class="fslide__overlay-path" d="M0,0 150,0 500,405 0,405" />
              </svg>
              <div class="fslide__text">
                <h2 class="fslide__text-heading">10. Burnt Ends</h2>
                <p class="fslide__text-desc" style="color: white">
                  바이러스 검사 소프트웨어(문화어: 비루스 검사 쏘프트웨어, 비루스방역프로그람) 또는 안티바이러스 소프트웨어(영어: antivirus software) 은 악성 소프트웨어를 찾아내서 제거하는 기능을 갖춘 컴퓨터 프로그램이다. 대한민국에서는 이를 지칭하는데 백신 프로그램 이라는 말이 일상용어로 사용되고 있다. 한국에서 백신이라는 용어는 V3의 초기 버전인 Vaccine(=V1), V2, V2PLUS로 인해 대중적인 용어가 되었다. 원래 목적은 바이러스만 잡는 것이었으나, 현대에는 악성코드, 피싱 공격, 트로이 목마, 웜 등도 검출한다.
                </p>
                <a href="http://www.burntends.com.sg/" target="_blank" class="fslide__text-link" style="color: white; cursor: none;">Read More</a>
              </div>
            </div>
          </div>
            <div class="fslide fslide-10">
            <div class="fslide__bg"></div>
            <div class="fslide__content">
              <svg class="fslide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                <path class="fslide__overlay-path" d="M0,0 150,0 500,405 0,405" />
              </svg>
              <div class="fslide__text">
                <h2 class="fslide__text-heading">11. The Chairman</h2>
                <p class="fslide__text-desc" style="color: white">
                  바이러스 검사 소프트웨어(문화어: 비루스 검사 쏘프트웨어, 비루스방역프로그람) 또는 안티바이러스 소프트웨어(영어: antivirus software) 은 악성 소프트웨어를 찾아내서 제거하는 기능을 갖춘 컴퓨터 프로그램이다. 대한민국에서는 이를 지칭하는데 백신 프로그램 이라는 말이 일상용어로 사용되고 있다. 한국에서 백신이라는 용어는 V3의 초기 버전인 Vaccine(=V1), V2, V2PLUS로 인해 대중적인 용어가 되었다. 원래 목적은 바이러스만 잡는 것이었으나, 현대에는 악성코드, 피싱 공격, 트로이 목마, 웜 등도 검출한다.
                </p>
                <a href="http://www.thechairmangroup.com/" target="_blank" class="fslide__text-link" style="color: white; cursor: none;">Read More</a>
              </div>
            </div>
          </div>
            <div class="fslide fslide-11">
            <div class="fslide__bg"></div>
            <div class="fslide__content">
              <svg class="fslide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                <path class="fslide__overlay-path" d="M0,0 150,0 500,405 0,405" />
              </svg>
              <div class="fslide__text">
                <h2 class="fslide__text-heading">12. Otto e Mezzo Bombana</h2>
                <p class="fslide__text-desc" style="color: white">
                  바이러스 검사 소프트웨어(문화어: 비루스 검사 쏘프트웨어, 비루스방역프로그람) 또는 안티바이러스 소프트웨어(영어: antivirus software) 은 악성 소프트웨어를 찾아내서 제거하는 기능을 갖춘 컴퓨터 프로그램이다. 대한민국에서는 이를 지칭하는데 백신 프로그램 이라는 말이 일상용어로 사용되고 있다. 한국에서 백신이라는 용어는 V3의 초기 버전인 Vaccine(=V1), V2, V2PLUS로 인해 대중적인 용어가 되었다. 원래 목적은 바이러스만 잡는 것이었으나, 현대에는 악성코드, 피싱 공격, 트로이 목마, 웜 등도 검출한다.
                </p>
                <a href="http://www.ottoemezzobombana.com/" target="_blank" class="fslide__text-link" style="color: white; cursor: none;">Read More</a>
              </div>
            </div>
          </div>
            <div class="fslide fslide-12">
            <div class="fslide__bg"></div>
            <div class="fslide__content">
              <svg class="fslide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                <path class="fslide__overlay-path" d="M0,0 150,0 500,405 0,405" />
              </svg>
              <div class="fslide__text">
                <h2 class="fslide__text-heading">13. Mingles</h2>
                <p class="fslide__text-desc" style="color: white">
                  바이러스 검사 소프트웨어(문화어: 비루스 검사 쏘프트웨어, 비루스방역프로그람) 또는 안티바이러스 소프트웨어(영어: antivirus software) 은 악성 소프트웨어를 찾아내서 제거하는 기능을 갖춘 컴퓨터 프로그램이다. 대한민국에서는 이를 지칭하는데 백신 프로그램 이라는 말이 일상용어로 사용되고 있다. 한국에서 백신이라는 용어는 V3의 초기 버전인 Vaccine(=V1), V2, V2PLUS로 인해 대중적인 용어가 되었다. 원래 목적은 바이러스만 잡는 것이었으나, 현대에는 악성코드, 피싱 공격, 트로이 목마, 웜 등도 검출한다.
                </p>
                <a href="http://www.restaurant-mingles.com/" target="_blank" class="fslide__text-link" style="color: white; cursor: none;">Read More</a>
              </div>
            </div>
          </div>
            <div class="fslide fslide-13">
            <div class="fslide__bg"></div>
            <div class="fslide__content">
              <svg class="fslide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                <path class="fslide__overlay-path" d="M0,0 150,0 500,405 0,405" />
              </svg>
              <div class="fslide__text">
                <h2 class="fslide__text-heading">14. La Cime</h2>
                <p class="fslide__text-desc" style="color: white">
                  바이러스 검사 소프트웨어(문화어: 비루스 검사 쏘프트웨어, 비루스방역프로그람) 또는 안티바이러스 소프트웨어(영어: antivirus software) 은 악성 소프트웨어를 찾아내서 제거하는 기능을 갖춘 컴퓨터 프로그램이다. 대한민국에서는 이를 지칭하는데 백신 프로그램 이라는 말이 일상용어로 사용되고 있다. 한국에서 백신이라는 용어는 V3의 초기 버전인 Vaccine(=V1), V2, V2PLUS로 인해 대중적인 용어가 되었다. 원래 목적은 바이러스만 잡는 것이었으나, 현대에는 악성코드, 피싱 공격, 트로이 목마, 웜 등도 검출한다.
                </p>
                <a href="http://www.la-cime.com/" target="_blank" class="fslide__text-link" style="color: white; cursor: none;">Read More</a>
              </div>
            </div>
          </div>
            <div class="fslide fslide-14">
            <div class="fslide__bg"></div>
            <div class="fslide__content">
              <svg class="fslide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                <path class="fslide__overlay-path" d="M0,0 150,0 500,405 0,405" />
              </svg>
              <div class="fslide__text">
                <h2 class="fslide__text-heading">15. Belon</h2>
                <p class="fslide__text-desc" style="color: white">
                  바이러스 검사 소프트웨어(문화어: 비루스 검사 쏘프트웨어, 비루스방역프로그람) 또는 안티바이러스 소프트웨어(영어: antivirus software) 은 악성 소프트웨어를 찾아내서 제거하는 기능을 갖춘 컴퓨터 프로그램이다. 대한민국에서는 이를 지칭하는데 백신 프로그램 이라는 말이 일상용어로 사용되고 있다. 한국에서 백신이라는 용어는 V3의 초기 버전인 Vaccine(=V1), V2, V2PLUS로 인해 대중적인 용어가 되었다. 원래 목적은 바이러스만 잡는 것이었으나, 현대에는 악성코드, 피싱 공격, 트로이 목마, 웜 등도 검출한다.
                </p>
                <a href="http://belonsoho.com/" target="_blank" class="fslide__text-link" style="color: white; cursor: none;">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    -->
   <div class="fdslider"><a class="fdarrow next"></a><a class="fdarrow prev"></a>
  <ul>
    <li class="fdactive" data-slide-title="Bridge"><img src="https://www.au-crocodile.com/media/cache/jadro_resize/rc/FPPzlVkf1552456365/jadroRoot/medias/59dcaf4704c34/au-crocodile-4910.jpg"/>
      <div class="fdcontent">
        <h1 class="slidets">1. Au Crocodile </h1>
        <div class="by"><span class="slidesub">젊고 유능한 세프의 요리 지도력으로 부활한 '미식의 사원'.</span><a href="https://www.au-crocodile.com/fr/?utm_source=tripadvisor&utm_medium=referral" target="blank">사이트 이동</a></div>
      </div>
    </li>
       <li><img src="https://www.olesay.com/wp-content/uploads/2017/03/Entrada-Restaurante-Martin-Berasategui1.jpg"/>
      <div class="fdcontent">
        <h1 class="slidets">2. Martin Berasategui</h1>
        <div class="by"><span class="slidesub">이제껏 맛본 적 없는 훌륭한 맛의 조합! <br>이곳의 음식 맛은 마치 멋진 시 한 편을 읊는 듯한 느낌이었어요.</span><a href="http://www.martinberasategui.com/es/inicio" target="blank">사이트 이동</a></div>
      </div>
    </li>
    <li><img src="http://prod-upp-image-read.ft.com/181a7036-2bdf-11e3-bfe2-00144feab7de"/>
      <div class="fdcontent">
        <h1 class="slidets">3. El Celler de Can Roca</h1>
        <div class="by"><span class="slidesub">탁월함, 놀라움 그리고 감동 완벽합니다. 더 이상 말이 필요 없어요.</span><a href="https://cellercanroca.com/index.htm?utm_source=tripadvisor&utm_medium=referral" target="blank">사이트 이동</a></div>
      </div>
    </li>
    <li><img src="http://www.favouritetables.com/wp-content/uploads/2015/09/satbains.jpg"/>
      <div class="fdcontent">
        <h1 class="slidets">4. Restaurant Sat Bains</h1>
        <div class="by"><span class="slidesub">Travelers' Choice2018 수상</span><a href="http://www.restaurantsatbains.com/?utm_source=tripadvisor&utm_medium=referral" target="blank">사이트 이동</a></div>
      </div>
    </li>
    <li><img src="https://arc-anglerfish-syd-prod-nzme.s3.amazonaws.com/public/5VZH4FWBYNAOJHIX7WCYGBQCNM.jpg"/>
      <div class="fdcontent">
        <h1 class="slidets">5. Restaurante Benazuza</h1>
        <div class="by"><span class="slidesub">Travelers' Choice2018 수상 레스토랑</span><a href="https://oasishoteles.com/en" target="blank">사이트 이동</a></div>
      </div>
    </li>
    <li><img src="https://www.comunicaffe.com/wp-content/uploads/2017/07/La-Colombe-coffee-shop.jpg"/>
      <div class="fdcontent">
        <h1 class="slidets">6. La Colombe</h1>
        <div class="by"><span class="slidesub">프랑스 요리, 유럽 요리</span><a href="https://www.lacolombe.co.za/" target="blank">사이트 이동</a></div>
      </div>
    </li>
       <li><img src="https://cdn.zeebiz.com/sites/default/files/2018/12/05/62873-indian-accent-restaurant-reuters.jpg"/>
      <div class="fdcontent">
        <h1 class="slidets">7. TRB Hutong</h1>
        <div class="by"><span class="slidesub">재료를 지나치게 익히지 않으면서 본연의 맛을 살린<br>현대적이고 이국적인 요리 이런 음식과 깨끗하고 심플한 실내 장식, 조명이 멋진 조화를 이루는 곳!</span><a href="http://www.trb-hutong.com/?utm_source=tripadvisor&utm_medium=referral" target="blank">사이트 이동</a></div>
      </div>
    </li>
       <li><img src="https://i.pinimg.com/originals/b8/73/25/b87325d38723634bf2f64e4661629239.jpg"/>
      <div class="fdcontent">
        <h1 class="slidets">8. Ristorante Villa Crespi</h1>
        <div class="by"><span class="slidesub">지중해 요리, 이탈리아 요리, 시푸드, 유럽 요리</span><a href="http://www.villacrespi.it/it/ristorante-antonino-cannavacciuolo-villa-crespi/?utm_source=tripadvisor&utm_medium=referral" target="blank">사이트 이동</a></div>
      </div>
    </li>
       <li><img src="http://www.cdcdesigns.com/wp-content/uploads/2015/03/3-The-Grove-Rec-Center_BBQ-Patio-2.jpg"/>
      <div class="fdcontent">
        <h1 class="slidets">9. The Grove</h1>
        <div class="by"><span class="slidesub">프랑스 요리, 유럽 요리, 뉴질랜드</span><a href="https://www.thegroverestaurant.co.nz/?utm_source=tripadvisor&utm_medium=referral" target="blank">사이트 이동</a></div>
      </div>
    </li>
       <li><img src="https://cheapcarinsuranceinohio.us/pic/MTS2nJEmn2y0L2uyov5wol50nP93pP1wo250MJ50Y3IjoT9uMUZiMzyhMF1xnJ5cozpgMTS2nJEmYJgcqTAbMJ4gAQDgL2ucLJ5aYJ1unF5dpTp/gallery-david-39s-kitchen-fine-dining-in-chiang-mai.jpg"/>
      <div class="fdcontent">
        <h1 class="slidets">10. David's Kitchen</h1>
        <div class="by"><span class="slidesub">음식 맛이 훌륭한 곳은 정말 많지만 분위기까지 좋은 곳은 별로 없죠.<br>David's Kitchen은 이 둘을 모두 갖추었어요.</span><a href="https://davidskitchen.co.th/?utm_source=tripadvisor&utm_medium=referral" target="blank">사이트 이동</a></div>
      </div>
    </li>
       <li><img src="https://faber.design/wp/wp-content/uploads/2018/05/DSC2028.jpg"/>
      <div class="fdcontent">
        <h1 class="slidets">11. Adam's</h1>
        <div class="by"><span class="slidesub">요리가 나올 때마다 가장 좋아하는 음식을 결정하는 일이 힘들어져요.<br>오늘 저녁 다시 모든 요리를 맛볼 수 있으면 좋겠어요.</span><a href="https://www.adamsrestaurant.co.uk/?utm_source=tripadvisor&utm_medium=referral" target="blank">사이트 이동</a></div>
      </div>
    </li>
       <li><img src="https://cdn-image.travelandleisure.com/sites/default/files/styles/marquee_large_2x/public/1473910234/amaz-lima-lim0916.jpg?itok=Gz9YseKk"/>
      <div class="fdcontent">
        <h1 class="slidets">12. Maido</h1>
        <div class="by"><span class="slidesub">퓨전 일본음식점 느낌입니다</span><a href="http://www.maido.pe/?utm_source=tripadvisor&utm_medium=referral" target="blank">사이트 이동</a></div>
      </div>
    </li>
       <li><img src="https://indianaccent.com/newyork/images/gallery-images-ny/indian-accent-newyork-bar.jpg"/>
      <div class="fdcontent">
        <h1 class="slidets">13. 인디안 액센트</h1>
        <div class="by"><span class="slidesub">개성이 살아있는 음식<br>상세한 설명이 포함된 메뉴가 있어 거의 모든 음식을 맛보고 싶은 충동이 생깁니다.</span><a href="https://indianaccent.com/?utm_source=tripadvisor&utm_medium=referral" target="blank">사이트 이동</a></div>
      </div>
    </li>
       <li><img src="https://lesgrandestablesdumonde.com/wp-content/uploads/2018/08/plat-restaurant-christopher-coutanceau-les-grandes-tables-du-monde-2.jpg"/>
      <div class="fdcontent">
        <h1 class="slidets">14. Restaurant Christopher Coutanceau</h1>
        <div class="by"><span class="slidesub">프랑스 요리, 유럽 요리</span><a href="https://www.coutanceaularochelle.com/?utm_source=tripadvisor&utm_medium=referral" target="blank">사이트 이동</a></div>
      </div>
    </li>
       <li><img src="https://www.experienceoxfordshire.org/wp-content/uploads/2017/03/131005NBLM_0151-1340x957.jpg"/>
      <div class="fdcontent">
        <h1 class="slidets">15. Belmond Le Manoir aux Quat'Saisons</h1>
        <div class="by"><span class="slidesub">프랑스 요리, 유럽 요리, 영국 요리</span><a href="https://www.belmond.com/hotels/europe/uk/oxfordshire/belmond-le-manoir-aux-quat-saisons/?utm_source=tripadvisor&utm_medium=referral" target="blank">사이트 이동</a></div>
      </div>
    </li>
  </ul>
</div>

    
    
    <!--end food-slider -->
    
  <!-- start food item-->
    <h1 class="food-items">
  <span>W</span>
  <span>o</span>
  <span>r</span>
  <span>d</span>
  <span>   </span>
  <span>B</span>
  <span>e</span>
  <span>s</span>
  <span>t</span>
  <span>   </span>
  <span>F</span>
  <span>o</span>
  <span>o</span>
  <span>d</span>
</h1>


 
    
    
 <div class="food-card">
   <div class="cardContainer inactive">
  <div class="card">
    <div class="side front">
      <div class="img img1"></div>
      <div class="info">
          <div class="reviews">
        <h2>Rendang</h2>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs><path d="M0 0h24v24H0V0z" id="a"/></defs><clipPath id="b"><use overflow="visible" xlink:href="#a"/></clipPath><path clip-path="url(#b)" d="M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4V6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z"/>
          </svg>
        </div>
        <p style="margin-top:5px;">인도네시아에 필수적인 요리 렌당~</p>
      </div>
    </div>
    <div class="side back">
      <div class="info">
        <h2>렌당</h2>
        <div class="reviews">
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs><path d="M0 0h24v24H0V0z" id="a"/></defs><clipPath id="b"><use overflow="visible" xlink:href="#a"/></clipPath><path clip-path="url(#b)" d="M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4V6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z"/>
          </svg>
          <p>500 Reviews</p>
        </div>
        <ul>
          <li>쇠고기는 코코넛 밀크와 레몬 그라스, 갈란 갈아, 마늘, 심황, 생강, 고추 가루로 천천히 조려지며 부드럽고 맛이 좋은 소의 맛있는 요리를 만들기 위해 몇 시간 동안 끓여야합니다.<br>
인도네시아 요리는 종종 의식 행사와 영예로운 손님들에게 제공됩니다. 맛있을뿐만 아니라 간단한 요리법도 함께 제공됩니다. </li>
        </ul>
          <a href="https://m.blog.naver.com/PostView.nhn?blogId=ajtwlstmd&logNo=221268121253&proxyReferer=https%3A%2F%2Fwww.google.com%2F">
        <div class="btn">
          <h4> 레시피 보기 </h4>
          <svg fill="#333" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/><path d="M0-.25h24v24H0z" fill="none"/></svg>
        </div>
          </a>
      </div>
    </div>
  </div>
</div>
<div class="cardContainer inactive">
  <div class="card">
    <div class="side front">
      <div class="img img2"></div>
      <div class="info">
        <h2>Nasi goreng</h2>
          <div class="reviews">
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
        </div>
        <p style="margin-top:5px;">인도네시아에 나시고랭</p>
      </div>
    </div>
    <div class="side back">
      <div class="info">
        <h2>나시고랭</h2>
        <div class="reviews">
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <p>300 Reviews</p>
        </div>
        <ul>
          <li>고온다습한 기후에서 금새 쉬어버리는 밥을 보존식 차원에서 만들어낸 것이 시초이다. 인도네시아의 대표적 요리라고 한다면 다들 떠올리는 것 중 하나이며 가장 일반적인 식사이기도 하다. 크루푹을 같이 먹기도 한다.</li>
          
        </ul>
        <a href="https://brunch.co.kr/@junkoo0101/14">
        <div class="btn">
          <h4> 레시피 보기 </h4>
          <svg fill="#333" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/><path d="M0-.25h24v24H0z" fill="none"/></svg>
        </div>
          </a>
      </div>
    </div>
  </div>
</div>
<div class="cardContainer inactive">
  <div class="card">
    <div class="side front">
      <div class="img img3"></div>
      <div class="info">
        <h2>규카츠</h2>
          <div class="reviews">
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
        </div>
        <p style="margin-top:5px;">일본의 맛있는 돈가스</p>
      </div>
    </div>
    <div class="side back">
      <div class="info">
        <h2>규카츠</h2>
        <div class="reviews">
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <p>1200 Reviews</p>
        </div>
        <ul>
          <li>돼지고기로 만든 돈가스와는 달리 소고기로 만들었기 때문에 돼지고기를 먹지 못하거나 꺼리는 이들이 먹을 수 있는 음식이지만 소고기가 가격이 비싼 편이고 돈가스의 인지도가 높은 편이기도 하여서 인지도는 별로 높지 않은 편이나 소고기를 좋아하는 처지에서는 돈가스 대용으로 먹을 수 있는 음식이기도 하다.</li>
        </ul>
        <a href="http://www.10000recipe.com/recipe/6901643">
        <div class="btn">
          <h4> 레시피 보기 </h4>
          <svg fill="#333" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/><path d="M0-.25h24v24H0z" fill="none"/></svg>
        </div>
          </a>
      </div>
    </div>
  </div>
</div>
     <div class="cardContainer inactive">
  <div class="card">
    <div class="side front">
      <div class="img img4"></div>
      <div class="info">
        <h2>똠양꿍</h2>
          <div class="reviews">
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
        </div>
        <p style="margin-top:5px;">태국 음식인 똠양꿍</p>
      </div>
    </div>
    <div class="side back">
      <div class="info">
        <h2>똠양꿍</h2>
        <div class="reviews">
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <p>160 Reviews</p>
        </div>
        <ul>
          <li>태국 걸작은 새우, 버섯, 토마토, 레몬 그라스, galangal 및 kaffir 석회 잎으로 가득합니다. 보통 코코넛 밀크와 크림을 듬뿍 넣은 푸짐한 스프는 맛있는 태국 맛을 선사합니다. 신맛, 짠맛, 매운맛, 달콤합니다. 무엇보다도 저렴한 가격입니다.</li>
        </ul>
        <a href="http://www.10000recipe.com/recipe/6859003">
        <div class="btn">
          <h4> 레시피 보기 </h4>
          <svg fill="#333" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/><path d="M0-.25h24v24H0z" fill="none"/></svg>
        </div>
          </a>
      </div>
    </div>
  </div>
</div>
     <div class="cardContainer inactive">
  <div class="card">
    <div class="side front">
      <div class="img img5"></div>
      <div class="info">
        <h2>패드</h2>
          <div class="reviews">
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
        </div>
        <p style="margin-top:5px;">태국 사람들에게 필요한 음식 패드!!</p>
      </div>
    </div>
    <div class="side back">
      <div class="info">
        <h2>패드</h2>
        <div class="reviews">
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <p>200 Reviews</p>
        </div>
        <ul>
          <li>태국 사람들이 없이는 살 수없는 음식이 있습니다. 불고기와 마찬가지로, 패드 타이는 영광스러운 튀김 국수 접시에 든 영양소로 가득합니다. 그 비밀은 타마 린드 페이스트에 있어요.</li>
        </ul>
        <a href="http://www.10000recipe.com/recipe/6862381">
        <div class="btn">
          <h4> 레시피 보기 </h4>
          <svg fill="#333" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/><path d="M0-.25h24v24H0z" fill="none"/></svg>
        </div>
          </a>
      </div>
    </div>
  </div>
</div>
     <div class="cardContainer inactive">
  <div class="card">
    <div class="side front">
      <div class="img img6"></div>
      <div class="info">
        <h2>쏨 땀</h2>
          <div class="reviews">
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
        </div>
        <p style="margin-top:5px;">태국계의 샐러드 쏨 땀</p>
      </div>
    </div>
    <div class="side back">
      <div class="info">
        <h2>쏨 땀</h2>
        <div class="reviews">
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <p>400 Reviews</p>
        </div>
        <ul>
          <li>약간 매운맛에 아삭거리는 식감으로 자주 김치와 비슷하다는 식으로 언급된다.<br>
원래는 태국의 북동부 지역인 이산의 사람들만 먹던 음식이었는데, 지금은 태국 전체에 보편화된 음식이다.</li>
        </ul>
        <a href="https://m.blog.naver.com/PostView.nhn?blogId=wakurere&logNo=220478537736&proxyReferer=https%3A%2F%2Fwww.google.com%2F">
        <div class="btn">
          <h4> 레시피 보기 </h4>
          <svg fill="#333" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/><path d="M0-.25h24v24H0z" fill="none"/></svg>
        </div>
          </a>
      </div>
    </div>
  </div>
</div>
      <div class="cardContainer inactive">
  <div class="card">
    <div class="side front">
      <div class="img img7"></div>
      <div class="info">
        <h2>딤섬</h2>
          <div class="reviews">
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
        </div>
        <p style="margin-top:5px;">홍콩의 유명한 딤섬</p>
      </div>
    </div>
    <div class="side back">
      <div class="info">
        <h2>딤 섬</h2>
        <div class="reviews">
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <p>326 Reviews</p>
        </div>
        <ul>
          <li>깔끔한 현대적 식당에서는 보통 식당처럼 주문해서 나오면 먹지만,[3] 전통 방식은 딤섬을 가득 실은 카트를 직원이 끌고 다니면, 불러 세워서 원하는 딤섬을 골라서 테이블 위에 놓고 먹는 것이다. 수동 회전초밥 비슷한 방식이라고 보면 된다. 관광객용 식당이나 깔끔한 현대적 식당이 아니라 현지인들이 주로 찾는 낡은 식당에 가면 이런 방식이 많다.
</li>
        </ul>
        <a href="https://m.post.naver.com/viewer/postView.nhn?volumeNo=12500399&memberNo=36246608">
        <div class="btn">
          <h4> 레시피 보기 </h4>
          <svg fill="#333" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/><path d="M0-.25h24v24H0z" fill="none"/></svg>
        </div>
          </a>
      </div>
    </div>
  </div>
</div>
      <div class="cardContainer inactive">
  <div class="card">
    <div class="side front">
      <div class="img img8"></div>
      <div class="info">
        <h2>라멘</h2>
          <div class="reviews">
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
        </div>
        <p style="margin-top:5px;">일본의 대표음식 라멘</p>
      </div>
    </div>
    <div class="side back">
      <div class="info">
        <h2>라멘</h2>
        <div class="reviews">
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <p>2500 Reviews</p>
        </div>
        <ul>
          <li>라멘만 전문으로 하는 점포만 3만여 개에 이를 정도로 라멘 가게가 많으며 그만큼 종류도 다양하고 명칭은 라멘이지만 실제론 같다고 보기 힘들 정도로 가게, 요리사별로 맛도 천차만별이다.</li>
        </ul>
        <a href="http://www.10000recipe.com/recipe/6828995">
        <div class="btn">
          <h4> 레시피 보기 </h4>
          <svg fill="#333" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/><path d="M0-.25h24v24H0z" fill="none"/></svg>
        </div>
          </a>
      </div>
    </div>
  </div>
</div>
     <div class="cardContainer inactive">
  <div class="card">
    <div class="side front">
      <div class="img img9"></div>
      <div class="info">
        <h2>북경 오리</h2>
          <div class="reviews">
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs><path d="M0 0h24v24H0V0z" id="a"/></defs><clipPath id="b"><use overflow="visible" xlink:href="#a"/></clipPath><path clip-path="url(#b)" d="M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4V6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z"/>
          </svg>
        </div>
        <p style="margin-top:5px;">중국의 바베큐 북경 오리</p>
      </div>
    </div>
    <div class="side back">
      <div class="info">
        <h2>북경 오리</h2>
        <div class="reviews">
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs><path d="M0 0h24v24H0V0z" id="a"/></defs><clipPath id="b"><use overflow="visible" xlink:href="#a"/></clipPath><path clip-path="url(#b)" d="M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4V6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z"/>
          </svg>
          <p>3236 Reviews</p>
        </div>
        <ul>
          <li>조리 시의 복잡한 과정을 거쳐 바삭하게 구워진 껍질이 핵심이라, 고기를 분리제거하고, 껍질만 따로 내놓는 집도 있다. 고기와 같이 내놓을 경우에는 요리사가 식기 전에 먹기 좋은 크기로 썰어주곤 한다.<br>나머지 부분은 대체로 푹 고아내서 탕으로 먹는다. </li>
        </ul>
        <a href="https://m.blog.naver.com/PostView.nhn?blogId=musoi99&logNo=220454899493&proxyReferer=https%3A%2F%2Fwww.google.com%2F">
        <div class="btn">
          <h4> 레시피 보기 </h4>
          <svg fill="#333" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/><path d="M0-.25h24v24H0z" fill="none"/></svg>
        </div>
          </a>
      </div>
    </div>
  </div>
</div>
<div class="cardContainer inactive">
  <div class="card">
    <div class="side front">
      <div class="img img10"></div>
      <div class="info">
        <h2 style="font-size:3vh;">Lasagna / Lasagne</h2>
          <div class="reviews">
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
        </div>
        <p style="margin-top:5px;">이탈리아의 Lasagna / Lasagne</p>
      </div>
    </div>
    <div class="side back">
      <div class="info">
        <h2 style="font-size:3vh;">Lasagna / Lasagne</h2>
        <div class="reviews">
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <p>139 Reviews</p>
        </div>
        <ul>
          <li>얇게 편 파스타 반죽을 직사각형으로 넓게 자르고 삶은 뒤 위에 베샤멜 소스, 삶은 라자냐, 라구 소스, 파스타, 베샤멜(이하 반복) 식으로 4~5층 정도 쌓기를 반복하고 맨 위에 소스를 바르고 파르미지아노 레지아노 치즈나 모차렐라 치즈를 뿌린 뒤 오븐에 구워내는 요리. </li>
        </ul>
        <a href="http://www.10000recipe.com/recipe/532797">
        <div class="btn">
          <h4> 레시피 보기 </h4>
          <svg fill="#333" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/><path d="M0-.25h24v24H0z" fill="none"/></svg>
        </div>
          </a>
      </div>
    </div>
  </div>
</div>
<div class="cardContainer inactive">
  <div class="card">
    <div class="side front">
      <div class="img img11"></div>
      <div class="info">
        <h2>치킨 라이스</h2>
          <div class="reviews">
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
        </div>
        <p style="margin-top:5px;">싱가포르의 치킨 라이스</p>
      </div>
    </div>
    <div class="side back">
      <div class="info">
        <h2>At a glance</h2>
        <div class="reviews">
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <p>1226 Reviews</p>
        </div>
        <ul>
          <li>종종 싱가포르의 "국가 요리"라고 불리는이 찜 또는 삶은 닭고기는 향기로운 기름진 쌀 위에 얹어지며 오이로 얇게 썬 야채를 토큰 야채로 사용합니다. 변종에는 구운 닭 또는 간장 닭이 포함됩니다.</li>
        </ul>
        <a href="https://m.blog.naver.com/PostView.nhn?blogId=gigibeyon&logNo=220217977031&proxyReferer=https%3A%2F%2Fwww.google.com%2F">
        <div class="btn">
          <h4> 레시피 보기 </h4>
          <svg fill="#333" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/><path d="M0-.25h24v24H0z" fill="none"/></svg>
        </div>
          </a>
      </div>
    </div>
  </div>
</div>
     <div class="cardContainer inactive">
  <div class="card">
    <div class="side front">
      <div class="img img12"></div>
      <div class="info">
        <h2>Satay</h2>
          <div class="reviews">
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
        </div>
        <p style="margin-top:5px;">인도네시아의 닭꼬치</p>
      </div>
    </div>
    <div class="side back">
      <div class="info">
        <h2>Satay</h2>
        <div class="reviews">
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <p>256 Reviews</p>
        </div>
        <ul>
          <li>인도네시아, 말레이시아, 싱가포르 등 지역의 전통 꼬치 요리로, 양념된 고기를 꼬치에 꽂아 구운 후, 소스를 찍어 먹는다. 닭고기, 양고기, 염소고기, 소고기, 돼지고기, 생선 등의 다양한 고기는 물론, 두부 역시 사테로 만들 수 있다. 소스로는 주로 땅콩으로 만든 소스나 땅콩 가루를 뿌려 먹으며 땅콩 소스가 가장 인기 있지만, 땅콩 소스가 아니라도 다양한 소스를 사용한다.</li>
        </ul>
        <a href="http://www.10000recipe.com/recipe/6892005">
        <div class="btn">
          <h4> 레시피 보기 </h4>
          <svg fill="#333" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/><path d="M0-.25h24v24H0z" fill="none"/></svg>
        </div>
          </a>
      </div>
    </div>
  </div>
</div>
     <div class="cardContainer inactive">
  <div class="card">
    <div class="side front">
      <div class="img img13"></div>
      <div class="info">
        <h2>케밥</h2>
          <div class="reviews">
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
        </div>
        <p style="margin-top:5px;">터키의 유명한 케밥</p>
      </div>
    </div>
    <div class="side back">
      <div class="info">
        <h2>케밥</h2>
        <div class="reviews">
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <p>1326 Reviews</p>
        </div>
        <ul>
          <li>종류가 1,000여 가지에 이를 정도로 다양하고 각 지방마다 특색이 다르다. 숯불 회전구이인 되네르(Döner) 케밥, 꼬치구이인 쉬쉬(Şiş) 케밥, 요쿠르트 소스와 함게 먹는 이스켄데르(İskender) 케밥 따위가 가장 잘 알려져있지만 터키를 제외한 다른 지역에는 되네르케밥이 주로 알려져 있다. 쉬쉬케밥은 이즈미르가, 이스켄데르 케밥은 부르사가 특히 유명하다.</li>
        </ul>
        <a href="http://www.10000recipe.com/recipe/6860913">
        <div class="btn">
          <h4> 레시피 보기 </h4>
          <svg fill="#333" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/><path d="M0-.25h24v24H0z" fill="none"/></svg>
        </div>
          </a>
      </div>
    </div>
  </div>
</div>
     <div class="cardContainer inactive">
  <div class="card">
    <div class="side front">
      <div class="img img14"></div>
      <div class="info">
        <h2>젤라또</h2>
          <div class="reviews">
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
        </div>
        <p>이탈리아의 맛있는 아이스크림</p>
      </div>
    </div>
    <div class="side back">
      <div class="info">
        <h2>젤라또</h2>
        <div class="reviews">
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <p>296 Reviews</p>
        </div>
        <ul>
          <li>"Eat, Pray, Love"덕분에 이탈리아 최고의 디저트가 그 어느 때보다도 인기가 있습니다. 진정한 젤라토 제조사는 신선한 재료만을 사용하고 인공 향료 나 색소를 사용하지 않으며, 원하는대로 여러 가지 향신료를 혼합하고 매치 할 수 있습니다. </li>
        </ul>
        <a href="http://www.10000recipe.com/recipe/list.html?q=%EC%A0%A4%EB%9D%BC%EB%98%90">
        <div class="btn">
          <h4> 레시피 보기 </h4>
          <svg fill="#333" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/><path d="M0-.25h24v24H0z" fill="none"/></svg>
        </div>
          </a>
      </div>
    </div>
  </div>
</div>
      <div class="cardContainer inactive">
  <div class="card">
    <div class="side front">
      <div class="img img15"></div>
      <div class="info">
        <h2>Pho</h2>
          <div class="reviews">
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
        </div>
        <p style="margin-top:5px;">베트남의 국사 pho</p>
      </div>
    </div>
    <div class="side back">
      <div class="info">
        <h2>Pho</h2>
        <div class="reviews">
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <p>236 Reviews</p>
        </div>
        <ul>
          <li>쇠고기나 닭고기로 낸 고기 국물에 넓적한 쌀국수를 말아먹는 요리로 베트남을 대표하는 요리라고 할 수 있다. 쇠고기가 들어간 것은 '퍼 보', 닭고기가 들어간 것은 '퍼 가'로 구분한다.<br>
처음엔 향신료 특유의 강한 향 때문에 거부감이 들 수도 있겠지만 먹다보면 중독성이 강하다.</li>
        </ul>
        <a href="http://www.10000recipe.com/recipe/list.html?q=pho">
        <div class="btn">
          <h4> 레시피 보기 </h4>
          <svg fill="#333" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/><path d="M0-.25h24v24H0z" fill="none"/></svg>
        </div>
          </a>
      </div>
    </div>
  </div>
</div>
</div>
    
  <!-- end food item-->
   <!-- Start site category title -->
    <div class="header wrap">
        <h2 class="background double"><span>다른 것들이 필요하신가요? <span style="color: orange">Travel Maker 카테고리 더 보기</span></span></h2>
    </div> <!-- end site category title-->
    <!--  -->
    <!-- Start Gallery -->
    <div class="site-link">
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
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/saSlider.js"></script>
    <script src="js/food_item.js"></script>
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
