<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio008</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $numero = $_GET['num'] ?? 0 ;
    ?>
    <main>
        <h1>Informe um Número</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="idnum" value="<?=$numero?>">
            <input type="submit" value="Calcular Raizes">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php 
        $raiz = sqrt($numero);
        $cubica = pow($numero,1.0 /3.0);
            echo "<p>Analisando o <strong> número $numero </strong> temos:</p>";
            echo "<p>A Raiz quadrada é  <strong>".number_format($raiz,3,",","."). "</strong></p>";
            echo "<p>A Raiz Cubica é <strong>".number_format($cubica,3,",",".")."</strong></p>";
        ?>
    </section>
</body>
</html>