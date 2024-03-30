<?php
require_once "connect/DataBase.php";
$id=$_GET['id'];

$sqlstate=$connection->prepare('DELETE FROM reservation WHERE Reservation_id=?');
$deletee=$sqlstate->execute([$id]);
header('location:Resirvation.php');