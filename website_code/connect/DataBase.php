<?php 
$dsn = 'mysql:host=localhost;dbname=evente_3';
$username = 'root'; 
$password = ''; 
try { 
    $connection = new PDO($dsn, $username, $password); 
} 
catch(PDOException$e) {
    echo "errer";
 };


?>
