<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias Aritméticas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <?php
        $valor1 = $_REQUEST['valor1'] ?? '';
        $peso1 = $_REQUEST['peso1'] ?? '';

        $valor2 = $_REQUEST['valor2'] ?? '';
        $peso2 = $_REQUEST['peso2'] ?? '';

        $simples = ($valor1 + $valor2) / 2;
        $ponderada = (($valor1 * $peso1) + ($valor2 * $peso2)) / ($peso1 + $peso2);
        ?>
        <h1>Médias Aritméticas</h1>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="valor1">1º valor</label>
            <input type="number" name="valor1" id="valor1" min="1" required value="<?php echo $valor1 ?>">

            <label for="valor1">1º peso</label>
            <input type="number" name="peso1" id="peso1" min="1" required value="<?php echo $peso1 ?>">

            <label for="valor1">2º valor</label>
            <input type="number" name="valor2" id="valor2" min="1" required value="<?php echo $valor2 ?>">

            <label for="valor1">2º peso</label>
            <input type="number" name="peso2" id="peso2" min="1" required value="<?php echo $peso2 ?>">

            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <p>Analisando os valores <?php echo $valor1 ?> e <?php echo $valor2 ?>:</p>
        <ul>
            <li>A <strong>média aritmética simples</strong> entre os valores é igual a <?php echo $simples ?></li>

            <li>A <strong>média aritmética ponderada</strong> com pesos <?php echo $peso1 ?> e <?php echo $peso2 ?> valores é igual a <?php echo $ponderada ?></li>
        </ul>
    </section>
</body>

</html>