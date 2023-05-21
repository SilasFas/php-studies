<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma divisão</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <?php
        $Dividendo = $_GET['Dividendo'] ?? 0;
        $Divisor = $_GET['Divisor'] ?? 0;
        $resto = $Dividendo % $Divisor; 
        $cosciente = $Dividendo / $Divisor

        ?>
        <h1>Anatomia de uma divisão</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="Dividendo">Dividendo</label>
            <input type="number" name="Dividendo" id="Dividendo" value="<?php echo $Dividendo ?>">

            <label for="Divisor">Divisor</label>
            <input type="number" name="Divisor" id="Divisor" value="<?php echo $Divisor ?>">

            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <h1 style="color: purple">Estrutura da divisão</h1>
        <?php
        echo "<p>O dividendo é: " . $Dividendo . "</p>" . "<p>O divisor é: " . $Divisor . "<p>O resto é: " . $resto . "<p>O cosciente é: " . intval($cosciente);
        ?>
    </section>
</body>

</html>