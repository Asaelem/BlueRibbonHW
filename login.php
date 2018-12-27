<?php

session_start();

$error = '';

if(isset($_POST['submit'])){

    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
    }
    else{
        $username='username';
        $password='password';
        if ($username == 'blueribbonhw' && $password == 'adminpassword'){
            echo 'login success';
        }
        else{
            $error='incorrect user or password';
        }
    }
}

?>