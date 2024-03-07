<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex001</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h1>teste</h1>
        <?php 
        
            $produto = 1000;
            $nproduto = ($produto) - (($produto * 10)/100);
        ?>
        <p>Preço orinal do produto R$ <?=number_format($produto,2)?></p>
        <p>Preço do novo produto R$ <?=number_format($nproduto,2,",",".")?></p>
    </div>
</body>
</html>