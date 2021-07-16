<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <title>PHP - Modelagem de Classe</title>
        </head>
        <body>
            <?php
                require('./class/ModelagemDeClasse.class.php');
                $douglas = new ModelagemDeClasse('Douglas',28,'Desenvolvedor',1200);
                $douglas->setProfissao('Web Master');
                $douglas->Trabalhar('um portal',12000);
                var_dump($douglas);
            ?>
        </body>
    </html>