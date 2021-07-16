<!DOCTYPE html>
<html>
    <head>
        <meta lang="pt-br">
        <title>PHP - Comportamento Inicial</title>
    </head>
    <body>
        <?php
            require('./class/ComportamentoInicial.class.php');

            // $douglas = new ComportamentoInicial; //é possível utilizar abre e fecha parenteses no fim, mas é mais correto assim
            // $douglas->ver();
            //já o metodo é identificado pelo () sempre que instancio uma classe os atributos estão null este é o comportamento inicial de uma classe
            //para alterarmos isso utilizamos os métodos mágicos ex metodo construtor que será automaticamente executado quando passamos o new

            $douglas = new ComportamentoInicial('Douglas', 27,'Programador', 10.1);
            $douglas->ver();
        ?>
    </body>
</html>