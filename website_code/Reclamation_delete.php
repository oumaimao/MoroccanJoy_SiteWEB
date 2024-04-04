<?php
require_once "connect/DataBase.php";

$sqlState = $connection->prepare('SELECT * FROM reclamation WHERE Reclammation_id=?');
$id = $_GET['id'];
$sqlState->execute([$id]);

$reclamatt = $sqlState->fetch(PDO::FETCH_ASSOC);

$sqlState = $connection->prepare('INSERT INTO reclamation_archive VALUES (null,?,?,?,?,?)');
$sqlState->execute([$reclamatt['Contact_Name'],$reclamatt['Email'],$reclamatt['Subject'],$reclamatt['Description'],$reclamatt['User_id']]);

$sqlstate=$connection->prepare('DELETE FROM `reclamation` WHERE Reclammation_id=?');
$deletee=$sqlstate->execute([$id]);
header('location:reclamation.php');
?>