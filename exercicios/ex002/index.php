<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        body {
            background-color: black;
            color: white;
        }
    </style>
</head>

<body>
    <h1>Exemplo de PHP</h1>
    <?
    date_default_timezone_set("America/Sao_Paulo"); // set the time zone to SP
    echo "Hoje é: " . date("D/d/M/Y"); // date
    echo " e a hora atual é " . date("G:i:s T"); // hour
    ?>
</body>

</html>