<?php
    session_start();

    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    
    $url  = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

    $path = parse_url($url, PHP_URL_PATH);
    $pathFragments = explode('/', $path);
    $filtered = array_filter($pathFragments);
    $uuid = intval(end($filtered));
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>

    <link rel="stylesheet" href="http://localhost/phoenix_tacticool/styles/main.css" type="text/css">

    <link rel="shortcut icon" href="http://localhost/phoenix_tacticool/images/phoenix-tactical-logo.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">

    <script src="http://localhost/phoenix_tacticool/scripts/profileTab.js" defer></script>
</head>
<body>
<?php
    if (isset($_SESSION['user_login'])) {
        include 'admin/adminbar.php';
    }
    include 'components/header.php';

    include 'classes/dbh.class.php';
    include 'classes/profile.class.php';
    include 'classes/profileView.class.php';

    $profile = new ProfileView();

    //var_dump($profile->fetchProfileImage($uuid));
?>
<main class="userProfile">
    <aside class="profileSidebar">
        <div class="profileId">
            <div class="profileIdChild profileIdImage">
                <div>
                    <img class="profileImage" src="http://localhost/phoenix_tacticool/<?php $profile->fetchProfileImage($uuid)?>" alt="avatar">
                </div>
                <div>
                    <p><b>PHOENIX TACTICOOL</b></p>
                    <img class="profileLogo" src="http://localhost/phoenix_tacticool/images/phoenix-tactical-logo.png" alt="logo">
                    <p>Operator</p>
                </div>
            </div>
            <div class="profileIdChild profileIdName">
                <div>
                    <h6>Firstname:</h6><h5><?php $profile->fetchProfileFirstname($uuid);?></h5>
                    <h6>Lastname:</h6><h5><?php $profile->fetchProfileLastname($uuid);?></h5>
                </div>
                <div>
                    <h6>Callsign:</h6><h5><?php $profile->fetchUserLogin($uuid);?></h5>
                </div>
            </div>
            <div class="profileIdChild profileIdIssue">
                <h6>Issue Date:</h6><h5>2000-JAN-01</h5>
                <h6>Expiration Date:</h6><h5><div class="expdate"></div></h5>
                <img src="http://localhost/phoenix_tacticool/<?php $profile->fetchProfileQrcode($uuid)?>" alt="QRCODE">
            </div>
            <div class="profileIdChild profileIdBottom">
                Phoenix Tacticool Identification Card
            </div>
        </div>
    </aside>
    <main class="profileMain">
        <nav class="profileNavbar">
            <ul>
                <li><a class="overview" href="?tab=overview">OVERVIEW</a></li>
                <li><a class="trainings" href="?tab=trainings">TRAININGS</a></li>
                <li><a class="operations" href="?tab=operations">OPERATIONS</a></li>
                <li><a class="media" href="?tab=media">MEDIA</a></li>
            </ul>
        </nav>
        <section class="profileContent overview">
            <h1>ABOUT ME</h1>
            <p><?php  $profile->fetchProfileAbout($uuid) ?></p>
            <h1>STATISTICS</h1>
            <div class="stats">
                <div class="statsChild div1">Missions: <span class="counter"><?php  $profile->fetchDataMissions($uuid);?></span></div>
                <div class="statsChild div2">Trainings: <span class="counter"><?php  $profile->fetchDataTrainings($uuid);?></span></div>
                <div class="statsChild div3">Tvt: <span class="counter"><?php  $profile->fetchDataTvt($uuid);?></span></div>
                <div class="statsChild div4">RTB: <span class="counter"><?php  $profile->fetchDataRtb($uuid);?></span></div>
                <div class="statsChild div5">KIA: <span class="counter"><?php  $profile->fetchDataKia($uuid);?></span></div>
                <div class="statsChild div6">MIA: <span class="counter"><?php  $profile->fetchDataMia($uuid);?></span></div>
                <div class="statsChild div7">As PL: <span class="counter"><?php  $profile->fetchDataPl($uuid);?></span></div>
                <div class="statsChild div8">As SL: <span class="counter"><?php  $profile->fetchDataSl($uuid);?></span></div>
                <div class="statsChild div9">As TL: <span class="counter"><?php  $profile->fetchDataTl($uuid);?></span></div>
            </div>
        </section>
        <section class="profileContent trainings">trainings</section>
        <section class="profileContent operations">operations</section>
        <section class="profileContent media">media</section>
    </main>
</main>
<?php include 'components/footer.php';?>
</body>
</html>