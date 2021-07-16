<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Atributos e Metodos</title>
    </head>
    <body>
        <?php 
            require('./class/AtributosMetodos.class.php');
            $pessoa = new AtributosMetodos();

            //-> serve para poder obter os metodos e atributos da classe
            $pessoa->setUsuario('Douglas', 27, 'Developer');
            $pessoa->Envelhecer();
            $usuario = $pessoa->getUsuario();
            echo $usuario;

            $pessoa->getClasse();

        ?>
    </body>
</html>