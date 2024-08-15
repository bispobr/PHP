<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Caneta
 *
 * @author n
 */
class Caneta {
    //put your code here
    public $modelo;
    private $ponta;
    
    //construtor
    public function __construct() {
        $this->modelo = "bic Cristal";
       
    }

            
    //getters e setters
    public function getModelo() {
        return $this->modelo;
    }

    public function getPonta() {
        return $this->ponta;
    }

    public function setModelo($modelo): void {
        $this->modelo = $modelo;
    }

    public function setPonta($ponta): void {
        $this->ponta = $ponta;
    }


}
