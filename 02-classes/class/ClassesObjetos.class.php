<?php
#nome do arquivo deve ser o mesmo nome da classe ex: Usuarios->arquivo Usuarios.class.php e o nome da classe
#será o mesmo nome do arquivo até o primeiro ponto ex: Usuarios
#regras básicas na programação OO
    class ClassesObjetos{
        #escopo básico 3 elementos atributos, métodos e parametros
        #abaixo temos atributos (caracteristicas da classe) que serão utilizados para validar, armazenar, passar 
        var $Classe;
        var $Funcao;

        #métodos são funções aninhadas servem de auxilio aos atributos os nomes abaixo ficam a critério
        function getClass($Classe,$Funcao){//esses são os parametros sempre primeira letra em caixa alta eles servem para interagir atraves dos objetos e passar valores para as classes
            //ja que devemos privar o acesso aos atributos pois utilizamos os metodos e parametros para fazer esa gestao
            echo "<p> A classe {$Classe} serve para {$Funcao}";
            #ao usar "" eu posso criar um laço dentro das chaves para passar valores dinamicos
        }
        function verClass(){
            echo "<pre>";
                print_r($this); #a pseudovariavel $this serve para referenciar a propria classe this = este
            echo "</pre>";
        }
    }