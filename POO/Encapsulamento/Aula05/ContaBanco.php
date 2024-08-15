<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of ContaBanco
 *
 * @author n
 */
class ContaBanco {
    //put your code here
    public $numComta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    // construtor, geters e setters
    
    public function __construct() {
        $this->saldo = 0;
        $this->status = false;
    }

    
    public function getNumComta() {
        return $this->numComta;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getDono() {
        return $this->dono;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setNumComta($numComta): void {
        $this->numComta = $numComta;
    }

    public function setTipo($tipo): void {
        $this->tipo = $tipo;
    }

    public function setDono($dono): void {
        $this->dono = $dono;
    }

    public function setSaldo($saldo): void {
        $this->saldo = $saldo;
    }

    public function setStatus($status): void {
        $this->status = $status;
    }

    
    //metodos
    
    
    
    
    public function  status(){
        echo 'numero da conta'.$this->getNumComta();
        echo 'Tipo de conta'.$this->getTipo();
        echo 'Dono'.$this->getDono();
        echo 'saldo'. $this->getSaldo();
        echo 'Status'.$this->getStatus();  
        echo '<p>teste</p>';
    }
    
    public function abrirConta($param) {
        $this->setStatus(true);
        $this->setTipo($param);
        if ($param == 'cc'){
            $this->setSaldo(50);
        }else if ($param == 'cp'){
            $this->setSaldo(150);
        }
        
    }
    
    public function fecharConta() {
        if ($this->getSaldo() < 0){
            echo 'senhor'.$this->getDono().'Sua conta esta negativada não poder ser fechado';
        }else if ($this->getSaldo() > 0 ){
            echo 'Senhor'.$this->getDono()."sua conta possui saldo voce deve sacar esse saldo";
        } else {
            echo 'Senhor'.$this->getDono().'Sua conta sera fechada';
            $this->setStatus(false);
        }
    }
    
    public function depositar($param) {
        if ($this->getStatus() == false){
            echo '<p>Senhor'.$this->getDono().'esta conta esta fechada não é possivel realizar o deposito.</p>';
        } else {
            echo '<p>Senhor'.$this->getDono().'o valor de '.$param.'Sera depositado!!!</p>';
            $this->setDono($this->getSaldo() + $param);
        }
    }
    
    public function sacar($param) {
        if ($this->getStatus() == false){
            echo 'conta fechada não é possivel realizar o saque!';
        } else if ($param > $this->getSaldo()) {
            echo 'Quantia a ser sacada é maior que o disponivel em saldo';
        } else{
            $this->setSaldo($this->getSaldo() - $param);
            echo 'Valor de R$'.$param.'Sacado da sua conta';
            echo 'Seu saldo atual  é de R$ '.$this->getSaldo();
        }
    }
    public function pagarMensal() {
        if($this->getTipo() =='cc'){
            $this->setSaldo($this->getSaldo() - 12);
            echo 'uma anuidade de R$12 foi cobrada';
        } elseif ($this->getTipo()== 'cp') {
            $this->setSaldo($this->getSaldo() - 20);
            echo 'uma anuidade de r$ 20 foi cobrada';
    }
            
        
    }
    

    
}
