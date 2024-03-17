<?php
require_once 'Unidade.php';
require_once 'Piqueiro.php';
require_once 'Arqueiro.php';
require_once 'Cavalaria.php';


function criar_exercito($tipo_unidades)
{
    $exercito = [];
    foreach ($tipo_unidades as $tipo => $quantidade) {
        for ($i = 0; $i < $quantidade; $i++) {
            if ($tipo == "Cavalaria") {
                $exercito[] = new Cavalaria(
                    100,
                    rand(1, 100),
                    rand(1, 100),
                );
            }

            if ($tipo == "Piqueiro") {
                $exercito[] = new Piqueiro(
                    100,
                    rand(1, 100),
                    rand(1, 100)
                );
            }

            if ($tipo == "Arqueiro") {
                $exercito[] = new Arqueiro(
                    100,
                    rand(1, 100),
                    rand(1, 100)
                );
            }
        }
    }

    return $exercito;
}

function batalhar($exercito1, $exercito2)
{
    if (!empty($exercito1) && !empty($exercito2)) {
        while ($exercito1 && $exercito2) {
            $unidade1 = $exercito1[array_rand($exercito1)];
            $unidade2 = $exercito2[array_rand($exercito2)];

            if (get_class($unidade1) == get_class($unidade2)) {
                $key1 = array_search($unidade1, $exercito1);
                $key2 = array_search($unidade2, $exercito2);
                unset($exercito1[$key1]);
                unset($exercito2[$key2]);
            }

            if ($unidade1->vencerContra($unidade2)) {
                $key = array_search($unidade2, $exercito2);
                unset($exercito2[$key]);
            } else {
                $key = array_search($unidade1, $exercito1);
                unset($exercito1[$key]);
            }
        }

        resultadoBatalha($exercito1, $exercito2);
    } else {
        echo "Precisa existir unidades no exercito!";
    }
}

function empate($exercito1, $exercito2)
{
    if (empty($exercito1) && empty($exercito2)) {
        return true;
    } else {
        return false;
    }
}

function resultadoBatalha($exercito1, $exercito2)
{
    if (empate($exercito1, $exercito2)) {
        echo "A batalha terminou em empate!";
        return;
    }

    if (!empty($exercito1)) {
        echo "Exército 1 venceu!";
    }

    if (!empty($exercito2)) {
        echo "Exército 2 venceu!";
    }
}
