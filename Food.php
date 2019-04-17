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
                <h2 class="fslide__text-heading">정보 보안이란?</h2>
                <p class="fslide__text-desc" style="color: white">
                  정보의 수집, 가공, 저장, 검색, 송신, 수신 도중에 정보의 훼손, 변조, 유출 등을 방지하기 위한 관리적, 기술적 방법을 의미한다. 정보 보호란 정보를 제공하는 공급자 측면과 사용자 측면에서 이해할 수 있다. <br>
                  정보를 보호하고 보안을 유지하는 것을 말하며 정보보안과 동의어로 쓰이곤 한다. 정보의 흐름 전체의 보호를 망라하는 개념이다. 범주로 나누어 물리적 보호, 기술적 보호, 관리적 보호로 나눌 수있다.
                </p>
                <a href="https://ko.wikipedia.org/wiki/%EC%A0%95%EB%B3%B4_%EB%B3%B4%EC%95%88" target="_blank" class="fslide__text-link" style="color: white; cursor: none;">Read More</a>
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
                <h2 class="fslide__text-heading">해킹이란?</h2>
                <p class="fslide__text-desc" style="color: white">해킹(hacking)은 전자 회로나 컴퓨터의 하드웨어, 소프트웨어, 네트워크, 웹사이트 등 각종 정보 체계가 본래의 설계자나 관리자, 운영자가 의도하지 않은 동작을 일으키도록 하거나 체계 내에서 주어진 권한 이상으로 정보를 열람, 복제, 변경 가능하게 하는 행위를 광범위하게 이르는 말이다.</p>
                <a href="https://ko.wikipedia.org/wiki/%ED%95%B4%ED%82%B9" target="_blank" class="fslide__text-link" style="color: white; cursor: none">Read More</a>
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
                <h2 class="fslide__text-heading">컴퓨터 바이러스란?</h2>
                <p class="fslide__text-desc" style="color: white">
                  컴퓨터 바이러스(computer virus, 문화어: 콤퓨터 비루스)는 스스로를 복제하여 컴퓨터를 감염시키는 컴퓨터 프로그램이다. 복제 기능이 없는 다른 종류의 악성 코드, 애드웨어, 스파이웨어와 혼동하여 잘못 쓰이는 경우도 있다. 바이러스는 한 컴퓨터에서 다른 컴퓨터로(일부 형식의 실행 코드로) 확산할 수 있다. 바이러스는 네트워크 파일 시스템이나, 다른 컴퓨터를 통해 접근하는 파일 시스템 상의 파일을 감염시킴으로써 다른 컴퓨터로의 확산 가능성을 높일 수 있다.
                </p>
                <a href="https://ko.wikipedia.org/wiki/%EC%BB%B4%ED%93%A8%ED%84%B0_%EB%B0%94%EC%9D%B4%EB%9F%AC%EC%8A%A4" target="_blank" class="fslide__text-link" style="color: white; cursor: none;">Read More</a>
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
                <h2 class="fslide__text-heading">컴퓨터 백신이란?</h2>
                <p class="fslide__text-desc" style="color: white">
                  바이러스 검사 소프트웨어(문화어: 비루스 검사 쏘프트웨어, 비루스방역프로그람) 또는 안티바이러스 소프트웨어(영어: antivirus software) 은 악성 소프트웨어를 찾아내서 제거하는 기능을 갖춘 컴퓨터 프로그램이다. 대한민국에서는 이를 지칭하는데 백신 프로그램 이라는 말이 일상용어로 사용되고 있다. 한국에서 백신이라는 용어는 V3의 초기 버전인 Vaccine(=V1), V2, V2PLUS로 인해 대중적인 용어가 되었다. 원래 목적은 바이러스만 잡는 것이었으나, 현대에는 악성코드, 피싱 공격, 트로이 목마, 웜 등도 검출한다.
                </p>
                <a href="https://ko.wikipedia.org/wiki/%EB%B0%94%EC%9D%B4%EB%9F%AC%EC%8A%A4_%EA%B2%80%EC%82%AC_%EC%86%8C%ED%94%84%ED%8A%B8%EC%9B%A8%EC%96%B4" target="_blank" class="fslide__text-link" style="color: white; cursor: none;">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
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
        <h2>음식</h2>
        <p>음식에 대한 간단한 소개</p>
      </div>
    </div>
    <div class="side back">
      <div class="info">
        <h2>음식</h2>
        <div class="reviews">
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs><path d="M0 0h24v24H0V0z" id="a"/></defs><clipPath id="b"><use overflow="visible" xlink:href="#a"/></clipPath><path clip-path="url(#b)" d="M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4V6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z"/>
          </svg>
          <p>45 Reviews</p>
        </div>
        <ul>
          <li>이 음식은 이곳 지역의 현지인들에게도 유명한 음식이며, 관광객들이 필수적으로 찾는 음식이다.</li>
          <li>Your choice of deck sizes ranging from 36", 48", 52" and 60"</li>
          <li>Updated hip bolstering offers superior operator comfort and positioning</li>
        </ul>
        <div class="btn">
          <h4> 사이트 주소 </h4>
          <svg fill="#333" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/><path d="M0-.25h24v24H0z" fill="none"/></svg>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="cardContainer inactive">
  <div class="card">
    <div class="side front">
      <div class="img img2"></div>
      <div class="info">
        <h2>Super Z HyperDrive</h2>
        <p>A high-performance zero-turn with unsurpassed strength, speed &amp; reliability with a warranty to match.</p>
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
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <p>39 Reviews</p>
        </div>
        <ul>
          <li>Your choice of VX4 decks ranging from 60 to 72 inches</li>
          <li>The 37hp Vanguard BigBlock EFI makes short work out of big jobs enabling speeds up to 16mph</li>
          <li>Massive 24" drive tires and 13" front caster tires</li>
        </ul>
        <div class="btn">
          <h4>Learn More</h4>
          <svg fill="#333" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/><path d="M0-.25h24v24H0z" fill="none"/></svg>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="cardContainer inactive">
  <div class="card">
    <div class="side front">
      <div class="img img3"></div>
      <div class="info">
        <h2>Vanguard Power</h2>
        <p>If you need a tough, commercial grade engine that makes you more productive, look to Vanguard.</p>
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
          <p>26 Reviews</p>
        </div>
        <ul>
          <li>V-Twin OHV Technology provides superior balance, low vibration, lower emissions, better fuel economy and higher HP/Weight</li>
          <li>Advanced Debris Management keeps engine clean and cool for enhanced durability and performance</li>
        </ul>
        <div class="btn">
          <h4>Learn More</h4>
          <svg fill="#333" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/><path d="M0-.25h24v24H0z" fill="none"/></svg>
        </div>
      </div>
    </div>
  </div>
