<?php
require_once 'Classes/User.php';

$error = '';
$success = '';

if (isset($_POST['submit'])) {
    try {
        $user = new User();
        $username = $_POST['username'] ?? '';
        $email = $_POST['email'] ?? '';
        $age = (int) ($_POST['age'] ?? 0);
        $password = $_POST['password'] ?? '';
        $password = password_hash($password, PASSWORD_DEFAULT);

        if (empty($username) || empty($email) || empty($password) || $age <= 0) {
            throw new Exception("Alle velden zijn verplicht.");
        }

        if ($user->register($username, $email, $age, $password)) {
            $success = "Registratie succesvol! ᕕ(ᐛ)ᕗ Je kunt nu inloggen.";
            $_POST = [];
        }
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registreren medewerkers</title>
    <meta name="description" content="registreer als medewerker om toegang te krijgen tot de medewerkersfunctionaliteiten van MBOcinema.">
    <meta name="keywords" content="MBOcinema, registratie, medewerkers, films, bioscopen">
    <meta name="author" content="Spuranthi Srirangam">
    <link rel="stylesheet" href="CSS/Style.css">
</head>

<header>
    <?php include("header2.php");?>
</header>

<body>
<main>
    <p></P>
    <article class="container">
      <article class="box form-box">
        <p>Registreren</p>

        <?php if ($error): ?>
            <article class="error-message">
                <?php echo htmlspecialchars($error); ?>
        </article>
        <?php endif; ?>
        <?php if ($success): ?>
            <article class="success-message">
                <?php echo htmlspecialchars($success); ?>
                <br><a href="inloggen.php">Klik hier om in te loggen</a>
        </article>
        <?php endif; ?>


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