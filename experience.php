<!DOCTYPE html>
<html class="no-js">
<!-- Head -->
<link rel="stylesheet" href="css/experience.css">
<link rel="stylesheet" type="text/css" href="css/base.css" />
<script>
    document.documentElement.className = "js";
    var supportsCssVars = function() {
        var e, t = document.createElement("style");
        return t.innerHTML = "root: { --tmp-var: bold; }", document.head.appendChild(t), e = !!(window.CSS && window.CSS.supports && window.CSS.supports("font-weight", "var(--tmp-var)")), t.parentNode.removeChild(t), e
    };
    supportsCssVars() || alert("Please view this demo in a modern browser that supports CSS Variables.");

</script>
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
    
    <!-- start Features -->
    <div class="features">
        <div class="container">
            <div class="row">

                <!-- Icon Box -->
                <div class="col-lg-4 icon_box_col">
                    <div class="icon_box d-flex flex-column align-items-center justify-content-start text-center">
                        <div class="icon_box_icon"><img src="img/experience/icon_1.svg" class="svg" alt="https://www.flaticon.com/authors/monkik"></div>
                        <div class="icon_box_title">
                            <h2>Fabulous Resort</h2>
                        </div>
                        <div class="icon_box_text">
                            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse nec faucibus velit. Quisque eleifend orci ipsum, a bibendum.</p>
                        </div>
                    </div>
                </div>

                <!-- Icon Box -->
                <div class="col-lg-4 icon_box_col">
                    <div class="icon_box d-flex flex-column align-items-center justify-content-start text-center">
                        <div class="icon_box_icon"><img src="img/experience/icon_2.svg" class="svg" alt="https://www.flaticon.com/authors/monkik"></div>
                        <div class="icon_box_title">
                            <h2>Infinity Pool</h2>
                        </div>
                        <div class="icon_box_text">
                            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse nec faucibus velit. Quisque eleifend orci ipsum, a bibendum.</p>
                        </div>
                    </div>
                </div>

                <!-- Icon Box -->
                <div class="col-lg-4 icon_box_col">
                    <div class="icon_box d-flex flex-column align-items-center justify-content-start text-center">
                        <div class="icon_box_icon"><img src="img/experience/icon_3.svg" class="svg" alt="https://www.flaticon.com/authors/monkik"></div>
                        <div class="icon_box_title">
                            <h2>Luxury Rooms</h2>
                        </div>
                        <div class="icon_box_text">
                            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse nec faucibus velit. Quisque eleifend orci ipsum, a bibendum.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Features -->
    
    <!-- start silder -->
    <div id="app"></div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/react/15.6.1/react.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/react/15.6.1/react-dom.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/classnames/2.2.5/index.min.js'></script>
    <!--End silder -->

    <!--Start Intro -->
    <div class="intro">
        <div class="container">
            <div class="row row-lg-eq-height">

                <!-- Intro Content -->
                <div class="col-lg-5 intro_col">
                    <div class="intro_container d-flex flex-column align-items-start justify-content-center magic_up">
                        <div class="intro_content">
                            <div class="section_title_container">
                                <div class="section_subtitle">EXPERIENCE</div>
                                <div class="section_title">
                                    <h2>세계의 다양한 경험</h2>
                                </div>
                            </div>
                            <div class="intro_text">
                                <p>Praesent fermentum ligula in dui imperdiet, vel tempus nulla ultricies. Phasellus at commodo ligula. Nullam molestie volutpat sapien, a dignissim tortor laoreet quis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                            </div>
                            <div class="intro_link"><a href="rooms.html">Experience</a></div>
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
    
    <!-- Start CardView -->
    <h1 style="font-size:50px;font-family: 'Black Han Sans', sans-serif; text-align: center;">Experience TOP 15</h1>
    <div class="grid-wrap">
        <div class="grid">
            <a href="#" class="grid__item">
                <div class="grid__item-bg"></div>
                <div class="grid__item-wrap">
                    <img class="grid__item-img" src="img/experience/1.jpg" alt="Some image" />
                </div>
                <h3 class="grid__item-title">Tour of my Life</h3>
                <h4 class="grid__item-number">Seoul</h4>
            </a>
            <a href="#" class="grid__item">
                <div class="grid__item-bg"></div>
                <div class="grid__item-wrap">
                    <img class="grid__item-img" src="img/experience/2.jpg" alt="Some image" />
                </div>
                <h3 class="grid__item-title">One day in Africa</h3>
                <h4 class="grid__item-number">A21</h4>
            </a>
            <a href="#" class="grid__item">
                <div class="grid__item-bg"></div>
                <div class="grid__item-wrap">
                    <img class="grid__item-img" src="img/experience/3.jpg" alt="Some image" />
                </div>
                <h3 class="grid__item-title">Wrecked and happy</h3>
                <h4 class="grid__item-number">XB3</h4>
            </a>
            <a href="#" class="grid__item">
                <div class="grid__item-bg"></div>
                <div class="grid__item-wrap">
                    <img class="grid__item-img" src="img/experience/4.jpg" alt="Some image" />
                </div>
                <h3 class="grid__item-title">The silent thief</h3>
                <h4 class="grid__item-number">HK9</h4>
            </a>
            <a href="#" class="grid__item">
                <div class="grid__item-bg"></div>
                <div class="grid__item-wrap">
                    <img class="grid__item-img" src="img/experience/5.jpg" alt="Some image" />
                </div>
                <h3 class="grid__item-title">Locked away</h3>
                <h4 class="grid__item-number">FW1</h4>
            </a>
            <a href="#" class="grid__item">
                <div class="grid__item-bg"></div>
                <div class="grid__item-wrap">
                    <img class="grid__item-img" src="img/experience/6.jpg" alt="Some image" />
                </div>
                <h3 class="grid__item-title">Isolation and me</h3>
                <h4 class="grid__item-number">DZ5</h4>
            </a>
            <a href="#" class="grid__item">
                <div class="grid__item-bg"></div>
                <div class="grid__item-wrap">
                    <img class="grid__item-img" src="img/experience/7.jpg" alt="Some image" />
                </div>
                <h3 class="grid__item-title">Desert races</h3>
                <h4 class="grid__item-number">M02</h4>
            </a>
            <a href="#" class="grid__item">
                <div class="grid__item-bg"></div>
                <div class="grid__item-wrap">
                    <img class="grid__item-img" src="img/experience/8.jpg" alt="Some image" />
                </div>
                <h3 class="grid__item-title">Transcendence</h3>
                <h4 class="grid__item-number">KL7</h4>
            </a>
            <a href="#" class="grid__item">
                <div class="grid__item-bg"></div>
                <div class="grid__item-wrap">
                    <img class="grid__item-img" src="img/experience/9.jpg" alt="Some image" />
                </div>
                <h3 class="grid__item-title">Loosing my mind</h3>
                <h4 class="grid__item-number">UY6</h4>
            </a>
            <a href="#" class="grid__item">
                <div class="grid__item-bg"></div>
                <div class="grid__item-wrap">
                    <img class="grid__item-img" src="img/experience/10.jpg" alt="Some image" />
                </div>
                <h3 class="grid__item-title">Holding your breath</h3>
                <h4 class="grid__item-number">OP2</h4>
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
                <img class="content__item-img" src="img/experience/1.jpg" alt="Some image" />
                <h2 class="content__item-title">Tour of my life</h2>
            </div>
            <h3 class="content__item-subtitle">"How I learned to cherish life after a trip to hell"</h3>
            <div class="content__item-text">
                <p>When I was in the islands nearly a generation ago, I was t.</p>
            </div>
        </div><!-- /content__item -->
        <div class="content__item">
            <div class="content__item-intro">
                <img class="content__item-img" src="img/experience/2.jpg" alt="Some image" />
                <h2 class="content__item-title">One day in Africa</h2>
            </div>
            <h3 class="content__item-subtitle">"How I learned to cherish life after a trip to hell"</h3>
            <div class="content__item-text">
                <p>When I was in the islands nearly a generation ago, I was t.</p>
            </div>
        </div><!-- /content__item -->
        <div class="content__item">
            <div class="content__item-intro">
                <img class="content__item-img" src="img/experience/3.jpg" alt="Some image" />
                <h2 class="content__item-title">Wrecked and happy</h2>
            </div>
            <h3 class="content__item-subtitle">"How I learned to cherish life after a trip to hell"</h3>
            <div class="content__item-text">
                <p>When I was in the islands nearly a generation ago, I was acquain.</p>

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
                <img class="content__item-img" src="img/experience/6.jpg" alt="Some image" />
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
    <!-- End CardView -->

    <!-- start footer Area -->
    <?php
      include 'commonPHP/footer.php';
   ?>
    <!-- End footer Area -->
    <!-- Script -->
    <script src="js/experience_siler.js"></script>
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

    <!-- CardView -->
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/charming.min.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/demo.js"></script>


</body>

</html>
