<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Get data from form
    $login = htmlspecialchars($_POST["login"], ENT_QUOTES, "UTF-8");
    $email = htmlspecialchars($_POST["email"], ENT_QUOTES, "UTF-8");
    $pwd = htmlspecialchars($_POST["pwd"], ENT_QUOTES, "UTF-8");
    $pwdrepeat = htmlspecialchars($_POST["pwdrepeat"], ENT_QUOTES, "UTF-8");
    

    // Instantiate signupContr class
    include "../classes/dbh.class.php";
    include "../classes/signup.class.php";
    include "../classes/signupController.class.php";

    $signup = new SignupController($login, $email, $pwd, $pwdrepeat);

    // Running error handelrs and users signup
    $signup->signupUser();

    $userUidd = $signup->fetchUserUuid($login);
    $userId = $signup->fetchUserId($login);

    // Instantiate ProfileController class
    include "../classes/profile.class.php";
    include "../classes/profileController.class.php";

    $profile = new ProfileController($userId);
    $profile->setDefaultProfile();
    

    // Going to back to front page
    header("location: ../index.php?error=none");
}