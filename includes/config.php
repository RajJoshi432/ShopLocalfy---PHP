<?php
// includes/config.php
// Database connection and global config

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'shoplocalfy');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die('Database connection failed: ' . $conn->connect_error);
}

define('SITE_NAME', 'ShopLocalfy');
define('ADMIN_EMAIL', 'admin@shoplocalfy.com');
?>