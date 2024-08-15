<?php
require_once 'Pessoa.php';
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Gafanhoto
 *
 * @author n
 */
class Gafanhoto extends Pessoa {
    //put your code here
    private $login;
    private $totAssistido;
    
    //Constructor, gettes e setter
    
    public function __construct($login) {
        $this->login = $login;
        $this->totAssistido = 0;
    }
    
    public function getLogin() {
        return $this->login;
    }

    public function getTotAssistido() {
        return $this->totAssistido;
    }

    public function setLogin($login): void {
        $this->login = $login;
    }

    public function setTotAssistido($totAssistido): void {
        $this->totAssistido = $totAssistido;
    }

    //metodo
    public function viuMaisum($param) {
        
    }

}
