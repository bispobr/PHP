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
        <h1>Conversor de Moedas</h1>
        <?php 
            $Reais = $_GET["reais"];
            $convertido = $Reais / 5.17; 
            echo "<p> Seus R$ $Reais equivalem a <strong> USD$ $convertido</strong> </p>";
        ?>
        <input type="button" value="Voltar" onclick="javascript:history.go(-1)">
    </section>
    
</body>
</html>