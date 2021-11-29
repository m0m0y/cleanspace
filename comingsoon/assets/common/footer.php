  <!-- ======= Footer ======= -->
	<footer id="footer">
	    <div class="footer-top">
	      <div class="container">
	        <div class="row">
			
				<div class="col-lg-2 col-md-6 footer-links">
					<h4>Useful Links</h4>
					<ul>
						<li><i class="bx bx-chevron-right"></i> <a href="../index">Home</a></li>
						<li><i class="bx bx-chevron-right"></i> <a href="../about_us">About us</a></li>
						<li><i class="bx bx-chevron-right"></i> <a href="../warranty">Warranty</a></li>
						<li><i class="bx bx-chevron-right"></i> <a href="../terms_and_condition">Terms and Conditions</a></li>
						<li><i class="bx bx-chevron-right"></i> <a href="../privacy_policy">Privacy policy</a></li>
					</ul>
				</div>

				<div class="col-lg-2 col-md-6 footer-links">
					<h4>Products</h4>
					<ul>
						<li><i class="bx bx-chevron-right"></i> <a href="cleanspace_halo_head_harness">CleanSpace® HALO Head Hardness for Half Mask</a></li>
						<li><i class="bx bx-chevron-right"></i> <a href="cleanspace_halo_power_unit">CleanSpace® Power Unit</a></li>
						<li><i class="bx bx-chevron-right"></i> <a href="cleanspace2_power_system">CleanSpace2 Power System</a></li>
						<li><i class="bx bx-chevron-right"></i> <a href="cleanspace2_half_mask">CleanSpace2 Half Mask</a></li>
					</ul>
				</div>

	           <div class="col-lg-8">
		            <div class="footer-info">
		              <img class="footer-logo1"  src="../assets/img/logo1.png">
		              <p>
					  	200 C. Raymundo Avenue Caniogan, Pasig City 1606 Philippines.<br>
		                <strong>Phone:</strong> +63 (2) 8656 6888<br>
		                <strong>Email:</strong> info@cleanspace.ph<br>
		              </p>

					  	<div class="social-links">
			                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
			                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
			                <a href="#" class="google-plus"><i class="bx bxl-youtube"></i></a>
			                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
			            </div>
		            </div>
		        </div>

				<div class="col-lg-12">
					<div class="row shop-icon">
						<div class="col-lg-6 col-sm-12 icon-container"> 
							<p>Available in any of the following official distributors:</p>
							<a href="https://medicalshop.ph/index.php?route=product/search&search=cleanspace" target="_blank" title="medicalshop.ph"> 
								<img class="tms" src="../assets/img/tms.png">
							</a>
							
							<a href="https://panamed.com.ph/shop/index.php?route=product/search&search=CleanSpace" target="_blank" title="panamed.com.ph"> 
								<img class="ppi" src="../assets/img/ppi.png">
							</a>

							<a href="https://inmed.com.ph/direct/index.php?route=product/search&search=cleanspace" target="_blank" title="inmed.com.ph"> 
								<img class="inmed" src="../assets/img/inmed.png">
							</a>

							<a href="https://shopee.ph/search?keyword=cleanspace%C2%AE&shop=385019392" target="_blank" title="shopee.ph">
								<img src="../assets/img/shopee.png">
							</a>

							<a href="https://www.lazada.com.ph/inmed-corporation-official/?q=cleanspace&langFlag=en&from=wangpu&lang=en&pageTypeId=2&spm=a2o4l.10450891.searchbar.0" target="_blank" title="lazada.com.ph">
								<img src="../assets/img/lazada.png"> 
							</a>

						</div>
					</div>
				</div>

	        </div>
			<div class="mt-3"> Credits to CleanSpace Technology Australia. </div>
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