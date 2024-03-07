<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio007</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $minimo = 1_380.60;
        $s = $_GET['s'] ?? 0;
    ?>
    <main>
        <h1>Informe o seu salario</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="s">Salário</label>
            <input type="number" name="s" id="ids" step="0.01" value="<?=$s?>">
            <p>Considerando o Salario minimo de <strong>R$<?=number_format($minimo,2,",",".")?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php 
        $min = (int) ($s / 1380);
        $dif = $s % $minimo;
           echo "<p>Quem recebe o Salário de R$".number_format($s,2,",",".")." ganha <strong>$min Salario minimo</strong> + R$ ".number_format($dif,2,",",".")."</p>";
        ?>
    </section>
</body>
</html>