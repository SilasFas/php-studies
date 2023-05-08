<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de número real</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Analisador de número real</h1>
            <?php
                $numeroReal = $_REQUEST["numero"] ?? 0;


                //$parte_inteira = (int) $numeroReal;
                //$parte_decimal =  $numeroReal - //$parte_inteira;
                $parte_inteira = intval($numeroReal);
                $parte_decimal = fmod($numeroReal, 1.0);

                echo "Analisando o número " . "<strong>" . number_format($numeroReal, 4, ",", ".")  . "</strong>" . " informado pelo usuário:";

                echo "<ul><li>A parte inteira é:" . "<strong>" . number_format($parte_inteira, 0, ",", ".")  . "</strong></li>";

                echo "<li>A parte inteira é:" . "<strong>" . number_format($parte_decimal, 4, ",", ".") . "</strong></li></ul>";
            ?>
            <button onclick="javascript:history.go(-1)"> Voltar </button>
        <strong>
    </main></strong>
</body>

</html>