<?php
    class ModelagemDeClasse{
        public $Nome; #public pode ser acessado pelos metodos, pelo objeto e pela arvore da classe
        public $Idade;
        public $Profissao;
        public $ContaSalario;

        function __construct($Nome,$Idade,$Profissao,$ContaSalario){
            $this->Nome = $Nome;
            $this->Idade = $Idade;
            $this->Profissao = $Profissao;
            $this->ContaSalario = $ContaSalario;
        }
        public function Trabalhar($Trabalho,$Valor){
            $this->ContaSalario += $Valor;
            $this->DarEcho("{$this->Nome} desenvolveu um {$Trabalho} e recebeu {$this->ToReal($Valor)} ");
        }
        //metodos public também podem ter modificadores de acesso
        public function SetNome($Nome){
            $this->Nome = $Nome;
        }
        public function SetIdade($Idade){
            $this->Idade = $Idade;
        }
        public function SetProfissao($Profissao){
            $this->Profissao = $Profissao;
        }
        public function SetContaSalario($ContaSalario){
            $this->ContaSalario = $ContaSalario;
        }
        public function ToReal($Valor){
            return number_format($Valor,'2','.',',');
        }
        public function DarEcho($Mensagem){
            echo "<p>{$Mensagem}</p>";
        }

    }