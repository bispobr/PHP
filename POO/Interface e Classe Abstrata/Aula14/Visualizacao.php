<?php
require_once 'Gafanhoto.php';
require_once 'Video.php';
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Visualizacao
 *
 * @author n
 */
class Visualizacao {
    //put your code here
    private Gafanhoto $espectador;
    private Video $Filme;
    
    //Construtor, getters , setters
    
    public function __construct(Gafanhoto $espectador, Video $Filme) {
        $this->espectador = $espectador;
        $this->Filme = $Filme;
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
        $this->Filme->setView($this->Filme->getView() + 1);
    }
    
    public function getEspectador(): Gafanhoto {
        return $this->espectador;
    }

    public function getFilme(): Video {
        return $this->Filme;
    }

    public function setEspectador(Gafanhoto $espectador): void {
        $this->espectador = $espectador;
    }

    public function setFilme(Video $Filme): void {
        $this->Filme = $Filme;
    }

    //metodos
    public function avaliar() {
        $this->Filme->setAvaliacao(5);
    }
    
    public function avaliar2($param) {
        $this->Filme->setAvaliacao($param);
    }

}