</div>
     <div class="cardContainer inactive">
  <div class="card">
    <div class="side front">
      <div class="img img3"></div>
      <div class="info">
        <h2>Vanguard Power</h2>
        <p>If you need a tough, commercial grade engine that makes you more productive, look to Vanguard.</p>
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
          <p>26 Reviews</p>
        </div>
        <ul>
          <li>V-Twin OHV Technology provides superior balance, low vibration, lower emissions, better fuel economy and higher HP/Weight</li>
          <li>Advanced Debris Management keeps engine clean and cool for enhanced durability and performance</li>
        </ul>
        <div class="btn">
          <h4>Learn More</h4>
          <svg fill="#333" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/><path d="M0-.25h24v24H0z" fill="none"/></svg>
        </div>
      </div>
    </div>
  </div>
</div>
     <div class="cardContainer inactive">
  <div class="card">
    <div class="side front">
      <div class="img img3"></div>
      <div class="info">
        <h2>Vanguard Power</h2>
        <p>If you need a tough, commercial grade engine that makes you more productive, look to Vanguard.</p>
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
          <p>26 Reviews</p>
        </div>
        <ul>
          <li>V-Twin OHV Technology provides superior balance, low vibration, lower emissions, better fuel economy and higher HP/Weight</li>
          <li>Advanced Debris Management keeps engine clean and cool for enhanced durability and performance</li>
        </ul>
        <div class="btn">
          <h4>Learn More</h4>
          <svg fill="#333" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/><path d="M0-.25h24v24H0z" fill="none"/></svg>
        </div>
      </div>
    </div>
  </div>
