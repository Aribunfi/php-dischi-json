<?php 
//prende i dati da database
$data = file_get_contents(__DIR__ . "/../data/discs.json");
//il server specifica che il valore di ritorno sarà un json
header("Content-Type: application/json");
//restituisco i dati
return json_encode($data);
