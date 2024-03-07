<?php
require_once 'Controlador.php';
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of ControleRemoto
 *
 * @author n
 */
class ControleRemoto implements Controlador {
    //put your code here
    private $volume;
    private  $ligado;
    private  $tocando;
    
    //construtor , getters e setters
    
    public function __construct() {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }
    
    public function getVolume() {
        return $this->volume;
    }

    public function getLigado(): bool {
        return $this->ligado;
    }

    public function getTocando(): bool {
        return $this->tocando;
    }

    public function setVolume($volume): void {
        $this->volume = $volume;
    }

    public function setLigado(bool $ligado): void {
        $this->ligado = $ligado;
    }

    public function setTocando(bool $tocando): void {
        $this->tocando = $tocando;
    }

    // metodos vindo da interface Controlador
    public function abrirmenu() {
        echo '<p> esta ligado '.$this->getLigado().'</p>';
        echo '<p>Esta tocando '.$this->getTocando().'</p>';
        echo '<p>Volume: '.$this->getVolume().'</p>';
    }

    public function desligar() {
        $this->setLigado(false);  
    }

    public function desligarMudo() {
        if($this->getLigado() && ($this->getVolume() == 0)){
            $this->setVolume(50);
        }
    }

    public function fecharmenu() {
        echo '<p> Fechando menu....</p>';
    }

    public function ligar() {
        $this->setLigado(true);
    }

    public function ligarMudo() {
        if ($this->getLigado() && ($this->getVolume() > 0)){
            $this->setVolume(0); 
        }
        
    }

    public function maisVolume() {
        if ($this->getLigado()){
            $this->setVolume($this->getVolume() + 5);
        }
    }

    public function menosVolume() {
        if ($this->getLigado() && ($this->getVolume() > 0)){
            $this->setLigado($this->getVolume() - 3);
        }
    }

    public function pause() {
        if($this->getLigado() && $this->getTocando()){
            $this->setTocando(false);
        }
    }

    public function play() {
         if ($this->getLigado() && !($this->getTocando())){
             $this->setTocando(true);
         }
    }
}
