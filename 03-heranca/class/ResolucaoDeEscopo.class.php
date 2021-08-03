<?php
  class ResolucaoDeEscopo{
    #estaticos devem ser acessados apenas pela propria classe
    public $Produto;
    public $Valor;
    public static $Vendas; #Não é acessado pelo objeto é um atributo da classe
    public static $Lucros;

    function __construct($Produto,$Valor){
      $this->Produto = $Produto;
      $this->Valor = $Valor;      
    }
    public function Vender(){
      #Para acessar atributos estaticos devo utilizar a palavra reservada self::
      self::$Vendas += 1;
      self::$Lucros = $this->Valor * self::$Vendas;
      echo "{$this->Produto} vendido por R$ {$this->Valor}<br>";
    }
    public static function Relatorio(){
      #em método da classe só poderei utilizar atributos da classe se utilizar o this teremos erro
      echo "<hr>";
      echo "Este produto vendeu " . self::$Vendas ."unidade(s). Total R$" . self::$Lucros;
      echo "<hr>";

    }
      
  }

  