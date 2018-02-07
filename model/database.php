<?php
$dsn = 'mysql:host=localhost;dbname=cs602';
$username = 'cs602_user';
$password = 'cs602_secret';

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('database_error.php');
    exit;
}

function display_db_error($error_message) {
    global $app_path;
    include 'errors/db_error.php';
    exit;
}
?>