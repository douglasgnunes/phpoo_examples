<?php
    class AbstracaoCC extends Abstracao{
        public $Limite;

        function __construct($Cliente, $Saldo,$Limite){
            parent::__construct($Cliente,$Saldo);
            $this->Conta = 'Conta Corrente';
            $this->Limite = (float) $Limite;
        }
        public function VerSaldo(){
            parent::Extrato();
        }

    }