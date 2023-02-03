<?php
    session_start();

    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    
    $GLOBALS['url']  = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

    $query = $_SERVER['QUERY_STRING'];
    //echo $query; // Outputs: Query String
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>

    <link rel="stylesheet" href="styles/main.css">

    <link rel="shortcut icon" href="images/phoenix-tactical-logo.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
</head>
<body>
<?php
    if (isset($_SESSION['user_login'])) {
        include 'admin/adminbar.php';
    }
    include 'components/header.php';
?>
<main class="userProfile">
    <aside class="profileSidebar">
        <div class="profileId">
            <div class="profileIdChild profileIdImage">
                <div>
                    <img class="profileImage" src="images/avatar.png" alt="avatar">
                </div>
                <div>
                    <p><b>PHOENIX TACTICOOL</b></p>
                    <img class="profileLogo" src="images/phoenix-tactical-logo.png" alt="logo">
                    <p>Operator</p>
                </div>
            </div>
            <div class="profileIdChild profileIdName">
                <div>
                    <h6>Firstname:</h6><h5>DAVID</h5>
                    <h6>Lastname:</h6><h5>ANDERSON</h5>
                </div>
                <div>
                    <h6>Callsign:</h6><h5>JOHNNY BRAVO</h5>
                </div>
            </div>
            <div class="profileIdChild profileIdIssue">
                <h6>Issue Date:</h6><h5>2000-JAN-01</h5>
                <h6>Expiration Date:</h6><h5><div class="expdate"></div></h5>
                <img src="images/qrcode.png" alt="QRCODE">
            </div>
            <div class="profileIdChild profileIdBottom">
                Phoenix Tacticool Identification Card
            </div>
        </div>
    </aside>
    <main class="profileMain">
        <nav class="profileNavbar">
            <ul>
                <li><a class="active" href="?tab=overview">OVERVIEW</a></li>
                <li><a href="?tab=trainings">TRAININGS</a></li>
                <li><a href="?tab=operations">OPERATIONS</a></li>
                <li><a href="?tab=media">MEDIA</a></li>
            </ul>
        </nav>
        <section class="profileContent active">overview</section>
        <section class="profileContent ">trainings</section>
        <section class="profileContent ">operations</section>
        <section class="profileContent ">media</section>

    </main>
</main>
<?php include 'components/footer.php';?>
</body>
</html>