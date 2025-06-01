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
    <article class="nav">
        <img class="logo" src="Images/MBO-cinema-logo.png" alt="logo mbo cinema's">

        <article class="right-links">
            <a href="#">Verander profiel</a>
            <a href="logout.php"> <button class="btn">Log uit</button> </a>
        </article>

    </article>

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

</body>
</html>