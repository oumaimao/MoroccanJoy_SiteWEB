<?php 
$dsn = 'mysql:host=localhost;dbname=evente_4';
$username = 'root'; 
$password = ''; 
try { 
    $connection = new PDO($dsn, $username, $password); 
} 
catch(PDOException$e) {
    echo "errer";
 };


?>
