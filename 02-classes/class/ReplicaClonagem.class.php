<?php
    class ReplicaClonagem{
        //Para manipular a query teremos de ter as partes da query
        var $Tabela;
        var $Termos;
        var $AddQuery;
        var $Query; //armazena a query composta

        #construtor que vai obrigar a construir a query  ao instanciar o objeto
        function __construct($Tabela,$Termos,$AddQuery){
            //seria interessante validar os tipos de dados para fazer a execução correta
            $this->Tabela = $Tabela;
            $this->Termos = $Termos;
            $this->AddQuery = $AddQuery;
        }
        #Função para alterar o nome da tabela
        function setTabela($Tabela){
            $this->Tabela = $Tabela;
        }
        #Função para alterar os Termos da query
        function setTermos($Termos){
            $this->Termos = $Termos;
        }
        #função que simula e le a criação da query
        function Ler(){
            $this->Query = "SELECT * FROM {$this->Tabela} WHERE {$this->Termos} {$this->AddQuery}";
            echo "{$this->Query} <hr>";
        }

    }