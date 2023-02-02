<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Get data from form
    $login = htmlspecialchars($_POST["login"], ENT_QUOTES, "UTF-8");
    $pwd = htmlspecialchars($_POST["pwd"], ENT_QUOTES, "UTF-8");
    // Instantiate signupContr class
    include "../classes/dbh.class.php";
    include "../classes/login.class.php";
    include "../classes/loginController.class.php";

    $login = new LoginController($login, $pwd);

    // Running error handelrs and users signup
    $login->loginUser();
    // Going to back to front page
    header("location: ../index.php?error=none");
}