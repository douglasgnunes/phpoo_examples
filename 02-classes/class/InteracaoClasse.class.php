<?php
    class InteracaoClasse{
        public $Nome; #public pode ser acessado pelos metodos, pelo objeto e pela arvore da classe
        public $Idade;
        public $Profissao;
        public $Empresa;
        public $Salario;
        public $Conta;

        function __construct($Nome,$Idade,$Profissao,$Conta){
            $this->Nome = $Nome;
            $this->Idade = $Idade;
            $this->Profissao = $Profissao;
            $this->Conta = $Conta;
        }
        public function Trabalhar($Empresa,$Salario,$Profissao){
            $this->Empresa = $Empresa;
            $this->Salario = $Salario;
            $this->Profissao = $Profissao;
        }
        public function Receber($Valor){
            $this->Conta += $Valor;
        }

    }