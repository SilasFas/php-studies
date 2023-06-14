<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletronico</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 50px;
            margin: 5px;
        }
    </style>
</head>

<body>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="money">Qual o valor que você deseja sacar? (R$)</label>
            <input type="number" name="money" required step="5">
            <p style="font-size: 0.7em;">Notas disponíveis R$100, R$50 R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <?php
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        $money = $_GET['money'] ?? 0;

        if (empty($money)) {
            $money = 0;
        }

        $hundred = $money / 100;
        $letftover1 = $money % 100;

        $fifty = $letftover1 / 50;
        $letftover2 = $letftover1 % 50;

        $ten = $letftover2 / 10;
        $letftover3 = $letftover2 % 10;

        $five = $letftover3 / 5;

        ?>
        <h2> Saque de <?php echo numfmt_format_currency($padrao, $money, "BRL") ?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas: </p>

        <ul>
            <li><img src="images/100-reais.jpg" alt="100" class="nota"> x <?php echo (int) $hundred ?></li>
            <li><img src="images/50-reais.jpg" alt="50" class="nota"> x <?php echo (int) $fifty ?></li>
            <li><img src="images/10-reais.jpg" alt="10" class="nota"> x <?php echo (int) $ten ?></li>
            <li><img src="images/5-reais.jpg" alt="5" class="nota"> x <?php echo (int) $five ?> </li>
        </ul>
    </section>
</body>

</html>