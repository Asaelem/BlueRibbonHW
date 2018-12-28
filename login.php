<?php

//session_start();

$error = '';

if(isset($_POST['submit'])){

    if (empty($_POST['username_input']) || empty($_POST['password_input'])) {
        $error = "Username or Password is invalid";
    }
    else{
        $username='username_input';
        $password='password_input';
        if ($username == 'blueribbonhw' && $password == 'adminpassword'){
            header("location: http://localhost:63342/BlueRibbon/BlueRibbonHW/admin_panel.php?_ijt=evn1d7l7gttclqqvhsr6s2vf6q");
        }
        else{
            $error='incorrect user or password';
            echo "$error";
        }
    }
}



?>