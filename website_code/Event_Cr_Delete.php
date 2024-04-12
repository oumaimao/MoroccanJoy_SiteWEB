<?php
require_once "connect/DataBase.php";
$id=$_GET['id'];

$sqlstate=$connection->prepare('DELETE FROM `event` WHERE E_id=?');
$deletee=$sqlstate->execute([$id]);
header('location:my_organisation_dashboard_events.php');
?>