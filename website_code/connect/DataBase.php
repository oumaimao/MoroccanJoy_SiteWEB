<?php 
$dsn = 'mysql:host=localhost;dbname=event';
$username = 'root'; 
$password = ''; 
try { 
    $connection = new PDO($dsn, $username, $password); 
} 
catch(PDOException$e) {
    echo "errer";
 };


?>
