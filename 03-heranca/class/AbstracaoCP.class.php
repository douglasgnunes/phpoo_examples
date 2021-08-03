<?php
    class AbstracaoCP extends AbstracaoCC{ //Herança tripla, pois está herdando de abstracaocc que herda de abstracao
        public $Rendimento;
        function __construct($Cliente,$Saldo){
            parent::__construct($Cliente,$Saldo,0);
            $this->Conta = 'Conta Poupança';
            $this->Rendimento = 1.7;             
        }
        final public function Depositar($Valor){
            $Juro = $Valor * ($this->Rendimento / 100);
            $Deposito = $Valor + $Juro;

            parent::Depositar($Deposito);
            echo "<small style='color:#09f'>Valor do depósito : {$this->Real($Valor)} || Rendimentos: {$this->Real($Juro)}</small><hr>";
        }
    }