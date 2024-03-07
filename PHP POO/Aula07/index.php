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
        <h1> Combate emoji</h1>
        <pre>
        <?php
        // put your code here
        require_once 'Lutador.php';
        $l1 = new Lutador('teste', 'br', 55, 1.68, 70, 8, 1, 0);
        $l1->apresentar();
        ?>
        </pre>
    </body>
</html>
