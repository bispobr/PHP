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
        <h1>Herança</h1>
        <pre>
        <?php
        require_once 'Pessoa.php';
        require_once 'Aluno.php';
        require_once 'Professor.php';
        require_once 'Funcionario.php';
        
        $p1 = new Pessoa();
        $p2 = new Aluno();
        $p3 = new Professor();
        $p4 = new Funcionario();
        
        $p1->setNome("pedro");
        $p2->setNome("maria");
        $p3->setNome("Claudio");
        $p4->setNome("fabiana");  
        
        $p2->setCurso("Informatica");
        $p3->setSalario(2500.75);
        $p4->setSetor("estoqye");
        
       
        print_r($p1);
        print_r($p2);
        print_r($p3);
        print_r($p4);
        ?>
        </pre>
    </body>
</html>
