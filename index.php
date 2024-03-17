<?php
require_once 'Unidade.php';
require_once 'Simulador.php';

$exercito1 = criar_exercito(
    [
        "Cavalaria" => 1,
        "Piqueiro" => 1,
        "Arqueiro" => 1
    ]
);

$exercito2 = criar_exercito(
    [
        "Cavalaria" => 1,
        "Piqueiro" => 1,
        "Arqueiro" => 1
    ]
);

batalhar($exercito1, $exercito2);
