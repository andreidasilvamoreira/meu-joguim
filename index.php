<?php
require_once 'Unidade.php';
require_once 'Simulador.php';

$simulador = new Simulador();
$exercito1 = $simulador->criar_exercito(
    [
        "Cavalaria" => 1,
        "Piqueiro" => 1,
        "Arqueiro" => 1
    ]
);

$exercito2 = $simulador->criar_exercito(
    [
        "Cavalaria" => 1,
        "Piqueiro" => 1,
        "Arqueiro" => 1
    ]
);

$simulador->batalhar($exercito1, $exercito2);
