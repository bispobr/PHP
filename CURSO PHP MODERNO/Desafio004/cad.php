<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Conversor de Moedas 2.0</h1>
        <?php 
        $inicio =date("m-d-Y",strtotime("-7 days")) ;
        $fim =date("m-d-Y") ;
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        $dados = json_decode(file_get_contents($url),true);
        $cotação =  $dados["value"][0]["cotacaoCompra"];

            $Reais = $_GET["reais"];
            $convertido = $Reais / $cotação; 
            echo "<p> Seus R$ $Reais equivalem a <strong> USD$ $convertido</strong> </p>";
        ?>
        <input type="button" value="Voltar" onclick="javascript:history.go(-1)">
    </section>
    
</body>
</html>