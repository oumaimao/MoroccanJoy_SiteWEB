<?php
require_once "connect/DataBase.php";
$id=$_GET['id'];

$sqlstate=$connection->prepare('DELETE FROM adminee WHERE admin_id=?');
$deletee=$sqlstate->execute([$id]);
header('location:Admin.php');
