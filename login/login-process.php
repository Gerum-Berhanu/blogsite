<?php
session_start();
require_once "../scripts/classes.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    new Response(status: HttpStatusCodes::HTTP_405_METHOD_NOT_ALLOWED);
    header("Location: /login/");
    exit;
}

$db = new Database();

$email = $_POST["email-field"];
$password = $_POST["password-field"];

if (!(new Validator())->allNotNull([$email, $password])) {
    new Response("Please fill in all the required fields.", HttpStatusCodes::HTTP_400_BAD_REQUEST);
    exit;
}

$resp = $db->execute_sql("SELECT id, password FROM users WHERE email = ?", [$email], true);
if (empty($resp)) {
    new Response("User does not exist.", HttpStatusCodes::HTTP_404_NOT_FOUND);
    exit;
}

$stored_id = $resp[0]["id"];
$stored_password = $resp[0]["password"];
$verified_password = password_verify($password, $stored_password);

if (!$verified_password) {
    new Response("Incorrect password.", HttpStatusCodes::HTTP_401_UNAUTHORIZED);
    exit;
}

$_SESSION["user_id"] = $stored_id;
new Response($verified_password);
