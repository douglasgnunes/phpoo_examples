<?php 
    //Classe genérica que fornece métodos para a especialização das classes que a herdam
    abstract class Abstracao{//com  o abstract não temos mais uma classe completa e sim abstrata não  pode mais ter objetos que a instanciam
        //serve apenas para ser herdada de outras classes
        //se utilizar o final no lugar de abstract ela passa ser uma classe que não poderá ser herdada
        public $Cliente;
        public $Conta;
        public $Saldo;

        function __construct($Cliente, $Saldo){
            $this->Cliente = $Cliente;
            $this->Saldo = $Saldo;
        }
        public function Extrato(){
            echo "<hr><hr> Olá {$this->Cliente}. Seu saldo em {$this->Conta} é de {$this->Real($this->Saldo)}<hr>";
        }
        public function Depositar($Valor){
            $this->Saldo += (float) $Valor;
            echo "<span style='color:green'><b>{$this->Conta}:</b> Depósito de: {$this->Real($Valor)} efetuado com sucesso!</span><br>";
        }
        public function Sacar($Valor){
            $this->Saldo -= (float) $Valor;
            echo "<span style='color:red'><b>{$this->Conta}:</b> Saque de: {$this->Real($Valor)} efetuado com sucesso!</span><br>";
        }
        /** @param Abstracao $Destino */
        public function Transferir($Valor, $Destino){
            if($this === $Destino):
                echo "Você não pode transferir valores para a mesma conta!<br>";
            else:
                echo "<hr>";
                $this->Sacar($Valor);
                $Destino->Depositar($Valor);
                echo "<span style='color:blue'><b>{$this->Conta}:</b> Transferencia de: {$this->Real($Valor)} efetuada com sucesso de {$this->Cliente} para {$Destino->Cliente}</span><br>";
                echo "<hr>";
            endif;
        }
        public function Real($Valor){
            return "R$" . number_format($Valor,'2','.',',');
        }
        abstract public function VerSaldo();//Métodos abstratos não possuem corpo toda classe que herdar essa classe deverão implementar este metodo
    }