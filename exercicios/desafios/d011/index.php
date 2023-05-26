<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de preços</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $preco = $_GET["preco"] ?? 0;
    $porcentagem = $_GET["porcentagem"] ?? 0;
    $resultado = (($preco * $porcentagem) / 100) + $preco;
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="preco">Preço do Produto(R$)</label>
            <input type="number" name="preco" id="preco" step="0.01" required>

            <label for="porcentagem">Qual será o percentual de reajuste?
                <strong>
                    <output id="change">
                        0
                    </output>
                    %
                </strong>
            </label>

            <input type="range" name="porcentagem" id="porcentagem" min="0" max="100" value="0" oninput="change.innerHTML = Number(porcentagem.value)">

            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h1>Resultado do Reajuste</h1>
        <p>O produto que custava R$ <?= number_format($preco, 2, ",", ".")  ?>, com <strong><?php echo $porcentagem ?>% de aumento</strong> vai passar a custar <strong>R$ <?php echo number_format($resultado, 2, ",", ".") ?></strong> a partir de agora.</p>
    </section>
</body>

</html>