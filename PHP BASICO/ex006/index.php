<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula09 - ex002</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $nasci = $_GET['nasc'] ?? 0;
        $idade = date("Y") - $nasci;

        if ($idade < 16){
            $msg =  "não vota";
        } elseif ($idade >= 16 && $idade <18 || $idade >70 ) {
            $msg = "Voto Opcional!!!";
        } else{
            $msg = "voto  obrigatorio!";
        }
    
    
    ?>
    <div>
        <h1>Nascimento para saber se pode votar</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nasc">Data de nascimento</label>
            <input type="number" name="nasc" id="idnasc" step="1" min="0" value="<?=$nasci?>">
            <input type="submit" value="Calcular">
        </form>
        <p>Com base na sua idade de  <strong><?=$idade?></strong> você <strong><?=$msg?></strong></p>
    </div>
</body>
</html>