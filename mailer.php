<?php
/**
 * Created by PhpStorm.
 * User: Grunkzilla
 * Date: 10/6/2018
 * Time: 8:44 PM
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/Exception.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$message = $_POST['message'];

if ($first_name === ''){
    echo "First name cannot be empty.";
    die();
}
if ($last_name === ''){
    echo "Last name cannot be empty.";
    die();
}
if ($email === ''){
    echo "Email cannot be empty.";
    die();
} else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Email format invalid.";
        die();
    }
}
if ($message === ''){
    echo "Message cannot be empty.";
    die();
}

$mail -> setFrom($email, $first_name + $last_name);

$mail -> addAddress('dylans07@yahoo.com');

$mail -> Subject = 'Blue Ribbon contact';

$mail -> Body = $message;


$mail -> isSMTP();

$mail -> Host = 'smtp.gmail.com';
$mail -> SMTPAuth = true;
$mail -> SMTPSecure = 'ssl';
$mail -> Username = 'asplund.alex@gmail.com';
$mail -> Password = 'zombizzle';
$mail -> Port = 465;


if (!$mail->send())
{
    /* PHPMailer error. */
    echo $mail->ErrorInfo;
}

//$first_name = $_POST['first_name'];
//$last_name = $_POST['last_name'];
//$email = $_POST['email'];
//$message = $_POST['message'];
//
//if ($first_name === ''){
//    echo "First name cannot be empty.";
//    die();
//}
//if ($last_name === ''){
//    echo "Last name cannot be empty.";
//    die();
//}
//if ($email === ''){
//    echo "Email cannot be empty.";
//    die();
//} else {
//    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
//        echo "Email format invalid.";
//        die();
//    }
//}
//if ($message === ''){
//    echo "Message cannot be empty.";
//    die();
//}
//$recipient = "asplund.alex@gmail.com, dylans07@yahoo.com";
//$subject = "Contact Form";
//$form_content="From: $first_name $last_name \n Message: $message";
//$mail_header = "From: $email \r\n";
//mail($recipient, $subject, $form_content, $mail_header) or die("Error!");
//echo "Thank You!";
