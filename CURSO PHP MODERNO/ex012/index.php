<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio12</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $seg = $_GET['temp'] ?? '0';
    ?>
    <main>
        <h1>Calculo do Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="temp">Qual é o tempo em segundos ?</label>
            <input type="number" name="temp" id="idtemp" min="0" step="1" required value="<?=$seg?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <?php 
        $semana = intdiv($seg, 604800) ;
        $resto = $seg % 604800;
        $dias = intdiv($resto,86400);
        $resto = $resto % 86400;
        $hora = intdiv($resto,3600);
        $resto = $resto % 3600;
        $minutos = intdiv($resto,60);
        $resto= $resto % 60;
    ?>
    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?=number_format($seg,0,",",".")?> segundos</strong> equivalem a um total de: </p>
        <p><?=$semana?> semanas</p>
        <p><?=$dias?> Dias</p>
        <p><?=$hora?> horas</p>
        <p><?=$minutos?> minutos</p>
        <p><?=$resto?> segundos</p>
    </section>
</body>
</html>