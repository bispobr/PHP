<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio11</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $ppreco = $_GET['preco'] ?? 1 ;
        $reajuste = $_GET['reajuste'] ?? 1 ;
    ?>
    <main>
        <h1>Reajuste de Preço</h1>
        <form action="" method="get">
            <label for="preco">Preço do produto(R$)</label>
            <input type="number" name="preco" id="idpreco" min="0.10" step="0.01" required value="<?=$ppreco?>">
            <label for="reajuste">Qual Será o percentual do reajuste <strong><span>(<?=$reajuste?> %)</span></strong></label>
            <input type="range" name="reajuste" id="idreajuste" min="0" max="100" step="1" value="<?=$reajuste?>">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <?php 
            $aumento = ($ppreco * $reajuste) / 100;
            $npreco = $ppreco + $aumento;
        ?>
        <h2>Resultado do Reajuste</h2>
        <p> O produto que custava R$ <?=number_format($ppreco,2,",",".")?>, com <strong><?=$reajuste?>% de aumento</strong> vai passar a custar <strong>R$<?=$npreco?></strong> a partir de agora.</p>
    </section>
</body>
</html>