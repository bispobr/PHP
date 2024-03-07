<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio002</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Trabalhando com Números Aleatorios</h1>
    </header>
    
    <main>
        <?php 
        $num = rand(0,100);
        echo "<p>gerando um numero aleatorio entre 0 e 100...</p>";
        echo "<p>O valor gerado foi <strong>$num</strong></p>"
        ?>
            <input type="button" value="Gerar outro" onclick="javascript:document.location.reload()">
    </main>
    
</body>
</html>