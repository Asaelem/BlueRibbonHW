<!DOCTYPE html>

<?php
/**
 * Created by PhpStorm.
 * User: Grunkzilla
 * Date: 7/10/2018
 * Time: 11:13 PM
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/Exception.php';
require 'PHPMailer/SMTP.php';

if(isset($_POST['submit-button'])){

    $mail = new PHPMailer(true);

    $result = "";

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

    $mail -> addAddress('azuzuvsfry@hotmail.com');

    $mail -> Subject = 'Blue Ribbon contact';

    $mail -> Body = "From: " . $first_name . " " . $last_name . "\n" . "Email: " . $email . "\n" . "Message: " . $message;


    $mail -> isSMTP();

    $mail -> Host = 'smtp.gmail.com';
    $mail -> SMTPAuth = true;
    $mail -> SMTPSecure = 'tls';
    $mail -> Username = 'nmmmailer@gmail.com';
    $mail -> Password = 'Zeppelin1';
    $mail -> Port = 587;

    try{
        $mail->Send();
        $result = "Your message has been received. Thank you!";
        echo "success";
    } catch(Exception $e){
        //Something went bad
        $result = "Oops! Something went wrong, please try again.";
        echo "failure";
    }

}
?>


<html lang="en">

<head>
    <title>Contact</title>
    <meta charset="utf-8">
    <!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="CSS/blue_ribbon.css" rel="stylesheet">
    <link href="CSS/custom.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Special+Elite">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="JS/carousel.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>

<header>


    <!--Adding the fixed navbar to top of page-->
    <nav class="navbar navbar-expand-lg d-none d-lg-block fixed-top" id="fixed-nav">
        <a class="navbar-brand" href="index.html">Blue Ribbon HW</a>
        <div id="social_icon_header">
            <a href="https://www.facebook.com/BlueRibbonHWs/"><img src="images/fb_icon.png" alt="Facebook"></a>
            <img src="images/twit_icon.png" alt="Twitter">
        </div>
    </nav>
    <!--End fixed navbar-->

    <div class="container" id="nav-box">

        <nav class="navbar navbar-expand-lg justify-content-center navbar-expand-sm " id="navbar-nonBS">
            <div id="logo">
                <a href="index.html"><img class="img-fluid" src="images/logo/BRH%20Logo%20Final-05.png"></a>
            </div>
            <ul  class="navbar-nav" id="nav-ul">
                <li class="nav-item"><a class="nav-link"  href="index.html">Home</a> </li>
                <li class="nav-item"><a class="nav-link " href="rental.html">Rental</a> </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Commission</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="comm_chairs.html">Chairs</a>
                        <a class="dropdown-item" href="comm_dono.html">Donation Pieces</a>
                        <a class="dropdown-item" href="comm_flag.html">Flags</a>
                        <a class="dropdown-item" href="comm_pets.html">Pets</a>

                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a> </li>
            </ul>
        </nav>
    </div>
</header>
<body>

<div id="form">

    <form id="contact_form" method="post" action="" role="form">

        <div class="messages"></div>

        <div class="controls">

            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <input id="form_name" type="text" name="first_name" class="form-control" placeholder="First Name" required="required" data-error="First name is required">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <input id="form_lastname" type="text" name="last_name" class="form-control" placeholder="Last Name" required="required" data-error="Last name is required">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Email" required="required" data-error="Invalid email">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <textarea id="form_message" name="message" class="form-control" placeholder="Message" rows="4" required="required" data-error="Please enter a message."></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-12">
                    <input type="submit" class="btn btn-success btn-send" value="Send Message" name="submit-button">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-muted">
                        <strong>*</strong> These fields are required.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-muted">
                        <?php echo $result; ?>
                    </p>
                </div>
            </div>

        </div>

    </form>

</div>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type=text/javascript" src="BootStrap/js/bootstrap.min.js"></script>

</body>

<footer class="modal-footer">
    <div id="footer_contact">
        <p>(509)000-0000   Insert Address</p>
    </div>
    <div id="social_icon">
        <a href="https://www.facebook.com/BlueRibbonHWs/"><img src="images/fb_icon.png" alt="Facebook"></a>
        <img src="images/twit_icon.png" alt="Twiter">
    </div>

</footer>
</html>