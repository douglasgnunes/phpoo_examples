<?php
    class AbstracaoCP extends AbstracaoCC{ //Herança tripla, pois está herdando de abstracaocc que herda de abstracao
        public $Rendimento;
        function __construct($Cliente,$Saldo){
            parent::__construct($Cliente,$Saldo,0);
            $this->Conta = 'Conta Poupança';
            $this->Rendimento = 1.7;             
        }
    }