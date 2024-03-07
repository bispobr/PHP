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
        <h1>Livraria</h1>
        <pre>
        <?php
        require_once 'Pessoa.php';
        require_once 'Livro.php';
        
        $p[0] =  new Pessoa("gustav", 33, "M");
        $p[1] = new Pessoa("ana", 50, "f");
        
        $l[0] = new Livro("livro 1", "autor1", 10000, 0, false, $p[0]);
        $l[1] = new Livro("livro 2", "autor2", 10000, 0, false, $p[1]);
        
        $l[1]->abrit();
        $l[1]->avancarPag();
        print_r($l[1]);
        // put your code here
        ?>
        </pre>
    </body>
</html>
