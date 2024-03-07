<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Pessoa
 *
 * @author n
 */
class Pessoa {
    //put your code here
    private $nome;
    private $idade;
    private $pessoa;
    
    //gettes e setters 
    
    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getPessoa() {
        return $this->pessoa;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setIdade($idade): void {
        $this->idade = $idade;
    }

    public function setPessoa($pessoa): void {
        $this->pessoa = $pessoa;
    }
    
    //metodos
    
    public function fazerAniversario() {
        $this->idade++;
    }


    
    
}




