<!-- Spuranthi-->
<?php
require_once 'auth_check.php';
require_once 'Classes/User.php';
session_start();
requireLogin();

$currentUser = getCurrentUser();
$user = new User();
$userData = $user->getUserById($currentUser['id']);

$error = '';
$success = '';

if (!$userData) {
    session_destroy();
    header('Location: inloggen.php');
    exit();
}


if (isset($_POST['submit'])) {
    try {
        $newUsername = $_POST['username'] ?? '';
        $newEmail = $_POST['email'] ?? '';
        $newAge = (int) ($_POST['age'] ?? 0);


        if (empty($newUsername) || empty($newEmail) || $newAge <= 0) {
            throw new Exception("Alle velden zijn verplicht.");
        }
        
        if ($user->updateUser($currentUser['id'], $newUsername, $newEmail, $newAge)) {
            $_SESSION['username'] = $newUsername;
            $_SESSION['email'] = $newEmail;
            $_SESSION['leeftijd'] = $newAge;
            $userData = $user->getUserById($currentUser['id']);
            $success = "Profiel succesvol bijgewerkt!";
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
    <title>Verander profiel</title>
    <meta name="description" content="Op deze pagina kunt u uw profielgegevens bijwerken, zoals uw gebruikersnaam, e-mailadres en leeftijd.">
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

        <?php if ($error): ?>
            <article class="error-message">
                <?php echo htmlspecialchars($error); ?>
        </article>
        <?php endif; ?>

        <?php if ($success): ?>
            <article class="success-message">
                <?php echo htmlspecialchars($success); ?>
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