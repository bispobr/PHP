<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex004</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <?php 
            $site = "cursoemvideo";
            $$site = "Cursophp";
        ?>
        <h1>variaveis de variavel / variavel variante</h1>
        <article>
            $site = "cursoemvideo"; <br>
            $$site = "Cursophp";
         </article>
        <p>Conteudo da variavel $site : <?=$site?></p>
        <p>Conteudo de  $cursoemvideo :<?=$cursoemvideo?></p>
    </div>
</body>
</html>