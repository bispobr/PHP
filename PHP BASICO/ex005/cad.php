<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 9 - exercicio 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <?php 
            $nacsc=$_GET["dnasc"] ?? 0 ;
            $idade = date("Y") - $nacsc;

            if ($idade > 18){
                $msg =  'pode dirigir e votar!';
            } else {
                $msg = "NAO pode dirigir e votar";
            }  
        ?>
        <p>De acordo com a sua idade de <?=$idade?> voce  <?=$msg?></p>
    </div>
</body>
</html>