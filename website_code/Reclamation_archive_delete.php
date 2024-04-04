<?php
require_once "connect/DataBase.php";
$id = $_GET['id'];

$sqlstate=$connection->prepare('DELETE FROM `reclamation_archive` WHERE Reclammation_id=?');
$deletee=$sqlstate->execute([$id]);
header('location:Reclamation_archive.php');
?>