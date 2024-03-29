<?php 
require("assets/common/header.php"); 
require("counter.php");
?>

	<header id="header" class="fixed-top d-flex align-items-center header-transparent">
	    <div class="container d-flex align-items-center justify-content-between">
			<?php require("assets/common/navbar.php") ?>
	    </div>
	</header>

	<section id="hero">
		<div class="container">
	      <div class="row justify-content-between">
	        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center animated">
	        	<div data-aos="zoom-out" class="hero_text">
		            <h1>A <span>REVOLUTIONARY</span> RESPIRATORY PROTECTION</h1>
	            </div>
	        </div>
	      </div>
	    </div>
	</section>

	<?= "<p class='d-none'>You are visitor number $counterVal to this site</p>"; ?>

    <section id="details" class="details">
      <div class="container">
			<div class="row content" data-aos="zoom-out">
				<div class="col-md-9 pt-4 border-left">
					<h3>CleanSpace Respirators are the world’s only smart and compact design respirators, providing the highest level of protection, comfort and performance.</h3>
					<p>
						We understand the importance of best-in-class personal protective equipment that not only performs, but allows the wearer to work comfortably and interact naturally in their work environment. Our products are designed for maximum compliance and comfort in healthcare settings and in any type environment.
					</p>
				</div>
			</div>
      </div>
    </section>

    <section id="about" class="about">
      	<div class="container">
			<div class="row">
				<div class="about-bg-img col-xl-5 col-lg-6 d-flex justify-content-center align-items-stretch" data-aos="fade-right">
				</div>

				<div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center" data-aos="fade-left">
					<h3>CLEANSPACE RESPIRATOR TECHNOLOGY</h3>

					<div class="icon-box" data-aos-delay="100">
						<p class="description">Our vision is to create a respirator with true innovation in personal respiratory protection. Using a combination of world class skills with a desire to better protect and serve people on the frontline industry and healthcare, our biomedical engineers created something that would change the way people use respirators. </br></br>
						CleanSpace respirators deliver all the protection of a Powered Air Purifying Respirator (PAPR), providing comfortable wearing and ease-of-use. Through our proprietary technology, we have created the world’s smallest and smartest respirator
						</p>
						<p><a class="uppercase btn btn-outline-primary" href="about_us">Learn More About Us</a></p>
					</div>
				</div>
			</div>
		</div>
    </section>

	<section id="advantage" class="about advantage">
      	<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center" data-aos="fade-right">
					<center>
						<h3>ADVANTAGES OF BUYING FROM US: </h3>
					</center>
					<div class="icon-box" data-aos-delay="100">
						<p class="description gif-desc">
							<i class="fas fa-check"></i> Items are ready to ship <br>
							<i class="fas fa-check"></i> Service and repairs assistance<br>
							<i class="fas fa-check"></i> Freebies <br>
							<i class="fas fa-check"></i> Discounts and more promos <br>
						</p>
					</div>
				</div>

				<div class="col-xl-6 col-lg-6 d-flex justify-content-center align-items-stretch" data-aos="fade-left">
					<img class="gif" src="assets/img/others/cleanspace_gif1.gif" alt="slide-img">
				</div>
			</div>
		</div>
    </section>

    <section id="features" class="features">
      	<div class="container">
			<div class="section-title" data-aos="fade-up">
				<h2 class="uppercase">CleanSpace</h2>
				<p>Featured Products</p>
			</div>

			<div class="row" data-aos="fade-left">
				<div class="col-lg-3">
					<div class="content-box">
						<img src="assets/img/products/head harness.png" alt="HALO Head Harness for Half Mask (Non fabric)">
						<h3 class="product-title">CleanSpace® </h3>
						<h4 class="product-sub-title"> HALO Head Harness for Half Mask</h4>
						<h6 class="desc"> (Non fabric) </h6>
						<p class="sub-desc"> The CleanSpace HALO Head Harness is designed to be used with the CleanSpace HALO PAPR Power Units (CS3000). The Head Harness comes with every CleanSpace HALO PAPR system.<br/><br/> </p>
						<a class="uppercase btn btn-outline-primary" href="cleanspace_halo_head_harness">Learn More</a>
					</div>
				</div>
				
				<div class="col-lg-3">
					<div class="content-box">
						<img src="assets/img/products/power unit.png" alt="HALO Power Unit (Half mask is sold separately)">
						<h3 class="product-title">CleanSpace® </h3>
						<h4 class="product-sub-title">HALO Power Unit</h4>
						<h6 class="desc"> (Half mask, sold separately) </h6>
						<p class="sub-desc"> CleanSpace® Halo is a Powered Air Purifying Respirator (PAPR) system that houses smart technology, designed by biomedical engineers in a revolutionary, compact system. <br/><br/>
						<a class="uppercase btn btn-outline-primary" href="cleanspace_halo_power_unit">Learn More</a></p>
					</div>
				</div>

				<div class="col-lg-3">
					<div class="content-box">
						<img src="assets/img/products/CleanSpace2_Power_System.png" alt="Power System (Half mask is sold seperately)">
						<h3 class="product-title">CleanSpace2 </h3>
						<h4 class="product-sub-title">Power System</h4>
						<h6 class="desc">(Half mask, sold seperately)</h6>
						<p class="sub-desc"> The CleanSpace2 Powered Respirator Unit is a battery-powered, positive pressure air-purifying/filtering respirator. This respirator is breathe responsive and is designed to provide comfortable respiratory protection<br/><br/>
						<a class="uppercase btn btn-outline-primary" href="cleanspace2_power_system">Learn More</a></p>
					</div>
				</div>

				<div class="col-lg-3">
					<div class="content-box">
						<img src="assets/img/products/half mask1.png" alt="Half Mask (Available in different sizes)">
						<h3 class="product-title">CleanSpace2 </h3>
						<h4 class="product-sub-title">Half Mask</h4>
						<h6 class="desc">(Available in different sizes)</h6>
						<p class="sub-desc">The CleanSpace Half Masks are specifically designed to work to complete the CleanSpace PAPR system. Compatible with all CleanSpace Respirators, the Half Masks clip quickly onto the power units and are easily unclipped for cleaning. <br/><br/>
						<a class="uppercase btn btn-outline-primary" href="cleanspace2_half_mask">Learn More</a></p>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row content" style="margin-top: 5%;" >
				<div class="col-lg-6 col-sm-12" data-aos="fade-right">
						<div class="content-box">
							<div class="cleanspace-smart-app-slideshow">
								<div class="mySlides">
									<img src="assets/img/gallery/cleanspace_halo/CleanSpace-Smart-App.jpg" alt="slide-img">
								</div>

								<div class="mySlides">
									<img src="assets/img/gallery/cleanspace_smart_app/CS Smart App 1.png" alt="slide-img">
								</div>

								<div class="mySlides">
									<img src="assets/img/gallery/cleanspace_smart_app/CS Smart App 2.png" alt="slide-img">
								</div>

								<div class="mySlides">
									<img src="assets/img/gallery/cleanspace_smart_app/CS Smart App 3.png" alt="slide-img">
								</div>

								<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
								<a class="next" onclick="plusSlides(1)">&#10095;</a>
							</div>
						</div>
				</div>
				
				<div class="col-lg-6 col-sm-12 d-flex flex-column align-items-stretch" data-aos="fade-left">
					<h3>CleanSpace Smart App</h3>
					
					<div class="icon-box" data-aos-delay="100">
						<p class="description">Create an account to pair with any CleanSpace HALO and check mask fit, device performance, battery life and many more.</p><br/>

						<div class="row">
							<div class="col-md-4 col-sm-12">
								<img src="assets/img/gallery/cleanspace_smart_app/CS App Store QR.png" width="85%" alt="CleanSpace Smart App on App Store"> 
							</div>
							<div class="col-md-4 col-sm-12">
								<img src="assets/img/gallery/cleanspace_smart_app/CS G Play QR.png" width="85%" alt="CleanSpace Smart App on Google Play"> 
							</div>
							<div class="col-md-4 col-sm-12"></div>
						</div>
					
						<br/>

						<p> <a class="uppercase btn btn-outline-primary" target="_blank" href="https://senz-medical.com/cleanspace_dev/assets/pdf/CleanSpace-Smart-APP-Flyer-ROW.pdf">Learn More</a></p>
					</div>
				</div>
			</div>
		</div>
    </section>

	<section id="testimonials" class="testimonials">
		<div class="container">
			<div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="testimonial-item">
							<h3>Dr. Alisasis </h3>
							<p>
							<i class="bx bxs-quote-alt-left quote-icon-left"></i>
							I love using this respirator in the OR, compact and reliable. Best buy!
							<i class="bx bxs-quote-alt-right quote-icon-right"></i>
							</p>
						</div>
					</div>
				</div>
				<div class="swiper-pagination"></div>
			</div>
		</div>
    </section>

	<?php require("assets/common/popup.php"); ?>

	<?php require("assets/common/contact.php"); ?>
	<?php require("assets/common/footer.php"); ?>