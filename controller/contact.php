<?php
function contact() {
    if(isset($_POST["send"])){
        // collect value of input field
        $name = $_POST['name'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $confirm_email = $_POST['confirm_email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $captcha = $_POST['captcha'];
        $captcha_validate = $_POST['captcha_validate'];

        if ($email != $confirm_email) {
            $validation = 1;
            return $validation;
        } else if ($captcha != $captcha_validate) {
            $validation = 3;
            return $validation;
        } else {
            send($name, $email, $subject, $message);
            $validation = 2;
            return $validation;
            die();
        }
       
    }  
}

function send($name, $email, $subject, $message) {
    require("phpmail/Exception.php");
    require("phpmail/PHPMailerAutoload.php");
    require("phpmail/SMTP.php");
    require("phpmail/PHPMailer.php");
    require("template/contactusemail.php");

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
    $mail->Subject = $subject;
    $mail->Body = $emailBody;
    $mail->isHTML(true);
    //send the message, check for errors
    if (!$mail->send()) {
        $error_msg = '<div class="alert alert-danger">Oppss, your message has not sent. Please try again</div>';
    } else {
        echo '<script>alert("Your message has been sent. Thank you!")</script>';
        header("Refresh:1; url=http://localhost/cleanspace/contactus.php");
        exit();
    }
}