<?php 
$dsn = 'mysql:host=localhost:3307;dbname=evente';
$username = 'root'; 
$password = 'root'; 
try { 
    $connection = new PDO($dsn, $username, $password); 
} 
catch(PDOException$e) {
    echo "errer";
 };


?>
