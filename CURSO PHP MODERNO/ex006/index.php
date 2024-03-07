<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio006</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    // capturando os dados do formulario retroalimentado
    $valor1 = $_GET['v1'] ?? 0;
    $valor2 = $_GET['v2'] ?? 0;

    ?>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="idv1" value="<?=$valor1?>">
            <label for="v2">valor 2</label>
            <input type="number" name="v2" id="idv2" value="<?=$valor2?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section>
        <h2>Resultado da soma</h2>
        <?php 
        $soma = $valor1 + $valor2;
        echo "<p>O Resultado da soma é <strong>$soma</strong> </p>";
        
        ?>

    </section>
</body>
</html>