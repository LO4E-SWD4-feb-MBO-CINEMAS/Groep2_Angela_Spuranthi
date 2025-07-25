<?php
session_start();

require_once 'Classes/User.php';
require_once 'auth_check.php';

requireLogin();
$user = getCurrentUser();

if (!$user) {
    session_destroy();
    header('Location: inloggen.php');
    exit();
}


?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mederwerkers home pagina</title>
    <meta name="description" content="Nadat je ingelogd bent, kun je hier je profielgegevens bijwerken, zoals je gebruikersnaam, e-mailadres en leeftijd.">
    <meta name="keywords" content="MBOcinema, profiel, bijwerken, medewerkers, films, bioscopen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Spuranthi Srirangam">
    <link rel="stylesheet" href="CSS/Style.css"> 
</head>
<body>

<header class="header_2">
    <img class="logo_img" src="Images/MBO-cinema-logo.png" alt="logo mbo cinema's"> 
    <ul class="menu" id="mobileMenu">
        <li><a href="index.php">Home</a></li>
        <li><a href="films.php">Films</a></li>
        <li><a href="bioscopen.php">Bioscopen</a></li>
        <li><a href="informatie.php">Informatie</a></li>
        <li><a href="inloggen.php">inloggen</a></li>
        <li><a href="edit.php">Verander profiel</a></li>
        <li><a href="logout.php"> <button class="btn">Log uit</button> </a></li>
     </ul>
</header>

<main class="main_medewerkers">
    <article class="main-box top">
        <article class="top">
            <article class="profiel-box">
                <p>Hey <b><?php echo htmlspecialchars($user['username']); ?></b>, welkom!</p>
            </article>
            <article class="profiel-box">
                <p>Jouw email is <b><?php echo htmlspecialchars($user['email']); ?></b>.</p>
            </article>
            <article class="bottom">
                <article class="box">
                    <p>En jij bent <b><?php echo htmlspecialchars($user['leeftijd']); ?> jaar oud</b>.</p>
                </article>
            </article>
        </article>
    </article>
</main>

<footer>
    <?php
    include("footer.php");
    ?>
</footer>

</body>
</html>