<?php

require_once "./http-status-codes.php";

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
            new Response($this->__db_conn_message, HttpStatusCodes::HTTP_500_INTERNAL_SERVER_ERROR);
            exit;
        }
    }

    public function execute_sql(string $query, array $parameters = [], bool $fetch_json = false) {
        $stmt = $this->conn->prepare($query);
        $stmt->execute($parameters);
        if ($fetch_json) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return true;
    }
}

class Response {
    public array $response;
    public function __construct(string|array $data = "", string $status = HttpStatusCodes::HTTP_200_OK) {
        if (!empty($data)) {
            $this->response["data"] = $data;
        }
        $this->response["status"] = $status;

        http_response_code((int) $status);
        header("Content-Type: application/json");
        $this->send();
    }

    public function send() {
        echo json_encode($this->response);
    }
}

?>