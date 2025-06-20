<?php

require_once 'Database.php';

class DatabaseConnection extends Database {
    public function getPDO() {
        return $this->pdo;
    }


    public function validateData($data) {
        return $this->sanitizeInput($data);
    }
}
