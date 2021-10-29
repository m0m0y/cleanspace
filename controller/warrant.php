<?php

function warranty() {
    if(isset($_POST["send"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $confirm_email = $_POST["confirm_email"];
        $address = $_POST["address"];
        $mobile_num = $_POST["mobile_num"];
        $item = $_POST["item"];
        $purchase_form = $_POST["purchase_form"];
        $purchase_price = $_POST["purchase_price"];
        $purchase_date = $_POST["purchase_date"];
        $serial_num = $_POST["serial_num"];
        $order_number = $_POST["order_number"];
        $distributor = $_POST["distributor"];
        $radio = $_POST["radio"];
        $factors = $_POST["factors"];
        $packaging = $_POST["packaging"];
        $captcha_check = $_POST["captcha_check"];
        $captcha = $_POST["captcha"];

        $phone_num = isset($_POST['phone_num']) && !empty($_POST['phone_num']) ? $_POST['phone_num']: 'N/A';
        $satisfaction = isset($_POST['satisfaction']) && !empty($_POST['satisfaction']) ? $_POST['satisfaction']: 'N/A';
        $message = isset($_POST["message"]) && !empty($_POST["message"]) ? $_POST["message"]: 'No Comments';

        if($email !== $confirm_email) {
            $validation = 1;
            return $validation;
        } else if ($captcha !== $captcha_check) {
            $validation = 3;
            return $validation;
        }
        else {
            send($name, $email, $confirm_email, $address, $mobile_num, $phone_num, $item, $purchase_form, $purchase_date, $purchase_price, $serial_num, $order_number, $distributor, $radio, $factors, $packaging, $satisfaction, $message) ;
            $validation =2;
            return $validation;
        }
    }
}

function send($name, $email, $confirm_email, $address, $mobile_num, $phone_num, $item, $purchase_form, $purchase_date, $purchase_price, $serial_num, $order_number, $distributor, $radio, $factors, $packaging, $satisfaction, $message) {
    require("phpmail/Exception.php");
    require("phpmail/PHPMailerAutoload.php");
    require("phpmail/SMTP.php");
    require("phpmail/PHPMailer.php");
    require("template/warrantyemail.php");

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
    $mail->addAddress('itchaaanp@gmail.com', 'PMC');
    $mail->Subject = "Warranty Registration";
    $mail->Body = $emailBody;
    $mail->isHTML(true);
    //send the message, check for errors
    if (!$mail->send()) {
      $error_msg = '<div class="alert alert-danger">Oppss, your message has not sent. Please try again</div>';
    } else {
    //   $success_msg = '<div class="alert alert-success">Your message has been sent. Thank you!</div>';
    echo '<script>alert("Your message has been sent. Thank you!")</script>';
    header("Refresh:1; url=http://localhost/cleanspace/warranty.php");
    exit();
    }
}