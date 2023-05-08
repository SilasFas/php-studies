<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Conversor de Moedas</h1>
            <?php

                $inicio = date("m-d-Y", strtotime("-7 days"));
                $fim = date("m-d-Y");

                // API do banco central
                $API_banco_central = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

                $dados = json_decode(file_get_contents($API_banco_central), true);

                //var_dump($dados);

                $cotacao = $dados["value"][0]["cotacaoCompra"];

                $real = $_GET["valor"] ?? 0;
                $valorEmDolar = $real / $cotacao;;

                //echo "Seus R$ " . number_format($real, 2, ",", ".") . " equivalem a US$ " . number_format("$valorEmDolar", 2, ",", ".");

                // Formatação de moeda com internacionalização
                // Bíblioteca intl (internalization PHP)
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

                echo "<p>Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $valorEmDolar, "USD") . "<strong/></p>";
                ?>

        <p></p>
        <button onclick="document.location.href='index.html'">Voltar</button>
    </main>
</body>

</html>