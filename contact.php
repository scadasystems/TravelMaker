	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<?php
			 include 'commonPHP/commonHead.php'
		?>
	</head>
		<body>
			<?php
			   include 'commonPHP/Header.php'
			?>
	    <!-- end Header -->

			<!-- start banner Area -->
			<section class="relative contact-banner">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Help Center
							</h1>
							<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="contact.php"> Help Center</a></p>
						</div>
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start Contact container -->
			<section id="contact_section" class="contact-page-sec">
		    <div class="container">
	      <div class="row">
	        <div class="col-md-4">
	          <div class="contact-info">
	            <div class="contact-info-item">
	              <div class="contact-info-icon">
	                <i class="fas fa-map-marked"></i>
	              </div>
	              <div class="contact-info-text">
	                <h2>address</h2>
	                <span>경기도 안양시 동안구 비산동 임곡로 29</span>
	                <span>대림대학교</span>
	              </div>
	            </div>
	          </div>
	        </div>
	        <div class="col-md-4">
	          <div class="contact-info">
	            <div class="contact-info-item">
	              <div class="contact-info-icon">
	                <i class="fas fa-envelope"></i>
	              </div>
	              <div class="contact-info-text">
	                <h2>E-mail</h2>
	                <span>redsmurf@lulzm.org</span>
	                <span>yunjang2@gmail.com</span>
									<span>skrhkdwls77@gmail.com</span>
									<span>zaku@naver.com</span>
	              </div>
	            </div>
	          </div>
	        </div>
	        <div class="col-md-4">
	          <div class="contact-info">
	            <div class="contact-info-item">
	              <div class="contact-info-icon">
	                <i class="fas fa-clock"></i>
	              </div>
	              <div class="contact-info-text">
	                <h2>office time</h2>
	                <span>연중무휴</span>
	                <span>항상 열심히!</span>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>
	      <div class="row">
	        <div class="col-md-8">
	          <div class="contact-page-form" method="post">
	            <h2>Contact us</h2>
	            <form action="contact-mail.php" method="post">
	              <div class="row">
	              <div class="col-md-6 col-sm-6 col-xs-12">
	                <div class="single-input-field">
	                  <input type="text" placeholder="이름" name="name" required/>
	                </div>
	              </div>
	              <div class="col-md-6 col-sm-6 col-xs-12">
	                <div class="single-input-field">
	                  <input type="email" placeholder="E-mail" name="email" required/>
	                </div>
	              </div>
	              <div class="col-md-6 col-sm-6 col-xs-12">
	                <div class="single-input-field">
	                  <input type="text" placeholder="제목" name="subject" required/>
	                </div>
	              </div>
	              <div class="col-md-12 message-input">
	                <div class="single-input-field">
	                  <textarea  placeholder="메세지 내용" name="message" required></textarea>
	                </div>
	              </div>
	              <div class="single-input-fieldsbtn">
	                <input type="submit" value="Send" name="send"/>
	              </div>
	            </div>
            </form>
	          </div>
	        </div>
	        <div class="col-md-4">
	          <div class="contact-page-map">
	            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3169.444189095621!2d126.92897559227806!3d37.40297467529182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b60c0d36cd6d7%3A0x4d68e3370132ec94!2z64yA66a864yA7ZWZ6rWQ!5e0!3m2!1sko!2skr!4v1558876447224!5m2!1sko!2skr" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	          </div>
	        </div>
	      </div>
	    </div>
		  </section>
			<!-- End contact container -->

			<!-- start footer Area -->
	    <?php
	      include 'commonPHP/footer.php';
	    ?>
	    <!-- End footer Area -->

			<!-- Start Script -->
			<?php
	      include 'commonPHP/script.php';
	    ?>
			<!-- End Script -->
		</body>
	</html>
