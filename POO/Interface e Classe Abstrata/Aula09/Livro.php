<?php
require_once 'Publicacao.php';
require_once 'Pessoa.php';

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Livro
 *
 * @author n
 */
class Livro  implements Publicacao{
    //put your code here
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private Pessoa $leitor;
    
    
    // Construtor, getters e setter
    
    public function __construct($titulo, $autor, $totPaginas, $pagAtual, $aberto, Pessoa $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->pagAtual = $pagAtual;
        $this->aberto = $aberto;
        $this->leitor = $leitor;
    }
    
    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getTotPaginas() {
        return $this->totPaginas;
    }

    public function getPagAtual() {
        return $this->pagAtual;
    }

    public function getAberto() {
        return $this->aberto;
    }

    public function getLeitor(): Pessoa {
        return $this->leitor;
    }

    public function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }

    public function setAutor($autor): void {
        $this->autor = $autor;
    }

    public function setTotPaginas($totPaginas): void {
        $this->totPaginas = $totPaginas;
    }

    public function setPagAtual($pagAtual): void {
        $this->pagAtual = $pagAtual;
    }

    public function setAberto($aberto): void {
        $this->aberto = $aberto;
    }

    public function setLeitor(Pessoa $leitor): void {
        $this->leitor = $leitor;
    }

    
    
    
    // metodos
    public function abrit() {
        $this->aberto = true; 
    }

    public function avancarPag() {
        $this->pagAtual++; 
    }

    public function fechar() {
        $this->aberto = false;
    }

    public function folhear($param) {
        $this->pagAtual = $param;
    }

    public function voltarPag() {
        $this->pagAtual--;
    }
}
