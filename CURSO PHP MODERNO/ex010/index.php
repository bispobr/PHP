<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio10</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $atual = date("Y");
        $dnasc = $_GET['nasc'] ?? "2000";
        $dprop = $_GET['data'] ?? $atual;
     ?>
    <main>
        <h1>Calculando a sua idade </h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nasc">Em que ano Você nasceu?</label>
            <input type="number" name="nasc" id="idnasc" min="1900" max="<?=$atual?>" required value="<?=$dnasc?>">
            <label for="data">Quer saber Sua idade em que Ano?(Atualmente estamos em <strong><?=$atual?></strong>)</label>
            <input type="number" name="data" id="iddata"  min="1900" required  value="<?=$dprop?>">
            <input type="submit" value="Qual será aminha idade?">  
        </form>
    </main>
    <section>
        <?php 
            $intdnasc = (int) $dnasc;
            $intdrop = (int) $dprop;
            $idade = $intdrop -  $intdnasc;
        ?>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?=$dnasc?> vai ter <strong><?=$idade?></strong> em <?=$dprop?>!</p>
    </section>
    
</body>
</html>