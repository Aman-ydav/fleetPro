<?php
// Database configuration
define('DB_HOST', 'sql305.infinityfree.com');
define('DB_USER', 'if0_38636542');          
define('DB_PASS', 'FleetPro923');          
define('DB_NAME', 'if0_38636542_fleetapp'); 

// Create connection
try {
    $pdo = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>
