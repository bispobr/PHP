<?php
require_once 'Pessoa.php';
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Professor
 *
 * @author n
 */
class Professor extends Pessoa {
    //put your code here
    
    private $especialidade;
    private $salario;
    
    //gettes e setters
    
    public function getEspecialidade() {
        return $this->especialidade;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setEspecialidade($especialidade): void {
        $this->especialidade = $especialidade;
    }

    public function setSalario($salario): void {
        $this->salario = $salario;
    }

    //Metodo
    
    public function receberAumento() {
        $this->setSalario($this->getSalario() + 1000);
    }
}
