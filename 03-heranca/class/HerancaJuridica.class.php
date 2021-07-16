<?php
    class HerancaJuridica extends Heranca {
        public $Empresa;
        public $Funcionarios;
        
        function __construct($Nome, $Idade, $Empresa){
            #O simples fato de escrever o parent faz com que ele execute o método construtor da classe pai
            
            parent::__construct($Nome, $Idade);
            $this->Empresa = $Empresa;
                
        }
        public function Contratar($Pessoa){
            echo "A empresa {$this->Empresa} de {$this->Nome} contratou {$Pessoa} <hr>";
            $this->Funcionarios += 1;
        }
        public function VerEmpresa(){
            echo "{$this->Empresa} foi fundada por {$this->Nome} <br><small style ='color:#09f'>";
            parent::VerPessoa();
            echo "</small>";
            
        }
    }