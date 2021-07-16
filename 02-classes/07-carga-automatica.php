<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHP - Carga Automática</title>
    </head>
    <body>
        <?php
            require('./inc/Config.inc.php');
            $classeA = new ClassesObjetos;
            $classeB = new AtributosMetodos;
            $classeC = new ComportamentoInicial('Douglas', 27, 'Programador', 100);

            echo "<pre>";
            var_dump($classeA,$classeB,$classeC);
            echo "</pre>";
        ?>
    </body>
</html>