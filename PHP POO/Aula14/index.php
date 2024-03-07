<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Projeto Final</h1>
        <pre>
        <?php
        // put your code here
        require_once 'Video.php';
        require_once 'Gafanhoto.php';
        require_once 'Visualizacao.php';
        
        $v[0] = new Video("aula 01");
        $v[1] = new Video("aula 02");
        $v[2] = new Video("aula 03");
        
        $g[0] = new Gafanhoto("teste1");
        $g[1] = new Gafanhoto("teste2");
        
        $vi[0] = new Visualizacao($g[0], $v[1]);
        print_r($vi[0]);
                
        ?>
        </pre>
    </body>
</html>
