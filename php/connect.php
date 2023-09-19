<?php
$db_server = 'rdbms.strato.de';
$db_user = 'dbu1773897';
$db_password = 'H0ldMyB3er!';
$db_name = 'dbs11571618';

try {
    $conn = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Verbindingsfout: ' . $e->getMessage());
}
?>