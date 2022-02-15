<?php 
require("assets/common/header.php"); 
require("controller/captcha.php");
?>

	<header id="header" class="fixed-top d-flex align-items-center header-transparent">
	    <div class="container d-flex align-items-center justify-content-between">
	      <?php require("assets/common/navbar.php") ?>
	    </div>
	</header>

	<section id="cleanspace-2">
		<div class="container">
	      <div class="row justify-content-between">
	        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center animated">
	        	<div data-aos="zoom-out" class="hero_text">
		            <h1><span>CONTACT</span> US</h1>
	            </div>
	        </div>
	      </div>
	    </div>
	</section>

  <section id="contact" class="contact">
    <div class="container">
      <div class="row pt-4">
        <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>200 C. Raymundo Avenue Caniogan, Pasig City 1606 Philippines.</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>info@cleanspace.ph</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+63 (2) 8656 6888</p>
            </div>
          </div>
        </div>

        <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">
            <div id="sendingValidation"></div>
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="c_name" class="form-control" id="name" placeholder="Your Name" onkeyup="txtvalidator(this)" required>
                <span class="error" id="c_name"></span>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="number" class="form-control" name="c_contact" id="contact_num" placeholder="Contact Number" onkeyup="txtvalidator(this)" required>
                <span class="error" id="c_contact"></span>
              </div>
            </div>
            
            <div class="row mt-3">
              <div class="col-md-6 form-group">
                <input type="email" name="c_email" class="form-control" id="email" placeholder="Your Email" onkeyup="txtvalidator(this)" required>
                <span class="error" id="c_email"></span>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="c_confirm_email" id="confirm_email" placeholder="Confirm Email" onkeyup="txtvalidator(this)" required>
                <span class="error" id="c_confirm_email"></span>
              </div>  
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="c_subject" id="subject" placeholder="Subject" onkeyup="txtvalidator(this)" required>
              <span class="error" id="c_subject"></span>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="c_message" rows="5" id="message" placeholder="Message" onkeyup="txtvalidator(this)"></textarea>
              <span class="error" id="c_message"></span>
            </div>

            <div class="form-group mt-3">
              <?php echo "Please type <b>".$rand."</b> in the field:"; ?>
              <input type="hidden" class="form-control" name="captcha_validate" id="captcha_validate" value="<?php echo $rand; ?>" readonly>
              <input type="text" class="form-control" name="c_captcha" id="captcha" placeholder="Captcha" onkeyup="txtvalidator(this)">
              <span class="error" id="c_captcha"></span>
            </div>

            <br/>
    
            <input type="button" class="btn btn-md btn-primary" name="send" value="Submit" id="contactus_send">
        </div>
      </div>
    </div>
  </section>

  <section id="about" class="about">
    <div class="container" data-aos="fade-left">
      <div class="content">
        <div class="pt-4 icon-boxes border-left">
          <h3>CLEANSPACE RESPIRATOR TECHNOLOGY</p></h3>

          <div class="icon-box" data-aos-delay="100">
            <p class="description">Our vision was to create a respirator that was a true innovation in personal respiratory protection. Using a combination of world class skills with a desire to better protect and serve people on the frontline of industry and healthcare, our biomedical engineers created something that would change the way people used respirators. </br></br>
            CleanSpace respirators deliver all the protection of a Powered Air Purifying Respirator (PAPR), are comfortable to wear and easy to use. Through our proprietary technology, we have created the world’s smallest and smartest respirator
            </p>
            <p><a class="uppercase btn btn-outline-primary" href="about_us">Learn More About Us</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php require("assets/common/footer.php"); ?>

