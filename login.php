<?php
    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    
    $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    //echo $url; // Outputs: Full URL
    
    $query = $_SERVER['QUERY_STRING'];
    //echo $query; // Outputs: Query String
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <link rel="stylesheet" href="styles/main.css">

    <link rel="shortcut icon" href="images/phoenix-tactical-logo.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
</head>
<main class="login">
<a class="login" href="index.php"><img class="login"src="images/phoenix-tactical-logo.png" alt="LG"></a>
    <div class="login">
        <h1>LOGIN</h1>
        <form action="inc/login.inc.php" method="post">
            <input type="text" name="login" id="login" placeholder="Username or Email">
            <input type="password" name="pass" id="pass"  placeholder="Password">
            <div class="options">
                <input type="checkbox" name="remember" id="remember">
                <label for="remmber">Remember me</label>
                <a href="">Forgot Password?</a>
            </div>
            <input type="submit" value="Login">
        </form>
        <h5>Don't have an account? <a href="signup.php">Signup</a></h5>
    </div>
</main>
</body>
</html>