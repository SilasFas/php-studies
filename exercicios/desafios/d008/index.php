<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raiz quadrada e raiz cubica</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <?php
        $numero = $_REQUEST['numero'] ?? 0;
        $raizQuadrada = sqrt($numero);
        $raizCubica = pow($numero, (1 / 3));
        ?>
        <h1>Informe um número</h1>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="numero" value="<?php echo $numero ?>">
            <input type="submit" value="Calcular raiz">
        </form>
    </main>

    <section>
        <p>Analisando o <strong>número <?php echo $numero ?></strong> temos: </p>
        <ul>
            <li>A sua raiz quadrada é: <strong><?php echo number_format($raizQuadrada, 3, ",", ".") ?></strong></li>
            <li>A sua raiz cubuca é: <strong><?php echo number_format($raizCubica, 3, ",", ".") ?></strong></li>
        </ul>
    </section>
</body>

</html>