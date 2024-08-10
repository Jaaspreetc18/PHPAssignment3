<?php
// dbconfig.php

$dsn = 'mysql:host=127.0.0.1;port=3306;dbname=php_assignment3'; // Ensure the host and port are correct
$username = 'root'; // Update with your database username
$password = ''; // Update with your database password

try {
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
