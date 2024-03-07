<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio009</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET['1valor'] ?? 1;
        $peso1 = $_GET['1peso'] ?? 1 ;
        $valor2 = $_GET['2valor'] ?? 1 ;
        $peso2 = $_GET['2peso'] ?? 1;
    ?>
    <main>
        <h1>Médias Aritimética</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="1valor">1°Valor</label>
            <input type="number" name="1valor" id="id1valor" value="<?=$valor1?>">
            <label for="1peso">1° Peso</label>
            <input type="number" name="1peso" id="id1peso" value="<?=$peso1?>">
            <label for="2valor">2° Valor</label>
            <input type="number" name="2valor" id="id2valor" value="<?=$valor2?>">
            <label for="2peso">2° peso</label>
            <input type="number" name="2peso" id="id2peso" value="<?=$peso2?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section>
        <h2>Cálculo das Médias</h2>
        <?php 
            $media = ($valor1 + $valor2)/ 2;
            $mp = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);
            echo "<p>Analisano os valores $valor1 e $valor2 :</p>";
            echo "<p>A <strong>Média Aritimética Simples</strong> entre os valores é igual a ".number_format($media,2,",",".")." </p>";
            echo "<p>A <strong>Média Aritimética Ponderada</strong> com pesos $peso1 e $peso2 é igual a ".number_format($mp,2,",",".")." </p>"
        ?>
    </section>
    
</body>
</html>