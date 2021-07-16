<?php
    /**
     * <b> DocumentacaoDeClasse:</b>
     * Essa classe foi criada para mostrar a interação de objetos também utilizada para documentar com PHPDoc
     * @copyright (c) 2021, Douglas Nunes
     */
    class DocumentacaoDeClasse{ 
        public $Empresa;
        public $Setores;

        /** @var InteracaoClasse*/ #faz a busca na classe de interação de classe
        public $Funcionario;

        function __construct($Empresa){
            $this->Empresa = $Empresa;
            $this->Setores = 0;
        }
        public function Contratar($Funcionario, $Cargo, $Salario){
            $this->Funcionario = (object) $Funcionario;
            $this->Funcionario->Trabalhar($this->Empresa, $Salario, $Cargo);
            $this->Setores += 1;
        }
        public function Pagar(){ #quando executar o metodo pagar do empresa vou ir até o objeto funcionario vou executar o metodo receber e  receberei o proprio salario
            $this->Funcionario->Receber($this->Funcionario->Salario);
        }
        public function Promover($Cargo, $Salario = null){
            $this->Funcionario->Profissao = $Cargo;
            if($Salario):
                $this->Funcionario->Salario = $Salario;
            endif;            
        }
        public function Demitir($Recisao){
            $this->Funcionario->Receber($Recisao);
            $this->Funcionario->Empresa = null;
            $this->Funcionario->Salario = null;
            $this->Setores -= 1;
        }
        public function Funcionarios($Funcionario){
            $this->Funcionario = (object) $Funcionario;
        }

    }