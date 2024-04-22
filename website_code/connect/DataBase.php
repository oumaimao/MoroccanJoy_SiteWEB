<?php 
$dsn = 'mysql:host=localhost:3306;dbname=evente_4';
$username = 'root'; 
$password = ''; 
try { 
    $connection = new PDO($dsn, $username, $password); 
} 
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


?>