</div>
     <div class="cardContainer inactive">
  <div class="card">
    <div class="side front">
      <div class="img img3"></div>
      <div class="info">
        <h2>Vanguard Power</h2>
        <p>If you need a tough, commercial grade engine that makes you more productive, look to Vanguard.</p>
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
          <p>26 Reviews</p>
        </div>
        <ul>
          <li>V-Twin OHV Technology provides superior balance, low vibration, lower emissions, better fuel economy and higher HP/Weight</li>
          <li>Advanced Debris Management keeps engine clean and cool for enhanced durability and performance</li>
        </ul>
        <div class="btn">
          <h4>Learn More</h4>
          <svg fill="#333" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/><path d="M0-.25h24v24H0z" fill="none"/></svg>
        </div>
      </div>
    </div>
  </div>
</div>
      <div class="cardContainer inactive">
  <div class="card">
    <div class="side front">
      <div class="img img3"></div>
      <div class="info">
        <h2>Vanguard Power</h2>
        <p>If you need a tough, commercial grade engine that makes you more productive, look to Vanguard.</p>
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
          <p>26 Reviews</p>
        </div>
        <ul>
          <li>V-Twin OHV Technology provides superior balance, low vibration, lower emissions, better fuel economy and higher HP/Weight</li>
          <li>Advanced Debris Management keeps engine clean and cool for enhanced durability and performance</li>
        </ul>
        <div class="btn">
          <h4>Learn More</h4>
          <svg fill="#333" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/><path d="M0-.25h24v24H0z" fill="none"/></svg>
        </div>
      </div>
    </div>
  </div>
</div>
      <div class="cardContainer inactive">
  <div class="card">
    <div class="side front">
      <div class="img img3"></div>
      <div class="info">
        <h2>Vanguard Power</h2>
        <p>If you need a tough, commercial grade engine that makes you more productive, look to Vanguard.</p>
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
          <p>26 Reviews</p>
        </div>
        <ul>
          <li>V-Twin OHV Technology provides superior balance, low vibration, lower emissions, better fuel economy and higher HP/Weight</li>
          <li>Advanced Debris Management keeps engine clean and cool for enhanced durability and performance</li>
        </ul>
        <div class="btn">
          <h4>Learn More</h4>
          <svg fill="#333" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/><path d="M0-.25h24v24H0z" fill="none"/></svg>
        </div>
      </div>
    </div>
  </div>
