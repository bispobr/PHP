<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex003</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
    <?php 
        $a=3;
        $b=$a;
        $b+=5;
        
        $c=3;
        $d=&$c;
        $d+=5;
    ?>
    <h1>Variavel sem referencia</h1>
    <p>a=3 b=a b+=5</p>
    <p>A variavel a vale <?=$a?></p>
    <p>A variavel b vale <?=$b?></p>

    <h1>váriavel com referencia</h1>
    <p>c=3 d=c d+=5</p>
    <p>A variavel c vale <?=$c?></p>
    <p>A variavel d vale <?=$d?></p>

    </div>
</body>
</html>