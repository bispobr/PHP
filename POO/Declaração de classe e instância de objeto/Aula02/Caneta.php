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
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;
    
    function rabiscar(){
        if ($this->tampada == true){
            echo '<p>Erro!Não pode rabiscar! </p';
        } else {
            echo '<p>Rabiscanndo....</p>';
        }
    }
    
    function tampar(){
        $this->tampada = true;
    }
    
    function Destampar(){
        $this->tampada = false;
    }
    
            
            
}