</div>
     <div class="cardContainer inactive">
  <div class="card">
    <div class="side front">
      <div class="img img1"></div>
      <div class="info">
        <h2>Super S</h2>
        <p>A stand-on with an exceptional compact stance. Great for tight spaces and trailering.</p>
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
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs><path d="M0 0h24v24H0V0z" id="a"/></defs><clipPath id="b"><use overflow="visible" xlink:href="#a"/></clipPath><path clip-path="url(#b)" d="M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4V6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z"/>
          </svg>
          <p>23 Reviews</p>
        </div>
        <ul>
          <li>Manage backyard gates with ease with the 36" deck option</li>
          <li>Your choice of deck sizes ranging from 36", 48", 52" and 60"</li>
          <li>Updated hip bolstering offers superior operator comfort and positioning</li>
        </ul>
        <div class="btn">
          <h4>Learn More</h4>
          <svg fill="#333" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/><path d="M0-.25h24v24H0z" fill="none"/></svg>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="cardContainer inactive">
  <div class="card">
    <div class="side front">
      <div class="img img2"></div>
      <div class="info">
        <h2>Super Z HyperDrive</h2>
        <p>A high-performance zero-turn with unsurpassed strength, speed &amp; reliability with a warranty to match.</p>
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
          <svg fill="#FFC324" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
          <p>39 Reviews</p>
        </div>
        <ul>
          <li>Your choice of VX4 decks ranging from 60 to 72 inches</li>
          <li>The 37hp Vanguard BigBlock EFI makes short work out of big jobs enabling speeds up to 16mph</li>
          <li>Massive 24" drive tires and 13" front caster tires</li>
        </ul>
        <div class="btn">
          <h4>Learn More</h4>
          <svg fill="#333" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/><path d="M0-.25h24v24H0z" fill="none"/></svg>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="cardContainer inactive">
  <div class="card">
    <div class="side front">
      <div class="img img3"></div>
      <div class="info">
        <h2>Vanguard Power</h2>
        <p>If you need a tough, commercial grade engine that makes you more productive, look to Vanguard.</p>
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
          <p>26 Reviews</p>
        </div>
        <ul>
          <li>V-Twin OHV Technology provides superior balance, low vibration, lower emissions, better fuel economy and higher HP/Weight</li>
          <li>Advanced Debris Management keeps engine clean and cool for enhanced durability and performance</li>
        </ul>
        <div class="btn">
          <h4>Learn More</h4>
          <svg fill="#333" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/><path d="M0-.25h24v24H0z" fill="none"/></svg>
        </div>
      </div>
    </div>
  </div>
</div>
     <div class="cardContainer inactive">
  <div class="card">
    <div class="side front">
      <div class="img img3"></div>
      <div class="info">
        <h2>Vanguard Power</h2>
        <p>If you need a tough, commercial grade engine that makes you more productive, look to Vanguard.</p>
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
          <p>26 Reviews</p>
        </div>
        <ul>
          <li>V-Twin OHV Technology provides superior balance, low vibration, lower emissions, better fuel economy and higher HP/Weight</li>
          <li>Advanced Debris Management keeps engine clean and cool for enhanced durability and performance</li>
        </ul>
        <div class="btn">
          <h4>Learn More</h4>
          <svg fill="#333" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/><path d="M0-.25h24v24H0z" fill="none"/></svg>
        </div>
      </div>
    </div>
  </div>
</div>
     <div class="cardContainer inactive">
  <div class="card">
    <div class="side front">
      <div class="img img3"></div>
      <div class="info">
        <h2>Vanguard Power</h2>
        <p>If you need a tough, commercial grade engine that makes you more productive, look to Vanguard.</p>
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
          <p>26 Reviews</p>
        </div>
        <ul>
          <li>V-Twin OHV Technology provides superior balance, low vibration, lower emissions, better fuel economy and higher HP/Weight</li>
          <li>Advanced Debris Management keeps engine clean and cool for enhanced durability and performance</li>
        </ul>
        <div class="btn">
          <h4>Learn More</h4>
          <svg fill="#333" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/><path d="M0-.25h24v24H0z" fill="none"/></svg>
        </div>
      </div>
    </div>
  </div>
</div>
     <div class="cardContainer inactive">
  <div class="card">
    <div class="side front">
      <div class="img img3"></div>
      <div class="info">
        <h2>Vanguard Power</h2>
        <p>If you need a tough, commercial grade engine that makes you more productive, look to Vanguard.</p>
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
          <p>26 Reviews</p>
        </div>
        <ul>
          <li>V-Twin OHV Technology provides superior balance, low vibration, lower emissions, better fuel economy and higher HP/Weight</li>
          <li>Advanced Debris Management keeps engine clean and cool for enhanced durability and performance</li>
        </ul>
        <div class="btn">
          <h4>Learn More</h4>
          <svg fill="#333" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/><path d="M0-.25h24v24H0z" fill="none"/></svg>
        </div>
      </div>
    </div>
  </div>
