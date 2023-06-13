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
            <label for="number">Qual é o total de segunddos?</label>
            <input type="number" name="number" id="number">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <?php
        $number = $_GET['number'];
        if (empty($number)) {
            $number = 0;
        }

        // continuar aqui
        




        ?>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você degitou, <strong><?php echo $number ?> segundos</strong> equivalem a um total de: </p>
        <ul>
            <li> XXX semanas</li>
            <li> XXX dias</li>
            <li> XXX horas</li>
            <li> XXX minutos</li>
            <li> XXX segundos</li>
        </ul>
    </section>
</body>

</html>