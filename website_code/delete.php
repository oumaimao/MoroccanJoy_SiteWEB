<?php
require_once "connect/DataBase.php";
$id=$_GET['id'];

$sqlstate=$connection->prepare('DELETE FROM user WHERE User_id=?');
$deletee=$sqlstate->execute([$id]);
header('location:Utilisateur.php');