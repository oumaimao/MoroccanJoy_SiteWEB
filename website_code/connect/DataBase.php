<?php 
$dsn = 'mysql:host=localhost;dbname=evente_yassine';
$username = 'root'; 
$password = ''; 
try { 
    $connection = new PDO($dsn, $username, $password); 
} 
catch(PDOException$e) {
    echo "errer";
 };


?>
