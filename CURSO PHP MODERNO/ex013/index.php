<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio013</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $saque = $_GET['valor'] ?? '5';
        $n100 = intdiv($saque,100);
        $resto = $saque % 100;
        $n50 = intdiv($resto,50);
        $resto = $resto % 50;
        $n10 = intdiv($resto,10);
        $resto = $resto % 10;
        $n5 = intdiv($resto,5);


    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
    <form action="" method="get">
            <label for="valor">Qual valor você deseja sacar? (R$)</label>
            <input type="number" name="valor" id="idvalor" step="5"  required value="<?=$saque?>">
            <label for="notas">Notas disponiveis R$ 100 , R$ 50, R$10,R$ 5</label>
            <input type="submit" value="Sacar">
      </form>   
    </main>
    <section>
        <h2>Saque de <?=number_format($saque,2,",",".")?> Realizado</h2>
        <p>O caixa eletronico vai te entregar as seguintes notas</p>
        <p>NOTAS DE R$100: <?=$n100?></p>
        <p>NOTAS DE R$ 50: <?=$n50?></p>
        <p>NOTAS DE R$ 10: <?=$n10?></p>
        <p>NOTAS DE R$ 5: <?=$n5?></p>
    </section>
</body>
</html>