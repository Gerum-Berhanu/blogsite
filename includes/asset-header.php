<?php
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$base_url = $protocol . '://' . $host;
?>

<link href="<?= $base_url ?>/assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
<link href="<?= $base_url ?>/assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
<link href="<?= $base_url ?>/assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
<link href="<?= $base_url ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?= $base_url ?>/assets/css/master.css" rel="stylesheet">
<link href="<?= $base_url ?>/assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">