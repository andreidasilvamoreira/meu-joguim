<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simulador</title>
</head>

<body>
    <?php
    require_once 'unidades.php';
    require_once 'simulador.php';

    $exercito1 = criar_exercito(["Cavalaria" => 10, "Piqueiro" => 0, "Arqueiro" => 0]);
    $exercito2 = criar_exercito(["Cavalaria" => 0, "Piqueiro" => 0, "Arqueiro" => 0]);

    batalhar($exercito1, $exercito2);

    if (empate($exercito1, $exercito2)) {
        echo "A batalha terminou em empate!";
    }
    ?>
</body>

</html>