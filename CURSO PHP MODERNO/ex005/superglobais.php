<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
            <pre>
                    <?php 
                    setcookie("dia-da-Semana","SEGUNDA",time() + 3600);

                    session_start();
                    $_SESSION["Teste"] = "Funcionou!!!";

                    echo "<H1>Superglobal GET</H1>";
                    var_dump($_GET);
                    
                    echo "<h1>Superglobal POST</h1>";
                    var_dump($_POST);

                    echo "<h1>Superglobal Request</h1>";
                    var_dump($_REQUEST);

                    echo "<h1>Superglobal coockie</h1>";
                    var_dump($_COOKIE);

                    echo "<h1>Superglobal Session</h1>";
                    var_dump($_SESSION);

                    echo "<h1>Superglobal env </h1>";
                    var_dump($_ENV);

                    echo "<h1>Superglobal server</h1>";
                    var_dump($_SERVER);

                    echo "<h1>Superglobal Global</h1>";
                    var_dump($GLOBALS);
                    ?>
                    
            </pre>
    </main>
</body>
</html>