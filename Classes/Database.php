<!-- Author: Spuranthi -->

<?php
abstract class Database {
    protected $pdo;
    protected $host = 'localhost';
    protected $dbname = 'mbo_cinema';
    protected $username = 'root';
    protected $password = '';
    protected $charset = 'utf8mb4';

    public function __construct() {
        $this->connect();
    }

    protected function connect() {
        $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset={$this->charset}";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        try {
            $this->pdo = new PDO($dsn, $this->username, $this->password, $options);
        } catch (PDOException $e) {
            error_log("Database connection failed: " . $e->getMessage());
            die("Er is een probleem met de database verbinding.");
        }
    }


    abstract public function validateData($data);

    protected function sanitizeInput($input) {
        return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
    }

}