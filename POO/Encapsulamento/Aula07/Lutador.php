<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Lutador
 *
 * @author n
 */
class Lutador {
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitoria;
    private $derrotas;
    private $empates;
    
    //construtor, getters e setters
    
    public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitoria, $derrotas, $empates) {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->peso = $peso;
        
        $this->vitoria = $vitoria;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getVitoria() {
        return $this->vitoria;
    }

    public function getDerrotas() {
        return $this->derrotas;
    }

    public function getEmpates() {
        return $this->empates;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setNacionalidade($nacionalidade): void {
        $this->nacionalidade = $nacionalidade;
    }

    public function setIdade($idade): void {
        $this->idade = $idade;
    }

    public function setAltura($altura): void {
        $this->altura = $altura;
    }

    public function setPeso($peso): void {
        $this->peso = $peso;
        $this->setCategoria();
    }

    public function setCategoria(): void {
        if ($this->peso < 52.2){
            $this->categoria = "invalido";  
        }else if ($this->peso <= 70.3){
          $this->categoria = "leve";  
        } else if (this.peso <=83.3){
          $this->categoria = "Medio" ; 
        }else if (this.peso <= 120.2){
            $this->categoria = "Pesado";
        }else{
            $this->categoria = "Invalido";
        }
    }

    public function setVitoria($vitoria): void {
        $this->vitoria = $vitoria;
    }

    public function setDerrotas($derrotas): void {
        $this->derrotas = $derrotas;
    }

    public function setEmpates($empates): void {
        $this->empates = $empates;
    }
    
    //metodos 
    
    public function apresentar() {
        echo '<p>===========================================</p>';
        echo '<p>CHEGOU A HORA!!!!</p>';
        echo '<pLutador</p>'.$this->getNome();
        echo '<pOrigem</p>'.$this->getNacionalidade();
        echo '<p>idade:</p>'.$this->getIdade();
        echo '<p>Pesando:</p>'.$this->getPeso();
        echo '<p>Categoria</p>', $this->getCategoria();
        echo '<p>Ganhou</p>'.$this->getVitoria();
        echo '<p>Perdeu</p>'.$this->getDerrotas();
        echo '<p>Empatou</p>'.$this->getEmpates();
        echo '<p>===========================================</p>';
    }
    
    public function status(){
        echo '<p>===========================================</p>';
        echo '<p>Lutador</p>'.$this->getNome();
        echo '<p>Pesando:</p>'.$this->getPeso();
        echo '<p>Ganhou</p>'.$this->getVitoria();
        echo '<p>Perdeu</p>'.$this->getDerrotas();
        echo '<p>Empatou</p>'.$this->getEmpates();
        echo '<p>Categoria</p>'.$this->getCategoria();
        echo '<p>===========================================</p>';
    }
    
    public function ganharLuta() {
        $this->setVitoria($this->getVitoria() + 1);
    }
    
    public function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    
    public function empatarLuta() {
        $this->setEmpates($this->getEmpates() + 1);
    }



   
}
