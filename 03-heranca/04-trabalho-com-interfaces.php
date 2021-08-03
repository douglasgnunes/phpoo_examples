<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHP - Trabalho com Interfaces</title>
        <!--interfaces servem para ditar quais metodos serão implementados pela classe
        mas é mais interessante utilizar classe abstrata
        -->
    </head>
    <body>
      <?php
        require('./interface/IAluno.php');
        require('./inc/Config.inc.php');

        $aluno = new TrabalhoComInterfaces('Douglas','ADS');
        $aluno->Formar();
        $aluno->Matricular('Add');
        $aluno->Formar();
        var_dump($aluno);

      ?>
    </body>
</html>