<?php   
    class ComportamentoInicial{
        var $Nome;
        var $Idade;
        var $Profissao;
        var $Salario;

        #metodo construtor vai ser executado automaticamente quano instanciar o objeto
        function __construct($Nome,$Idade,$Profissao,$Salario){
            #aqui trabalhamos  da seguinte forma o atributo da classe recebera o conteudo da váriavel no se for string
            $this->Nome = (string) $Nome;
            $this->Idade = (int) $Idade;
            $this->Profissao = (string) $Profissao;
            $this->Salario = (float) $Salario;
            echo "O objeto {$this->Nome} foi iniciado!";
        }
        
        function __destruct(){
            echo "O objeto {$this->Nome} foi destruido!";
        }
        #debug
        function ver(){
            echo "<pre>";
                print_r($this);
            echo "</pre>";
        }
    }