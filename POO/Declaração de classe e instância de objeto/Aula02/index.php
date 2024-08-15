<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula02 - POO</title>
    </head>
    <body>
        <?php
        require_once 'Caneta.php';
        $c1 = new Caneta;
        
        $c1->modelo = "bic";
        $c1->carga = 50;
        $c1->ponta = 0.7;
        $c1->cor = "azul";
        $c1->tampada = false;
        
        $c1->Destampar();
        $c1->rabiscar();
        
        
        ?>
    </body>
</html>
