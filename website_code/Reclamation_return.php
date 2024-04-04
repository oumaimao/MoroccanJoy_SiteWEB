<?php
require_once "connect/DataBase.php";
$sqlState = $connection->prepare('SELECT * FROM reclamation_archive WHERE Reclammation_id=?');
$id = $_GET['id'];
$sqlState->execute([$id]);

$reclama = $sqlState->fetch(PDO::FETCH_ASSOC);

$sqlState = $connection->prepare('INSERT INTO reclamation VALUES (null,?,?,?,?,?)');
$sqlState->execute([$reclama['Contact_Name'],$reclama['Email'],$reclama['Subject'],$reclama['Description'],$reclama['User_id']]);

$sqlstate=$connection->prepare('DELETE FROM reclamation_archive WHERE Reclammation_id=?');
$deletee=$sqlstate->execute([$id]);
header('location:Reclamation_archive.php');
?>