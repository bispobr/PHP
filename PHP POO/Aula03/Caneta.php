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
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;
    
    public function escrever(){
        if ($this->tampada){
            echo '<p>Erro! a caneta esta tampáda não da para escrever!<\p>';
        } else {
            echo '<p>Escrevendo<\p>';
        }
    }
    
    public function rabiscar (){
         echo '<p>Rabiscando....<\p>';
    }
    
    public function pintar(){
         echo '<p>Pintando....<\p>';
    }
    
    private function  tampar (){
        $this->tampada = true;
    }
    
    private function destampar (){
        $this->tampada = false;
    }
}
