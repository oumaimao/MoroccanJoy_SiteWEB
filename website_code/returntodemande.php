<?php
require_once "connect/DataBase.php";
$sqlState = $connection->prepare('SELECT * FROM archive_demande WHERE event_id=?');
    $id = $_GET['id'];
    $sqlState->execute([$id]);

    $evt = $sqlState->fetch(PDO::FETCH_ASSOC);

    $sqlState = $connection->prepare('INSERT INTO Demande VALUES (null,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
    $sqlState->execute([$evt['n_event'],$evt['event_date'],$evt['event_time'],$evt['event_duration'],$evt['adress1'],$evt['adress2'],$evt['city'],$evt['city'],$evt['city'],$evt['zip'],$evt['description'],$evt['image'],$evt['gategorie'],$evt['P_tickts'],$evt['N_tickts'], $evt['User_id']]);

$sqlstate=$connection->prepare('DELETE FROM archive_demande WHERE event_id=?');
$deletee=$sqlstate->execute([$id]);
                header('location:Demande.php');