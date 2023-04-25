<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e constantes</title>
    <style>
        body {
            background-color: black;
            color: white;
        }
    </style>
</head>

<body>
    <?php
    $nome = "Silas";
    $sobrenome = "Santos";
    const PAIS = "Brasil";

    echo "Muito prazer, $nome $sobrenome! Você mora no " . PAIS;
    ?>
</body>

</html>