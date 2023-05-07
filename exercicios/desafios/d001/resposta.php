<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta backend</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php
            $numero = $_REQUEST["numero"] ?? 0;
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;

            echo "<p> O antecessor de  $numero é $antecessor e o sucessor de $numero é $sucessor</p>";

            echo "O número escolhido foi: <strong>$numero</strong>";
            echo "<br> O seu antecessor é $antecessor";
            echo "<br> O seu sucessor é $sucessor"
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05; Voltar</button>
    </main>
</body>

</html>