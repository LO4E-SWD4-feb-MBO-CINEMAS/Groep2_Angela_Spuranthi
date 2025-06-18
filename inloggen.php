<?php
require_once 'Classes/User.php';
session_start();

$error = '';
$success = '';

if (isset($_POST['submit'])) {
    try {
        $user = new User();
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        if (empty($username) || empty($password)) {
            throw new Exception("ALLE velden moeten worden ingevuld.");
        }

        $loggedInUser = $user->login($username, $password);

        if ($loggedInUser) {
            $_SESSION['user_id'] = $loggedInUser['id'];
            $_SESSION['username'] = $loggedInUser['username'];
            $_SESSION['email'] = $loggedInUser['email'];
            $_SESSION['logged_in'] = true;
            
            header('Location: medewerker.php');
            exit();
        } else {
            $error = "Ongeldige inloggegevens.(ᗒᗣᗕ)՞ Probeer het opnieuw.";
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
    <title>Inloggen medewerkers</title>
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
        <p>Inloggen</p>

        <?php if ($error): ?>
            <div class="error-message">
                <?php echo htmlspecialchars($error); ?>
            </div>
        <?php endif; ?>
        <?php if ($success): ?>
            <div class="success-message">
                <?php echo htmlspecialchars($success); ?>
            </div>
        <?php endif; ?>
        
        <form action="" method="post">
            <article class="field input">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" autocomplete="off" required>
            </article>

            <article class="field input">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" autocomplete="off" required>
            </article>

            <article class="field">
                <input type="submit" class="btn" name="submit" value="Login" required>
            </article>

            <article class="links">
                Heb je nog geen account? <a href="register.php"> Registreer nu!</a>
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