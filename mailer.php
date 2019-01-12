<?php
/**
 * Created by PhpStorm.
 * User: Grunkzilla
 * Date: 10/6/2018
 * Time: 8:44 PM
 */

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
$recipient = "asplund.alex@gmail.com, dylans07@yahoo.com";
$subject = "Contact Form";
$form_content="From: $first_name $last_name \n Message: $message";
$mail_header = "From: $email \r\n";
mail($recipient, $subject, $form_content, $mail_header) or die("Error!");
echo "Thank You!";
