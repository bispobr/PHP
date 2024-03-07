<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio005</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Analisador de Numero Real</h1>
        <?php 
        $num = $_GET["num"];
        echo "<p>Analisando o numero  <strong>".number_format($num,3,",",".") ."</strong> informado pelo usuario:</p>";
        $int= (int) $num;
        $fra= $num - $int;
        echo "<p>Parte inteira no numero: <strong>".number_format($int,0,",",".")."</strong></P>";
        echo "<p> Parte fracionand do numero: <strong>".number_format($fra,3,",",".")."</strong> </p>"
        
        ?>
        <input type="button" value="Voltar" onclick="javascript:history.go(-1)">
    </section>
</body>
</html>