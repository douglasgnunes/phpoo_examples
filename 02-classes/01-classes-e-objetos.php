<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Classes e Objetos</title>
    </head>
    <body>
        <?php
            #instanciar classe
            require('./class/ClassesObjetos.class.php');
            #transforma variavel em um objeto que é uma instancia da classe
            $teste = new ClassesObjetos();
            #com  essa  variavel->atribuida posso seleiconar os atributos ou métodos que quero utilizar
            //$teste->getClass($Class,$Funcao)
            $teste->getClass('De introdução','mostrar uma classe.');
            $teste->verClass();
            
            $teste->Classe = 'Classe 2';
            $teste->Funcao = 'Ver atributos';
            $teste->verClass();

            #cada objeto que vamos criar sera especifico para resolver algum problema do sistema
            
        ?>
    </body>
</html>
