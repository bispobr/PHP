<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Luta
 *
 * @author n
 */
class Luta {
    //put your code here
    private Lutador $desafiado;
    private  Lutador $desafiante;
    private int $rounds;
    private bool $aprovada;
    
    //getters e setters
    
    public function getDesafiado(): Lutador {
        return $this->desafiado;
    }

    public function getDesafiante(): Lutador {
        return $this->desafiante;
    }

    public function getRounds(): int {
        return $this->rounds;
    }

    public function getAprovada(): bool {
        return $this->aprovada;
    }

    public function setDesafiado(Lutador $desafiado): void {
        $this->desafiado = $desafiado;
    }

    public function setDesafiante(Lutador $desafiante): void {
        $this->desafiante = $desafiante;
    }

    public function setRounds(int $rounds): void {
        $this->rounds = $rounds;
    }

    public function setAprovada(bool $aprovada): void {
        $this->aprovada = $aprovada;
    }

  //metodo
  public function status() {
      echo '<p>Desafiante:</p>'.$this->getDesafiante();
      echo '<p>Deafiado:</p>'.$this->getDesafiado();
      echo '<p>Quantidad de rounds:</p>'.$this->getRounds();
       echo '<p>Aprovada:</p>'.$this->getAprovada(); 
  }
  
  public function luta() {
       if($this->getAprovada()){
           $this->desafiado->apresentar();
           $this->desafiante->apresentar();
           //Random aleatorio = new Random();
           //int vencedor = aleatorio.nextInt(3); //0 1 2
             $vencedor = 0;
           switch($vencedor){
               case 0:
                   echo '<p>Luta!!Empatou</p>';
                   $this->desafiado->empatarLuta();
                   $this->desafiante->empatarLuta();
                   break;
               case 1:
                   echo '<p>Ganhador</p>'.$this->desafiado->getNome();
                   $this->desafiado->ganharLuta();
                   $this->desafiante->perderLuta();
                   break;
               case 2:
                   echo '<p>Ganhador</p>'.$this->desafiante->getNome();
                   $this->desafiante->ganharLuta();
                   $this->desafiado->perderLuta();
                   break;
           }
       }else{
            echo '<p>A luta não pode acontecer!!!</p>';
       }
  }
  
  public function marcarLuta(Lutador $param1, Lutador $param2) {
      if ($param1->getCategoria() == $param2->getCategoria() &&  $param1 != $param2){
          $this->setAprovada(true);
          $this->setDesafiado($param1);
          $this->setDesafiante($param2);
        } else{
            $this->setAprovada(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);
        }
  }
}
