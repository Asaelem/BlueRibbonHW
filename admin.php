<?php

include('login.php');



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home page</title>
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
<body>

<div class="container">

    <div class="login_form">

        <div class="login_text_frame">
            <h2>Admin Login</h2>
            <p>Please enter username and password</p>
        </div>

        <form id="login" method="post" action="">

            <div class="form-group">
                <input type="text" class="form-control" id="username_input" name="username_input" placeholder="Username">
            </div>

            <div class="form-group">
                <input type="password" class="form-control" id="password_input" name="password_input" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-primary">Login</button>

            <span><?php echo $error; ?></span>

        </form>

    </div>

</div>

</body>
</html>
