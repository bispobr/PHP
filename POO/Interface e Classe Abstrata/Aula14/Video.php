<?php
require_once 'AcoesVideo.php';
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Video
 *
 * @author n
 */
class Video implements AcoesVideo {
    //put your code here
    private $titulo;
    private $avaliacao;
    private $view;
    private $curtidas;
    private $reproduzinfo;
    
    // Construtor, gettes e setter
    
    public function __construct($titulo ) {
        $this->titulo = $titulo;
        $this->avaliacao = 1;
        $this->view = 0;
        $this->curtidas = 0;
        $this->reproduzinfo = false;
    }
    
    public function getTitulo() {
        return $this->titulo;
    }

    public function getAvaliacao() {
        return $this->avaliacao;
    }

    public function getView() {
        return $this->view;
    }

    public function getCurtidas() {
        return $this->curtidas;
    }

    public function getReproduzinfo() {
        return $this->reproduzinfo;
    }

    public function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }

    public function setAvaliacao($avaliacao): void {
        $this->avaliacao = $avaliacao;
    }

    public function setView($view): void {
        $this->view = $view;
    }

    public function setCurtidas($curtidas): void {
        $this->curtidas = $curtidas;
    }

    public function setReproduzinfo($reproduzinfo): void {
        $this->reproduzinfo = $reproduzinfo;
    }

    
    //metodos
    public function like() {
        $this->curtidas++;
    }

    public function pause() {
        $this->reproduzinfo = false;
    }

    public function play() {
        $this->reproduzinfo = True; 
    }
}
