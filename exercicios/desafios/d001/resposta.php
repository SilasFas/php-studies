<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta backend</title>
</head>

<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php
            $numero = $_REQUEST["numero"];
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;

            echo "O antecessor de $numero é . $antecessor e o $numero " 


            ?>

        </p>
    </main>
</body>

</html>