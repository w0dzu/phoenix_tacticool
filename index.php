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
<main>

</main>
<?php include 'components/footer.php';?>
</body>
</html>