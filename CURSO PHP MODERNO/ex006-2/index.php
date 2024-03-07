<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio006</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $dividendo = $_GET['divid'] ?? 0;
    $divisor = $_GET['divis'] ?? 1;
    ?>

    <main>
         <h1>Anatomia de uma divisão</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
           <label for="divid">Dividendo</label>
           <input type="number" name="divid" id="iddivid" value="<?=$dividendo?>">
           <label for="divis">Divisor</label>
           <input type="number" name="divis" id="iddivis" value="<?=$divisor?>">
           <input type="submit" value="Analisar"> 
        </form>
    </main>

    <section>
        <h2>Estrutura da Divisão</h2>
        <?php 
        $resto = $dividendo%$divisor;
        $quociente = $dividendo / $divisor;
        echo "<p>O Dividendo é: $dividendo</p>";
        echo "<p>O Divisor é: $divisor</p>";
        echo "<p> O quociente é: $quociente</p>";
        echo "<p>O Resto da Divisão é: $resto</p>";
        
        ?>
    </section>
</body>
</html>