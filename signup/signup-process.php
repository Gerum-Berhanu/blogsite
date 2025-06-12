<?php
session_start();
require_once "../scripts/classes.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    new Response(status: HttpStatusCodes::HTTP_405_METHOD_NOT_ALLOWED);
    header("Location: /signup/");
    exit;
}

$db = new Database();

$full_name = $_POST["full-name-field"];
$email = $_POST["email-field"];
$password = $_POST["password-field"];
$check = $_POST["check-field"];

if ( !(new Validator())->allNotNull([$full_name, $email, $password, $check]) || !$check) {
    new Response("Please fill in all the required fields.", HttpStatusCodes::HTTP_400_BAD_REQUEST);
    exit;
}

$hashed_password = password_hash($password, PASSWORD_ARGON2I);
$user_id = $db->execute_sql("INSERT INTO users (full_name, email, password) VALUES (?, ?, ?);", [$full_name, $email, $hashed_password], true);
$_SESSION["user_id"] = $user_id;

new Response("Account created successfully.");

?>