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
            new Response($this->__db_conn_message, HttpStatusCodes::HTTP_500_INTERNAL_SERVER_ERROR);
            exit;
        }
    }

    public function execute_sql(string $query, array $parameters = [], bool $fetch_data = false) {
        $stmt = $this->conn->prepare($query);
        $stmt->execute($parameters);
        if ($fetch_data) {
            // If it's an INSERT, return the inserted ID
            if (stripos(trim($query), 'insert') === 0) {
                return $this->conn->lastInsertId();
            }
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return true;
    }
}

class Validator {
    public function allNotNull(array $arr): bool {
        return array_reduce($arr, function ($carry, $v) {
            return $carry && !is_null($v);
        }, true);
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

class HttpStatusCodes {
    // 1×× Informational
    public const HTTP_100_CONTINUE = 100;
    public const HTTP_101_SWITCHING_PROTOCOLS = 101;
    public const HTTP_102_PROCESSING = 102;
    public const HTTP_103_EARLY_HINTS = 103;
    // 2×× Success
    public const HTTP_200_OK = 200;
    public const HTTP_201_CREATED = 201;
    public const HTTP_202_ACCEPTED = 202;
    public const HTTP_203_NON_AUTHORITATIVE_INFORMATION = 203;
    public const HTTP_204_NO_CONTENT = 204;
    public const HTTP_205_RESET_CONTENT = 205;
    public const HTTP_206_PARTIAL_CONTENT = 206;
    public const HTTP_207_MULTI_STATUS = 207;
    public const HTTP_208_ALREADY_REPORTED = 208;
    public const HTTP_226_IM_USED = 226;
    // 3×× Redirection
    public const HTTP_300_MULTIPLE_CHOICES = 300;
    public const HTTP_301_MOVED_PERMANENTLY = 301;
    public const HTTP_302_FOUND = 302;
    public const HTTP_303_SEE_OTHER = 303;
    public const HTTP_304_NOT_MODIFIED = 304;
    public const HTTP_305_USE_PROXY = 305;
    public const HTTP_307_TEMPORARY_REDIRECT = 307;
    public const HTTP_308_PERMANENT_REDIRECT = 308;
    // 4×× Client Error
    public const HTTP_400_BAD_REQUEST = 400;
    public const HTTP_401_UNAUTHORIZED = 401;
    public const HTTP_402_PAYMENT_REQUIRED = 402;
    public const HTTP_403_FORBIDDEN = 403;
    public const HTTP_404_NOT_FOUND = 404;
    public const HTTP_405_METHOD_NOT_ALLOWED = 405;
    public const HTTP_406_NOT_ACCEPTABLE = 406;
    public const HTTP_407_PROXY_AUTHENTICATION_REQUIRED = 407;
    public const HTTP_408_REQUEST_TIMEOUT = 408;
    public const HTTP_409_CONFLICT = 409;
    public const HTTP_410_GONE = 410;
    public const HTTP_411_LENGTH_REQUIRED = 411;
    public const HTTP_412_PRECONDITION_FAILED = 412;
    public const HTTP_413_PAYLOAD_TOO_LARGE = 413;
    public const HTTP_414_REQUEST_URI_TOO_LONG = 414;
    public const HTTP_415_UNSUPPORTED_MEDIA_TYPE = 415;
    public const HTTP_416_REQUESTED_RANGE_NOT_SATISFIABLE = 416;
    public const HTTP_417_EXPECTATION_FAILED = 417;
    public const HTTP_418_IM_A_TEAPOT = 418;
    public const HTTP_421_MISDIRECTED_REQUEST = 421;
    public const HTTP_422_UNPROCESSABLE_ENTITY = 422;
    public const HTTP_423_LOCKED = 423;
    public const HTTP_424_FAILED_DEPENDENCY = 424;
    public const HTTP_425_TOO_EARLY = 425;
    public const HTTP_426_UPGRADE_REQUIRED = 426;
    public const HTTP_428_PRECONDITION_REQUIRED = 428;
    public const HTTP_429_TOO_MANY_REQUESTS = 429;
    public const HTTP_431_REQUEST_HEADER_FIELDS_TOO_LARGE = 431;
    public const HTTP_444_CONNECTION_CLOSED_WITHOUT_RESPONSE = 444;
    public const HTTP_451_UNAVAILABLE_FOR_LEGAL_REASONS = 451;
    public const HTTP_499_CLIENT_CLOSED_REQUEST = 499;
    // 5×× Server Error
    public const HTTP_500_INTERNAL_SERVER_ERROR = 500;
    public const HTTP_501_NOT_IMPLEMENTED = 501;
    public const HTTP_502_BAD_GATEWAY = 502;
    public const HTTP_503_SERVICE_UNAVAILABLE = 503;
    public const HTTP_504_GATEWAY_TIMEOUT = 504;
    public const HTTP_505_HTTP_VERSION_NOT_SUPPORTED = 505;
    public const HTTP_506_VARIANT_ALSO_NEGOTIATES = 506;
    public const HTTP_507_INSUFFICIENT_STORAGE = 507;
    public const HTTP_508_LOOP_DETECTED = 508;
    public const HTTP_510_NOT_EXTENDED = 510;
    public const HTTP_511_NETWORK_AUTHENTICATION_REQUIRED = 511;
    public const HTTP_599_NETWORK_CONNECT_TIMEOUT_ERROR = 599;
}

?>