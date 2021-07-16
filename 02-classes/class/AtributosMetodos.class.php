<?php   
    class AtributosMetodos{
        var $Nome;
        var $Idade;
        var $Profissao;
# será um método para armazenar valores então precisarei de parametros
/*Quando manipulamos um atributo ele persiste na memória e ele podera ser utilizado por todos os metodos da minha classe
para isso utilizamos o this-> isso serve para referenciar os elementos da classe, pois os parametros não são do escopo  */
        function setUsuario($Nome,$Idade,$Profissao){ 
            $this->Nome = $Nome;
            //$this->Idade = $Idade; //atributo idade recebe o valor da variavel idade
            $this->setIdade($Idade);
            $this->Profissao = $Profissao;
        }
        function getUsuario(){//não recebe parametros apenas consulta os valores armazenados nos atributos que estão guarados na memória do servidor

            //é interessante não utilizarmos o echo dentro dos metodos e sim o return
            return "{$this->Nome} tem {$this->Idade} anos de idade. E trabalha como {$this->Profissao}";
        }
        function getClasse(){#Os metodos servem para se responsabilizar pelos atributos
            echo "<hr>";
            #utilizando echo para debug
            echo "<pre>";
                print_r($this);//ao usar apenas o this estou referenciando toda a classe
            echo "</pre>";
        }
        function setIdade($Idade){#O metodo tem que se responsabilizar pelas atribuições de valores
            if(!is_int($Idade)): die('Idade informada é incorreta!');
            else:
                $this->Idade = $Idade;
            endif;
        }
        function Envelhecer(){
            $this->Idade = $this->Idade + 1;
        } 
    }

?>