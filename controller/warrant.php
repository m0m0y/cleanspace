<?php

require("phpmail/Exception.php");
require("phpmail/PHPMailerAutoload.php");
require("phpmail/SMTP.php");
require("phpmail/PHPMailer.php");
require("warrantyemail.php");


$name =  $_POST["customer_name"];
$email =  $_POST["customer_email"];
$address =  $_POST["customer_address"];
$mobile_num =  $_POST["customer_mobile_num"];
$item = $_POST["customer_product_item"];
$purchase_form = $_POST["customer_purchase_form"];
$purchase_price = $_POST["customer_purchase_price"];
$order_number = $_POST["customer_order_num"];
$distributor = $_POST["customer_distributor"];
$purchase_date = $_POST["customer_purchase_date"];
$serial_num = $_POST["customer_serial_num"];
$aware = $_POST["aware"];
$factors = $_POST["customer_factors"];
$packaging = $_POST["packaging_rate"];
$satisfaction = $_POST["product_rate"];

$phone_num = isset($_POST['customer_phone_num']) && !empty($_POST['customer_phone_num']) ? $_POST['customer_phone_num']: 'N/A';
$message = isset($_POST["customer_message"]) && !empty($_POST["customer_message"]) ? $_POST["customer_message"]: 'No Comments';

$emailTemplate = new mailTemplate();
$emailBody = $emailTemplate->warranty($name, $email, $mobile_num, $phone_num, $address, $item, $purchase_form, $purchase_price, $order_number, $distributor, $purchase_date, $serial_num, $aware, $factors, $packaging, $satisfaction, $message);

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
$mail->addAddress('itchaaanp@gmail.com', 'PMC');
$mail->Subject = "Customer Warranty";
$mail->Body = $emailBody;
$mail->isHTML(true);
//send the message, check for errors
if (!$mail->send()) {
    echo "Opps, something wrong! Please try again!";
    // echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Successfully sent!";
}