</div>
      <div class="cardContainer inactive">
  <div class="card">
    <div class="side front">
      <div class="img img3"></div>
      <div class="info">
        <h2>Vanguard Power</h2>
        <p>If you need a tough, commercial grade engine that makes you more productive, look to Vanguard.</p>
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
          <p>26 Reviews</p>
        </div>
        <ul>
          <li>V-Twin OHV Technology provides superior balance, low vibration, lower emissions, better fuel economy and higher HP/Weight</li>
          <li>Advanced Debris Management keeps engine clean and cool for enhanced durability and performance</li>
        </ul>
        <div class="btn">
          <h4>Learn More</h4>
          <svg fill="#333" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/><path d="M0-.25h24v24H0z" fill="none"/></svg>
        </div>
      </div>
    </div>
  </div>
</div>
      <div class="cardContainer inactive">
  <div class="card">
    <div class="side front">
      <div class="img img3"></div>
      <div class="info">
        <h2>Vanguard Power</h2>
        <p>If you need a tough, commercial grade engine that makes you more productive, look to Vanguard.</p>
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
          <p>26 Reviews</p>
        </div>
        <ul>
          <li>V-Twin OHV Technology provides superior balance, low vibration, lower emissions, better fuel economy and higher HP/Weight</li>
          <li>Advanced Debris Management keeps engine clean and cool for enhanced durability and performance</li>
        </ul>
        <div class="btn">
          <h4>Learn More</h4>
          <svg fill="#333" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/><path d="M0-.25h24v24H0z" fill="none"/></svg>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
    
  <!-- end food item-->
   
    <!-- Start Gallery -->
    <div class="site-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <h2 class="font-weight-light text-black">Our Destinations</h2>
                    <p class="color-black-opacity-5">Choose Your Next Destination</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                    <a href="Hotel.php" class="unit-1 text-center">
                        <img src="img/experience/01-greece.jpg" alt="Image" class="img-fluid">
                        <div class="unit-1-text">
                            
                            <h3 class="unit-1-heading">Hotel</h3>
                            <strong>호텔 리스트를 원하시나요?</strong>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                    <a href="experience.php" class="unit-1 text-center">
                        <img src="img/experience/02-rome.jpg" alt="Image" class="img-fluid">
                        <div class="unit-1-text">
                            
                            <h3 class="unit-1-heading">Experience</h3>
                            <strong> 다양한 경험을 쌓으시고 싶으신가요?</strong>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                    <a href="Airport.php" class="unit-1 text-center">
                        <img src="img/experience/03-japan.jpg" alt="Image" class="img-fluid">
                        <div class="unit-1-text">
                            
                            <h3 class="unit-1-heading">Airport</h3>
                            <strong>항공사 정보를 원하시나요?</strong>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                    <a href="#" class="unit-1 text-center">
                        <img src="img/experience/04-dubai.jpg" alt="Image" class="img-fluid">
                        <div class="unit-1-text">
                            <strong class="text-primary mb-2 d-block">$320</strong>
                            <h3 class="unit-1-heading">Camels, Dubai</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                    <a href="#" class="unit-1 text-center">
                        <img src="img/experience/05-london.jpg" alt="Image" class="img-fluid">
                        <div class="unit-1-text">
                            <strong class="text-primary mb-2 d-block">$290</strong>
                            <h3 class="unit-1-heading">Elizabeth Tower, London</h3>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                    <a href="#" class="unit-1 text-center">
                        <img src="img/experience/06-australia.jpg" alt="Image" class="img-fluid">
                        <div class="unit-1-text">
                            <strong class="text-primary mb-2 d-block">$390</strong>
                            <h3 class="unit-1-heading">Opera House, Australia</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- End Gallery -->
    
  <!-- start footer Area -->
  <?php
      include 'commonPHP/footer.php';
   ?>
  <!-- End footer Area -->
  <!-- Script -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
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
