<?php
require_once 'unidades.php';

function criar_exercito($tipo_unidades)
{
    $exercito = [];
    foreach ($tipo_unidades as $tipo => $quantidade) {
        for ($i = 0; $i < $quantidade; $i++) {
            if ($tipo == "Cavalaria") {
                $exercito[] = new Cavalaria("Cavalaria", rand(1, 100), rand(1, 100));
            } elseif ($tipo == "Piqueiro") {
                $exercito[] = new Piqueiro("Piqueiro", rand(1, 100), rand(1, 100));
            } elseif ($tipo == "Arqueiro") {
                $exercito[] = new Arqueiro("Arqueiro", rand(1, 100), rand(1, 100));
            }
        }
    }
    return $exercito;
}

function batalhar($exercito1, $exercito2)
{
    while (!empty($exercito1) && !empty($exercito2)) {
        $unidade1 = $exercito1[array_rand($exercito1)];
        $unidade2 = $exercito2[array_rand($exercito2)];

        if ($unidade1->atacar($unidade2)) {
            $key = array_search($unidade2, $exercito2);
            unset($exercito2[$key]);
        } else {
            $key = array_search($unidade1, $exercito1);
            unset($exercito1[$key]);
        }
    }

    if (!empty($exercito1)) {
        echo "Exército 1 venceu!";
    } else {
        echo "Exército 2 venceu!";
    }
}

function empate($exercito1, $exercito2)
{
    if (count($exercito1) == 2 && count($exercito2) == 2) {
        $tipo_unidade_exercito1 = get_class($exercito1[0]);
        $tipo_unidade_exercito2 = get_class($exercito2[0]);
        if ($tipo_unidade_exercito1 == $tipo_unidade_exercito2) {
            return true;
        }
    }
    return false;
}
