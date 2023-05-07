<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <?php
        $valor = $_GET["valor"] ?? 0;
        $valorEmDolar = $valor * 4.95;
        number_format("$valorEmDolar", 4);
        echo "Seus R$ $valor equivalem a US$ $valorEmDolar";
        ?>

        <p></p>
        <button onclick="document.location.href='index.html'">Voltar</button>
    </main>
</body>

</html>