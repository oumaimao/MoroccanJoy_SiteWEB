<?php
require_once "connect/DataBase.php";
$id=$_GET['id'];

$sqlstate=$connection->prepare('DELETE FROM contact_us WHERE contact_id=?');
$deletee=$sqlstate->execute([$id]);
header('location:Contact.php');
?>