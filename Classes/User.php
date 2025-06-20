<!-- Spuranthi -->

<?php
require_once 'Database.php';

class User extends Database {
    private $tableName = 'users';

    public function __construct() {
        parent::__construct();
    }

    public function validateData($data) {
        $errors = [];
        
        if (empty($data['username']) || strlen($data['username']) < 3) {
            $errors[] = "Username moet minimaal 3 karakters lang zijn.";
        }
        
        if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Ongeldig email adres.";
        }
        
        if (isset($data['age']) && ($data['age'] < 16 || $data['age'] > 100)) {
            $errors[] = "Leeftijd moet tussen 16 en 100 jaar zijn.";
        }
        
        if (isset($data['password']) && strlen($data['password']) < 6) {
            $errors[] = "Wachtwoord moet minimaal 6 karakters lang zijn.";
        }
        
        return $errors;
    }

    public function register($username, $email, $age, $password) {
        try {
            //TEGEN XSS en SQL injectie preventie
            $username = $this->sanitizeInput($username);
            $email = $this->sanitizeInput($email);
            $age = (int) $age;

            $validationErrors = $this->validateData([
                'username' => $username,
                'email' => $email,
                'age' => $age,
                'password' => $password
            ]);

            if (!empty($validationErrors)) {
                throw new Exception(implode(', ', $validationErrors));
            }

            if ($this->userExists($username)) {
                throw new Exception("Username bestaat al.");
            }

            if ($this->emailExists($email)) {
                throw new Exception("Email adres is al in gebruik.");
            }

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);


            $sql = "INSERT INTO {$this->tableName} (username, email, leeftijd, password, created_at) 
                    VALUES (:username, :email, :leeftijd, :password, NOW())";
            $stmt = $this->pdo->prepare($sql);

            $result = $stmt->execute([
                ':username' => $username,
                ':email' => $email,
                ':leeftijd' => $age,
                ':password' => $hashedPassword
            ]);

            return $result;

        } catch (Exception $e) {
            error_log("Registratie fout: " . $e->getMessage());
            throw new Exception("Registratie mislukt: " . $e->getMessage());
        } catch (PDOException $e) {
            error_log("Database fout tijdens registratie: " . $e->getMessage());
            throw new Exception("Er is een probleem opgetreden. Probeer het later opnieuw.");
        }
    }

    public function login($username, $password) {
        try {
            $username = $this->sanitizeInput($username);

            $sql = "SELECT * FROM {$this->tableName} WHERE username = :username";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([':username' => $username]);
            
            $user = $stmt->fetch();

            if ($user && password_verify($password, $user['password'])) {
                $this->updateLastLogin($user['id']);  
                unset($user['password']);
                return $user;
            }
            return false;

        } catch (PDOException $e) {
            error_log("Login fout: " . $e->getMessage());
            return false;
        }
    }

    public function getUserById($id) {
        try {
            $sql = "SELECT id, username, email, leeftijd, created_at FROM {$this->tableName} WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([':id' => $id]);
            
            return $stmt->fetch();
        } catch (PDOException $e) {
            error_log("Fout bij ophalen gebruiker: " . $e->getMessage());
            return false;
        }
    }

    private function userExists($username) {
        try {
            $sql = "SELECT COUNT(*) FROM {$this->tableName} WHERE username = :username";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([':username' => $username]);
            
            return $stmt->fetchColumn() > 0;
        } catch (PDOException $e) {
            error_log("Fout bij controleren username: " . $e->getMessage());
            return false;
        }
    }

    private function emailExists($email) {
        try {
            $sql = "SELECT COUNT(*) FROM {$this->tableName} WHERE email = :email";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([':email' => $email]);
            
            return $stmt->fetchColumn() > 0;
        } catch (PDOException $e) {
            error_log("Fout bij controleren email: " . $e->getMessage());
            return false;
        }
    }

    private function updateLastLogin($userId) {
        try {
            $sql = "UPDATE {$this->tableName} SET last_login = NOW() WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([':id' => $userId]);
        } catch (PDOException $e) {
            error_log("Fout bij updaten last login: " . $e->getMessage());
        }
    }

    public function updateUser($userId, $username, $email, $age) {
        try {
            $username = $this->sanitizeInput($username);
            $email = $this->sanitizeInput($email);
            $age = (int) $age;

            $validationErrors = $this->validateData([
                'username' => $username,
                'email' => $email,
                'age' => $age
            ]);

            if (!empty($validationErrors)) {
                throw new Exception(implode(', ', $validationErrors));
            }

            if ($this->usernameExistsForOtherUser($username, $userId)) {
                throw new Exception("Username is al in gebruik door een andere gebruiker.");
            }

            if ($this->emailExistsForOtherUser($email, $userId)) {
                throw new Exception("Email adres is al in gebruik door een andere gebruiker.");
            }

            $sql = "UPDATE {$this->tableName} 
                    SET username = :username, email = :email, leeftijd = :leeftijd 
                    WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);

            return $stmt->execute([
                ':username' => $username,
                ':email' => $email,
                ':leeftijd' => $age,
                ':id' => $userId
            ]);

        } catch (Exception $e) {
            error_log("Update fout: " . $e->getMessage());
            throw new Exception("Profiel bijwerken mislukt: " . $e->getMessage());
        } catch (PDOException $e) {
            error_log("Database fout tijdens update: " . $e->getMessage());
            throw new Exception("Er is een probleem opgetreden. Probeer het later opnieuw.");
        }
    }

    private function usernameExistsForOtherUser($username, $currentUserId) {
        try {
            $sql = "SELECT COUNT(*) FROM {$this->tableName} WHERE username = :username AND id != :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([':username' => $username, ':id' => $currentUserId]);
            
            return $stmt->fetchColumn() > 0;
        } catch (PDOException $e) {
            error_log("Fout bij controleren username: " . $e->getMessage());
            return false;
        }
    }

    private function emailExistsForOtherUser($email, $currentUserId) {
        try {
            $sql = "SELECT COUNT(*) FROM {$this->tableName} WHERE email = :email AND id != :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([':email' => $email, ':id' => $currentUserId]);
            
            return $stmt->fetchColumn() > 0;
        } catch (PDOException $e) {
            error_log("Fout bij controleren email: " . $e->getMessage());
            return false;
        }
    }
}

?>