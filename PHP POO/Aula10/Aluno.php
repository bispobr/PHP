<?php
require_once 'Pessoa.php';
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Aluno
 *
 * @author n
 */
class Aluno extends Pessoa {
    //put your code here
    private $matricula;
    private $curso;
    
    //getters e setters
    
    public function getMatricula() {
        return $this->matricula;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setMatricula($matricula): void {
        $this->matricula = $matricula;
    }

    public function setCurso($curso): void {
        $this->curso = $curso;
    }

//metodo 
    
    public function cancelarMatricula() {
        echo'<p>matreicula será cancelada !!!<\p>';
    }
    
}
