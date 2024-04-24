<?php 
$dsn = 'mysql:host=localhost:3307;dbname=evente_4';
$username = 'root'; 
$password = 'root'; 
try { 
    $connection = new PDO($dsn, $username, $password); 
} 
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


?>
