<?php
    class Polimorfismo{
        public $Produto;
        public $Valor;
        public $Metodo;

        function __construct($Produto,$Valor){
            $this->Produto = $Produto;
            $this->Valor = $Valor;
            $this->Metodo = 'Boleto';
        }
        public function Pagar(){
            echo "Você pagou {$this->Real($this->Valor)} por um {$this->Produto} <hr>";
            echo "<smal> Pagamento efetuado via {$this->Metodo}</smal><br>";
        }
        public function Real($Valor){
            return "R$ " . number_format($Valor,'2','.',',');
        }
        
    }