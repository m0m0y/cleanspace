  <!-- ======= Footer ======= -->
	<footer id="footer">
	    <div class="footer-top">
	      <div class="container">
	        <div class="row">
			
				<div class="col-lg-2 col-md-6 footer-links">
					<h4>Useful Links</h4>
					<ul>
						<li><i class="bx bx-chevron-right"></i> <a href="../index.php">Home</a></li>
						<li><i class="bx bx-chevron-right"></i> <a href="../about_us.php">About us</a></li>
						<li><i class="bx bx-chevron-right"></i> <a href="../warranty.php">Warranty</a></li>
						<li><i class="bx bx-chevron-right"></i> <a href="../terms_and_condition.php">Terms and Conditions</a></li>
						<li><i class="bx bx-chevron-right"></i> <a href="../privacy_policy.php">Privacy policy</a></li>
					</ul>
				</div>

				<div class="col-lg-2 col-md-6 footer-links">
					<h4>Products</h4>
					<ul>
						<li><i class="bx bx-chevron-right"></i> <a href="cleanspace-halo.php">CleanSpace HALO</a></li>
						<li><i class="bx bx-chevron-right"></i> <a href="cleanspace-ex.php">CleanSpace EX</a></li>
						<li><i class="bx bx-chevron-right"></i> <a href="cleanspace-ultra.php">CleanSpace ULTRA</a></li>
						<li><i class="bx bx-chevron-right"></i> <a href="cleanspace2.php">CleanSpace2</a></li>
					</ul>
				</div>

	           <div class="col-lg-8">
		            <div class="footer-info">
		              <h3>CleanSpace</h3>
		              <p>
		                Unit 5, 39 Herbert Street, St. Leonards NSW 2065 Australia<br>
		                <strong>Phone:</strong> +612 8436 4000<br>
		                <strong>Email:</strong> sales@cleanspacetechnology.com<br>
		              </p>

			        	<div class="social-links">
			                <a href="https://www.facebook.com/CleanSpaceTechnology/" class="facebook"><i class="bx bxl-facebook"></i></a>
			                <a href="https://www.instagram.com/cleanspacetechnology/" class="instagram"><i class="bx bxl-instagram"></i></a>
			                <a href="https://www.youtube.com/channel/UCnHMKJHnZLrt95VcacugbQg" class="google-plus"><i class="bx bxl-youtube"></i></a>
			                <a href="https://www.linkedin.com/company/cleanspace-technology/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
			            </div>
		            </div>
		        </div>

				<div class="col-lg-12">
					<div class="row shop-icon">
						<div class="col-lg-2 col-sm-6 icon-container">
							<p>Other Services:</p>
							<img src="../assets/img/lazada.png">
							<img src="../assets/img/shopee.png">
						</div>
						<div class="col-lg-2 col-sm-6 icon-container"> 
							<p>Medical Shop:</p>
							<img class="ppi" src="../assets/img/ppi.ico">
							<img class="tms" src="../assets/img/tms.ico">
						</div>
					</div>					
				</div>

	        </div>
	      </div>
	    </div>

	    <div class="container">
	    	<div class="copyright">
				&copy; Progressive Medical Corporation <?php echo date("Y"); ?>
		    </div>
	    </div>
	 </footer><!-- End Footer -->

	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
	<div id="preloader"></div>

	<!-- Vendor JS Files -->
	<script src="assets/vendor/aos/aos.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="assets/vendor/php-email-form/validate.js"></script>
	<script src="assets/vendor/purecounter/purecounter.js"></script>
	<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

	<!-- Template Main JS File -->
	<script src="assets/js/main.js"></script>

    <!--==========================================================================
      FOR OTHER PAGES LINK
    ========================================================================== -->

	<script src="../assets/vendor/aos/aos.js"></script>
	<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
	<script src="../assets/vendor/php-email-form/validate.js"></script>
	<script src="../assets/vendor/purecounter/purecounter.js"></script>
	<script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

	<!-- Template Main JS File -->
	<script src="../assets/js/main.js"></script>

	<!-- ProductSlide -->
	<script>
	var slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
	  showSlides(slideIndex += n);
	}

	function currentSlide(n) {
	  showSlides(slideIndex = n);
	}

	function showSlides(n) {
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  if (n > slides.length) {slideIndex = 1}    
	  if (n < 1) {slideIndex = slides.length}
	  for (i = 0; i < slides.length; i++) {
	      slides[i].style.display = "none";  
	  }
	  slides[slideIndex-1].style.display = "block";  
	}
	</script>
</body>
</html>