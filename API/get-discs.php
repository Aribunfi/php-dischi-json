<?php
$lista = file_get_contents(__DIR__ . '/../data/discs.json');
$lista_decoded = json_decode($lista);

header('Content-Type: application/json; charset=utf-8');
echo json_encode($lista_decoded);
?>
