<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>

    <link rel="stylesheet" href="styles/main.css">

    <link rel="shortcut icon" href="images/phoenix-tactical-logo.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
</head>
<main class="signup">
<a class="signup" href="index.php"><img class="signup"src="images/phoenix-tactical-logo.png" alt="LG"></a>
    <div class="login">
        <h1>SIGNUP</h1>
        <form action="inc/signup.inc.php" method="post">
            <input type="text" name="usr" id="usr" placeholder="Login">
            <input type="text" name="email" id="email" placeholder="Email">
            <input type="password" name="pwd" id="pwd"  placeholder="Password">
            <input type="password" name="pwdrepeat" id="pwdrepeat"  placeholder="Repeat Password">
            <div class="options">
            </div>
            <input type="submit" value="Signup">
        </form>
        <h5>You have an account? <a href="login.php">Login</a></h5>
    </div>
</main>
</body>
</html>