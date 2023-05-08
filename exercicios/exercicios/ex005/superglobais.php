<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUPERGLOBAIS</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
 <main>
    <pre>
        <?php 

            setcookie("dia-da-semana", "SEGUNDA", time() + 3600);

            session_start();
            $_SESSION["teste"] = "FUNCIONOU!";

            // &_GET: gera um array associativo com todas as variais que foram passadas por parametro por uma url. (gera arrays associativos)
            echo "<h1>Superglobal GET</h1>";
            var_dump($_GET);

            //&_POST: pega dados de formulários que foram enviados usando metodo post. (gera arrays associativos)
            echo "<h1>Superglobal POST</h1>";
            var_dump($_POST);

            //&_REQUEST: junção de GET e POST (gera arrays associativos)
            echo "<h1>Superglobal REQUEST</h1>";
            var_dump($_REQUEST);

            //$_COOKIE: tem informações sobre cookies, são pequenas variáveis que são guardadas dentro do navegador por um terminado tempo (1h 3h 2d  3d etc)
            echo "<h1>Superglobal COOKIE</h1>";
            var_dump($_COOKIE);

            //$_SESSION: Permite que variáveis de sessão possam ser usadas (variáveris que não são perdidas entre navegação de páginas)
            echo "<h1>Superglobal SESSION</h1>";
            var_dump($_SESSION);

            //$_ENV: variáveis de ambiente do servidor
            echo "<h1>Superglobal ENV</h1>";
            var_dump($_ENV);

            echo "<h1>Superglobal SERVER</h1>";
            var_dump($_SERVER);

            echo "<h1>Superglobal GLOBALS</h1>";
            var_dump($GLOBALS);
        ?>
    </pre>
 </main>
</body>

</html>