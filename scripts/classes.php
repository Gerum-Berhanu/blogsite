<?php

class Database {
    private $conn;
    public $__db_conn_ok = false;
    public $__db_conn_message = "";

    public function __construct() {
        $DB_HOST = "127.0.0.1:3307";
        $DB_NAME = "blogsite";
        $DB_USER = "root";
        $DB_PASSWORD = "";

        try {
            $this->conn = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASSWORD);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->__db_conn_ok = true;
        } catch(PDOException $e) {
            $this->__db_conn_message = "Connection failed: " . $e->getMessage();
            $this->__db_conn_ok = false;
        }
    }

    public function execute_sql(string $query, array $parameters = [], bool $fetch_json = false) {
        $stmt = $this->conn->prepare($query);
        $stmt->execute($parameters);
        if ($fetch_json) {
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $rows;
        }
        return true;
    }
}

?>