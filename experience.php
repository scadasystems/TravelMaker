<!DOCTYPE html>
<html class="no-js">
<!-- Head -->
<link rel="stylesheet" href="css/experience.css">
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
</body>

</html>
