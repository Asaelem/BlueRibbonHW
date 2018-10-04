<!DOCTYPE html>

<?php
/**
 * Created by PhpStorm.
 * User: Grunkzilla
 * Date: 7/10/2018
 * Time: 11:13 PM
 */

/**
$name_error = "";
$email_error = "";
$name = "";
$email = "";
$message = "";
$recipient = "asplund.alex@gmail.com";

if ($_SERVER["REQUEST_METHOD"] == "POST"){

if (empty($_POST["name"])){
$name_error = "Name is required";
} else {
$name = test_input($_POST["name"]);
if (!preg_match("/^[a-zA-Z]*$/", $name)){
$name_error = "Only letters and white space allowed";
}
}

if (empty($_POST["email"])){
$name_error = "Email is required";
} else {
$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
$email_error = "Invalid email format";
}
}

if (empty($_POST["message"])){
$message = "";
} else {
$message = test_input($_POST["message"]);
}

}


function test_input($data){

$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;

}
 */

?>


<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Me</title>
    <link href="BootStrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="CSS/custom.css" rel="stylesheet" type="text/css">

</head>

<nav>



</nav>

<body>
<?php

    $from = 'azuzuvsfry@hotmail.com';
    $sendTo = 'asplund.alex@gmail.com';
    $subject = 'New contact form message';
    $fields = array('name' => 'Name', 'last_name' => 'Last Name', 'email' => 'Email', 'message' => 'Message');
    $okMessage = 'Submission successful!';
    $errorMessage = 'Submission failed.';



?>

<form id="contact_form" method="post" action="contact.php" role="form">

    <div class="messages"></div>

    <div class="controls">

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="form_name">First Name *</label>
                    <input id="form_name" type="text" name="name" class="form_control" placeholder="Please enter your first name" required="required" data-error="First name is required">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="form_lastname">Last Name *</label>
                    <input id="form_lastname" type="text" name="last_name" class="form-control" placeholder="Please enter your last name" required="required" data-error="Last name is required">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email">Email *</label>
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter valid email" required="required" data-error="Invalid email">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_message">Enter your message here *</label>
                    <textarea id="form_message" name="message" class="form-control" placeholder="Please enter your message here." rows="4" required="required" data-error="Please enter a message."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" class="btn btn-success btn-send" value="Send Message">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-muted">
                    <strong>*</strong> These fields are required.
                </p>
            </div>
        </div>

    </div>

</form>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="BootStrap/js/bootstrap.min.js"></script>

</body>

<footer>



</footer>

</html>