<?php 
<<<<<<< HEAD
$dsn = 'mysql:host=localhost:3306;dbname=evente_4';
=======
$dsn = 'mysql:host=localhost;dbname=evente_4';
>>>>>>> d4a8ea6f4de4804105194e848c3a2ef0472541f8
$username = 'root'; 
$password = ''; 
try { 
    $connection = new PDO($dsn, $username, $password); 
} 
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


?>
