<?php
require_once 'Database.php';

class User extends Database {

    public function register($username, $email, $age, $password) {
        try {

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO users (username, email, leeftijd, password)
                    VALUES (:username, :email, :leeftijd, :password)";
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute([
                ':username' => $username,
                ':email' => $email,
                ':leeftijd' => $age,
                ':password' => $hashedPassword
            ]);

            return true;

        } catch (PDOException $e) {

            error_log("Registratie mislukt: " . $e->getMessage());
            return false;
        }
    }

    public function login($username, $password) {
        try {
            $sql = "SELECT * FROM users WHERE username = :username";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([':username' => $username]);
            $user = $stmt->fetch();

            if ($user && password_verify($password, $user['password'])) {
                return $user;
            }
            return false;

        } catch (PDOException $e) {
            error_log("Login mislukt: " . $e->getMessage());
            return false;
        }
    }
}
?>
