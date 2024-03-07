<?php
require_once 'Aluno.php';
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Bolsista
 *
 * @author n
 */
class Bolsista  extends Aluno{
    //put your code here
    private $bolsa;
    
    public function getBolsa() {
        return $this->bolsa;
    }

    public function setBolsa($bolsa): void {
        $this->bolsa = $bolsa;
    }

    public function pagarMensalidade() {
        echo '<p>Bolsista pagamaneto facilitado</p>';
    }
    
}
