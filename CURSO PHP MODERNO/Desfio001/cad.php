<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio01</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado Final</h1>
    </header>

    <main>
            <?php 
            $numero = $_GET["numero"];
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;
            echo "<p> O seu numero escolhido foi <strong> $numero</strong> </p>";
            echo "<p> Seu antecessor é <strong> $antecessor</strong></p>";
            echo "<p> seu Sucessor é <strong> $sucessor</strong> </p>";
            ?>
            <input type="button" value="Voltar" onclick="javascript:history.go(-1)" >
    </main>
</body>
</html>