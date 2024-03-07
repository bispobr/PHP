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
    <body><pre>
        
        <?php
        // put your code here
        require_once 'ContaBanco.php';
       $c1 = new ContaBanco();
    
       $c1->setDono('Luna');
       $c1->abrirConta('cc');
       $c1->depositar(500);
       $c1->sacar(800);
       $c1->fecharConta();
       $c1->pagarMensal();
       
       print_r($c1)
        
        ?>
        <qpre>
    </body>
</html>
