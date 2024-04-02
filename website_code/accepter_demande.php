<?php
require_once "connect/DataBase.php";
$sqlState = $connection->prepare('SELECT * FROM demande WHERE event_id=?');
    $id = $_GET['id'];
    $sqlState->execute([$id]);

    $evt = $sqlState->fetch(PDO::FETCH_ASSOC);

    $sqlState = $connection->prepare('INSERT INTO event VALUES (null,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
    $sqlState->execute([$evt['n_event'],$evt['description'],$evt['image'],$evt['event_time'],$evt['event_date'],$evt['event_duration'],$evt['P_tickts'],$evt['$N_tickts'],$evt['city'],$evt['zip'],$evt['gategorie'],$evt['event_id'],$evt['adress1'],$evt['adress2']]);

$sqlstate=$connection->prepare('DELETE FROM demande WHERE event_id=?');
$deletee=$sqlstate->execute([$id]);
                header('location: Events.php');