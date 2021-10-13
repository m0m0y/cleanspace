<?php 
/////////////////////////////////////////////////////////////
//                      CAPTCHA FUNCTION
////////////////////////////////////////////////////////////
$moy=6;
function getRand($moy) {
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $randomString = '';

  for ($i=0; $i < $moy; $i++) { 
    $index = rand(0, strlen($characters) - 1);
    $randomString .= $characters[$index];
  }

  return $randomString;
}

$rand = getRand($moy);

/////////////////////////////////////////////////////////////
//                      EMAIL FUNCTION
////////////////////////////////////////////////////////////
require_once("controller/phpmail/PHPMailerAutoload.php");

$error_msg = "";
$success_msg = "";
$captcha_alert = "";
$email_verify = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['name'];
  $contact = $_POST['contact'];
  $email = $_POST['email'];
  $confirm_email = $_POST['confirm_email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $captcha = $_POST['captcha'];
  $qwe = $_POST['qwe'];

  if ($email != $confirm_email) {
    $email_verify = "Please double check your email address!";
  } 
  elseif ($captcha != $qwe) {
    $captcha_alert = "Invalid Captcha";
  }
  else {
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Debugoutput = 'html';
    $mail->Host = "ssl://smtp.gmail.com";
    $mail->Port = 465;
    $mail->SMTPAuth = true;
    $mail->Username = "cpascual107@gmail.com";
    $mail->Password = "123Pascual123";
    $mail->setFrom('cpascual107@gmail.com', 'no-reply');
    $mail->addReplyTo($email, $name);
    $mail->addAddress('cpascual107@gmail.com', 'Christian');
    $mail->Subject = $subject;
    $mail->Body = '
    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
    <html>
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
      <title>PHPMailer Test</title>
    </head>

    <body>
    <div style="width: 640px; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">
      <h1>'.$message.'</h1>
      <p>This example uses <strong>HTML</strong>.</p>
    </div>
    </body>
    </html>
    ';
    $mail->isHTML(true);
    //send the message, check for errors
    if (!$mail->send()) {
      $error_msg = '<div class="alert alert-danger">Oppss, your message has not sent. Please try again</div>';
    } else {
      $success_msg = '<div class="alert alert-success">Your message has been sent. Thank you!</div>';
    }
  }
}

require("assets/common/header.php"); 
?>

	<!-- ======= Header Section ======= -->
	<header id="header" class="fixed-top d-flex align-items-center header-transparent">
	    <div class="container d-flex align-items-center justify-content-between">

	      <!-- Navbar -->
	      <?php require("assets/common/navbar.php") ?>
	    </div>
	</header><!-- End Header Section -->

	<!-- ======= Hero Section ======= -->
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
	</section><!-- End Hero Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">
      <div class="row pt-4">
        <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>info@example.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+1 5589 55488 55s</p>
            </div>
          </div>
        </div>

        <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

          <form action="" method="post" role="form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="number" class="form-control" name="contact" id="contact" min="1" placeholder="Contact Number" required>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-6 form-group">
                <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="confirm_email" id="email" placeholder="Confirm Email" required>
                <span class="error"><?php echo $email_verify; ?></span>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>

            <div class="form-group mt-3">
              <?php echo "Please type <b>".$rand."</b> in the field:"; ?>
              <input type="hidden" class="form-control" name="qwe" id="subject" value="<?php echo $rand; ?>" readonly>
              <input type="text" class="form-control" name="captcha" id="subject" placeholder="Captcha">
              <span class="error"><?php echo $captcha_alert; ?></span>
            </div>

            <br/>
            <?php echo $error_msg; ?>
            <?php echo $success_msg; ?>
          
            <button class="btn btn-md btn-primary" type="submit">Submit</button>
          </form>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-left">

      <div class="content">
        <div class="pt-4 icon-boxes" style="border-left: 3px solid #0a9995; padding-left: 3%;">
          <h3>CLEANSPACE RESPIRATOR TECHNOLOGY</p></h3>

          <div class="icon-box" data-aos-delay="100">
            <p class="description">Our vision was to create a respirator that was a true innovation in personal respiratory protection. Using a combination of world class skills with a desire to better protect and serve people on the frontline of industry and healthcare, our biomedical engineers created something that would change the way people used respirators. </br></br>
            CleanSpace respirators deliver all the protection of a Powered Air Purifying Respirator (PAPR), are comfortable to wear and easy to use. Through our proprietary technology, we have created the world’s smallest and smartest respirator
            </p>
            <p><a class="uppercase" href="about_us.php">Learn More</a></p>
          </div>

        </div>
      </div>

    </div>
  </section><!-- End About Section -->

<?php require("assets/common/footer.php"); ?>