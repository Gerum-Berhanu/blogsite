<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/includes/auth.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/scripts/classes.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    new Response(status: HttpStatusCodes::HTTP_405_METHOD_NOT_ALLOWED);
    header("Location: /signup/");
    exit;
}

$db = new Database();

$title = $_POST["title-field"];
$subject = $_POST["subject-field"];
$file = $_FILES["file-field"];

if (!(new Validator())->allNotNull([$title, $subject, $file]) || !$file["size"]) {
    new Response("Please fill in all the required fields.", HttpStatusCodes::HTTP_400_BAD_REQUEST);
    exit;
}

// Validate file type and size
$maxFileSize = 40 * 1024 * 1024; // 40MB in bytes
$allowedMimeTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];

if ($file['error'] !== UPLOAD_ERR_OK) {
    new Response("File upload error.", HttpStatusCodes::HTTP_400_BAD_REQUEST);
    exit;
}

if ($file['size'] > $maxFileSize) {
    new Response("File size exceeds 40MB limit.", HttpStatusCodes::HTTP_400_BAD_REQUEST);
    exit;
}

$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mimeType = finfo_file($finfo, $file['tmp_name']);
finfo_close($finfo);

if (!in_array($mimeType, $allowedMimeTypes)) {
    new Response("Invalid image type.", HttpStatusCodes::HTTP_400_BAD_REQUEST);
    exit;
}

// Generate a unique filename and save the file
$uploadDir = $_SERVER["DOCUMENT_ROOT"] . "/files/uploads/blog-images/";
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0755, true);
}
$extension = pathinfo($file['name'], PATHINFO_EXTENSION);
$uniqueName = uniqid('img_', true) . '.' . $extension;
$destination = $uploadDir . $uniqueName;

if (!move_uploaded_file($file['tmp_name'], $destination)) {
    new Response("Failed to save the uploaded file.", HttpStatusCodes::HTTP_500_INTERNAL_SERVER_ERROR);
    exit;
}

// Optionally, store $uniqueName or the file path in the database as needed
$db->execute_sql("INSERT INTO blogs (title, text_content, file_location, author_id) VALUES (?, ?, ?, ?);", [$title, $subject, $uniqueName, $_SESSION["user_id"]]);
new Response(1, HttpStatusCodes::HTTP_201_CREATED);
?>