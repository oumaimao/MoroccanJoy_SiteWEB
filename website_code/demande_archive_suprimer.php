<?php
require_once "connect/DataBase.php";
$id = $_GET['id'];

$sqlstate=$connection->prepare('DELETE FROM `archive_demande` WHERE event_id=?');
$deletee=$sqlstate->execute([$id]);
header('location:Archive.php');
?>