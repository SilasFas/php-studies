<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis, constantes e tipos primitivos</title>
    <style>
        body {
            background-color: black;
            color: white;
        }
    </style>
</head>

<body>
    <?php
        $nome = "Silas";
        $sobrenome = "Santos";
        const PAIS = "Brasil";
        echo "Muito prazer, $nome $sobrenome! Você mora no " . PAIS;
    ?>
    <h1>Teste de tipos primitivos em PHP</h1>
    <?php
        // 0x = hexadecimal - 0b = binário - 0 octal
        // $numero = 0x1A;
        // echo "O valor da variável é $numero";
        
        // $var ="Silas";
        // var_dump($var)    

        // $numero = 3e2; // 3 x 10 (2)
        // echo "O valor da variável é $numero ";
        // var_dump($numero)

        // $numero = (integer) "950"; //coerção
        // var_dump($numero);

        // $casado = false;
        // var_dump($casado);
        // echo "O valor para casado é $casado"

        // $array = [6, "Maria", 2.5, true, 5];
        // var_dump($array);

        class Pessoa {
            private string $nome;
        }

        $pessoa = new Pessoa;
        var_dump($pessoa)

    ?>
</body>

</html>