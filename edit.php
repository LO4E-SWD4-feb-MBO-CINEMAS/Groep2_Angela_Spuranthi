<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verander profiel</title>
    <meta name="description" content="Inloggen als medewerker kan op deze pagina! Ook als je nieuw bent kan je een account aanmaken">
    <meta name="author" content="Spuranthi Srirangam">
    <link rel="stylesheet" href="CSS/Style.css">
</head>
<body>
<header class="header_2">
    <img class="logo_img" src="Images/MBO-cinema-logo.png" alt="logo mbo cinema's"> 
    <ul class="menu" id="mobileMenu">
        <li><a href="#">Films</a></li>
        <li><a href="#">Bioscopen</a></li>
        <li><a href="informatie.php">Informatie</a></li>
        <li><a href="inloggen.php"><i class='bx bx-user-circle'></i></a></li>
        <li><a href="edit.php">Verander profiel</a></li>
        <li><a href="logout.php"> <button class="btn">Log uit</button> </a></li>
     </ul>
</header>

<main>
    <article class="container">
        <article class="box form-box">
        <p>Verander profiel</p>
        <form action="" method="post">
            <article class="field input">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" autocomplete="off" required>
            </article>

            <article class="field input">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" autocomplete="off" required>
            </article>

            <article class="field input">
                <label for="age">Leeftijd</label>
                <input type="number" name="age" id="age" autocomplete="off" required>
            </article>

            <article class="field">
                <input type="submit" class="btn" name="submit" value="Update" required>
            </article>
        </form>
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