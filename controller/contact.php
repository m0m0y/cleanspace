<?php
// function send($name, $contact, $email, $message) {
    require("phpmail/Exception.php");
    require("phpmail/PHPMailerAutoload.php");
    require("phpmail/SMTP.php");
    require("phpmail/PHPMailer.php");
    require("contactusemail.php");

    $name = $_POST['customer_name'];
    $contact = $_POST['customer_contact_num'];
    $email = $_POST['customer_email'];
    $subject = $_POST['customer_subject'];
    $message = $_POST['customer_message'];

    $emailTemplate = new Test();

    $emailBody = $emailTemplate->emailMessage($name, $contact, $email, $message);
    
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
        // echo "Opps, something wrong! Please try again!";
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Successfully sent!";
    }

?>