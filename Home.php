<?php
/**
 * Created by PhpStorm.
 * User: Dylan
 * Date: 9/23/2018
 * Time: 12:18 AM
 */
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <title>Home page</title>
    <meta charset="utf-8">
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="CSS/blue_ribbon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="CSS/custom.css">


</head>

<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbar">
            <ul class="navbar-nav" id="nav-ul">
                <li class="nav-item active"><a class="nav-link" id="nav-text" href="Home.php">Home</a> </li>
                <li class="nav-item active"><a class="nav-link" href="rental.php">Rental</a> </li>
                <li class="nav-item active"><a class="nav-link" href="Commission.php">Commission</a> </li>
                <li class="nav-item active"><a class="nav-link" href="Contact.php">Contact</a> </li>
            </ul>
        </nav>
    </div>
</header>

<body>
<!--Adding the carousel-->
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="images/Chairs/chair1.jpg" alt="Cool chair" style="width: 100%;">
                </div>

                <div class="item">
                    <img src="images/Chairs/chair2.jpg" alt="Better Chair" style="width: 100%;">
                </div>

                <div class="item">
                    <img src="images/Chairs/chair3.jpg" alt="Best chair" style="width: 100%;">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

<!--end carousel-->





</body>

<footer class="modal-footer">

    <p>(509)000-0000</p>
    <p>Insert Address</p>
    <div id="social_icon">
        <img src="images/fb_icon.png" alt="Facebook" href="https://www.facebook.com/BlueRibbonHWs/">
        <img src="images/twit_icon.png" alt="Twiter">
    </div>

</footer>

</html>
