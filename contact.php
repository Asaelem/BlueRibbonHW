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
    <title>Contact</title>

</head>

<header>

    <div id="nav_bar">

        <ul>

            <li><a href="home_page.php">Home</a></li>
            <li><a></a></li>
            <li><a href="contact.php">Contact</a></li>

        </ul>

    </div>

</header>

<body>
<?php /**
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
*/?>
<div>

    <p><span class="error">* Required Field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

        <p>Name</p> <input type="text" name="name" value="<?php echo $name; ?>"><p><span class="error">* <?php echo $name_error; ?></span></p><br />
        <p>Email</p> <input type="text" name="email" value="<?php echo $email; ?>"><p><span class="error">* <?php echo $email_error; ?></span></p><br />
        <p>Message</p> <textarea name="message" rows="10" cols="15"><?php echo $message; ?></textarea><br />
        <input type="submit" value="send"><input type="reset" value="clear">

    </form>

</div>

</body>

<footer>



</footer>

</html>