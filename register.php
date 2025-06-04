<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registreren medewerkers</title>
    <meta name="description" content="Inloggen als medewerker kan op deze pagina! Ook als je nieuw bent kan je een account aanmaken">
    <meta name="author" content="Spuranthi Srirangam">
    <link rel="stylesheet" href="CSS/Style.css">
</head>

<header>
    <?php include("header2.php");?>
</header>

<body>
<main>
    <article class="container">
      <article class="box form-box">
        <p>Aanmelden</p>
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

            <article class="field input">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" autocomplete="off" required>
            </article>

            <article class="field">
                <input type="submit" class="btn" name="submit" value="Login" required>
            </article>

            <article class="links">
                Heb je al een account?<a href="inloggen.php"> Log in!</a>
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