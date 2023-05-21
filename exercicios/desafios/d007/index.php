<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe seu salário</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <?php
        $salario = $_REQUEST['salario'] ?? 1380;
        // $restante = $salario % 1380;
        // $salarios_inteiros = ($salario - $restante) / 1380;
        $salarios_inteiros = intdiv($salario, 1380);
        $restante  = $salario % 1380;

        ?>
        <h1>Informe seu salário</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" value="" min="1" step="0.01"> <?php $salario ?>

            <p>Considerando o salário mínimo de <strong>R$ 1.380,00</strong></p>

            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <?php
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "<p>Quém recebe um salário de " . numfmt_format_currency($padrao, $salario, "BRL") . " ganha " . "<strong>" . $salarios_inteiros . " salários mínimos </strong> + " . "<strong>" . numfmt_format_currency($padrao, $restante, "BRL") . "</strong>"  . ".</p>";

        // echo "<p>Quém recebe um salário de $salario ganha $salarios_inteiros salários mínimos + $restante.</p>";
        ?>
    </section>
</body>

</html>