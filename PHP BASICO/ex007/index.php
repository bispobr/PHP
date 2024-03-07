<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 9 = ex003</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $nota1 = $_GET["nota1"] ?? 0 ;
        $nota2 = $_GET["nota2"] ?? 0 ;
        $media = (($nota1 + $nota2) / 2);

        if ($media < 4){
            $msg = "Aluno  de Reprovado";
        } elseif ($media <= 6) {
            $msg = "Aluno Recuperação!!!";
        } else [
            $msg = "Aluno Aprovado"
        ]
    ?>
    <div>
        <h1>Média</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nota1">Nota1</label>
            <input type="number" name="nota1" id="idnota1" required min="0" step="0.01" value="<?=$nota1?>">
            <label for="nota2">nota2</label>
            <input type="number" name="nota2" id="idnota2" required min="0" step="0.01" value="<?=$nota2?>">
            <input type="submit" value="enviar">
        </form>
    </div>

    <div>
        <h1>Resultado</h1>
        <p> A media entre <?=$nota1?> e <?=$nota2?>  é <?=$media?></p>
        <p>Situação do aluno: <strong><?=$msg?></strong></p>
    </div>
</body>
</html>