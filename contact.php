<!DOCTYPE html>

<?php
/**
 * Created by PhpStorm.
 * User: Grunkzilla
 * Date: 7/10/2018
 * Time: 11:13 PM
 */
?>


<html>

<head>
    <title>Home page</title>
    <meta charset="utf-8">
    <!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="CSS/blue_ribbon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Special+Elite">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="JS/carousel.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>

<header>
    <!--Adding the fixed navbar to top of page-->
    <nav class="navbar navbar-expand-lg d-none d-lg-block sticky-top  navbar-light bg-light" id="fixed-nav">
        <a class="navbar-brand" href="#">Blue Ribbon HW</a>
    </nav>
    <!--End fixed navbar-->
    <div class="container" id="nav-box">
        <nav class="navbar navbar-expand-lg justify-content-center navbar-expand-sm " id="navbar-nonBS">
            <ul  class="navbar-nav" id="nav-ul">
                <li class="nav-item"><a class="nav-link"  href="Home.html">Home</a> </li>
                <li class="nav-item "><a class="nav-link " href="rental.html">Rental</a> </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Commission</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Chairs</a>
                        <a class="dropdown-item" href="#">Donation Pieces</a>
                        <a class="dropdown-item" href="#">Flags</a>
                        <a class="dropdown-item" href="#">Pets</a>

                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a> </li>
            </ul>
        </nav>
    </div>
</header>

<nav>



</nav>

<body>

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