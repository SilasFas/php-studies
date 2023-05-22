<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando a sua idade</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <?php
        $ano_atual = date('Y');
        $ano_anterior = date('Y', strtotime("-1 year"));
        $nascimento = $_REQUEST['nascimento'] ?? 1000;
        $ano = $_REQUEST['ano'] ?? $ano_atual;
        $calculo = $ano - $nascimento;
        
        ?>
        <h1>Calculando a sua idade</h1>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="nascimento">Em que ano você nasceu?</label>
            <input type="number" name="nascimento" id="nascimento" min="1900" required max="<?php echo $ano_anterior ?>">

            <label for="ano">Quer saber sua idade em que ano?(atualmente estamos em <strong><?php echo $ano_atual ?></strong>)</label>
            <input type="number" name="ano" id="ano" required min="" value="<?php echo $ano_atual ?>">

            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?php echo $nascimento ?> vai ter <strong><?php echo $calculo ?> anos</strong> em <?php echo $ano ?>!</p>
    </section>
</body>

</html>