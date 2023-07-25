<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversao</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <p>
            <?php 
            $reais = $_REQUEST['valorreal'] ?? 0;
            $cotacao = 5.22;
            $convertido = $reais / $cotacao;

            //jeito simples:
            //echo "Seus R$". number_format($reais, "2", ",", ".") . " equivalem a <strong>US$" . number_format($convertido, "2", ",", ".") . "</strong><br><br>";

            //jeito profissional com internacionalização:
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "Seus " . numfmt_format_currency($padrao, $reais, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $cotacao, "USD") . "<br><br>";

            echo "<strong>*Cotação fixa de R$5,22</strong> informada diretamento no código.";
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2b05;Voltar</button>
    </main>
</body>
</html>