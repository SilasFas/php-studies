<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de tempo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Calculadora de tempo</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="number">Qual é o total de segundos?</label>
            <input type="number" name="number" id="number">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <?php
            $number = $_GET['number'] ?? 0;
            if (empty($number)) {
                $number = 0;
            }
            $semanas = $number / 604800;
            $resto1 =  $number % 604800;

            $dias = $resto1 / 86400;
            $resto2 = $resto1 % 86400;

            $hora = $resto2 / 3600;
            $resto3 = $resto2 % 3600;

            $minutos = $resto3 / 60;

            $segundos = $resto3 % 60;
        ?>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você degitou, <strong><?php echo $number ?> segundos</strong> equivalem a um total de: </p>
        <ul>
            <li> <?php echo (int) $semanas ?> semanas</li>
            <li> <?php echo (int) $dias ?> dias</li>
            <li> <?php echo (int) $hora ?> horas</li>
            <li> <?php echo (int) $minutos ?> minuto(s)</li>
            <li> <?php echo (int) $segundos ?> segundos</li>
        </ul>
    </section>
</body>

</html>