<?php 
    $user_uuid = $_SESSION['user_uuid'];
    $user_login = $_SESSION['user_login'];

?>

<nav class="adminbar">
    <ul class="ab-toolbar">
        <li><a class="logo" href="#"><img src="http://localhost/phoenix_tacticool/images/phoenix-tactical-logo.png" alt="LG"></a></li>
        <li><a href="#">Dodaj misje</a></li>
        <li><a href="#">Dodaj trening</a></li>
    </ul>
    <div class="btn">
        <a href="#">
            <p>Witaj, <b><?php echo $user_login; ?></b></p><img src="http://localhost/phoenix_tacticool/uploads/avatar.png" alt="AV">
        </a>
        <div class="user-profile">
            <img src="http://localhost/phoenix_tacticool/uploads/avatar.png" alt="AV">
            <ul>
                <li><a href="#"><?php echo $user_login; ?></a></li>
                <li><a href="#">Edit profile</a></li>
                <li><a href="includes/logout.inc.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
