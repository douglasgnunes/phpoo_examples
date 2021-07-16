<!DOCTYPE html>
<html lang="pt-br">
    <head charset="UTF-8"></head>
    <title>PHP - Conceitos de Herança</title>
    <body>
        <?php
            #Herança herda código pronto temos uma classe genérica para várias classes aplicarem o código sem reescrever
            require('./inc/Config.inc.php');
            $pessoa = new Heranca('Douglas',27);
            $pessoa->Formar('Analise e Desenvolvimento de sistemas');
            $pessoa->Formar('Redes de  computadores');
            $pessoa->Envelhecer();
            $pessoa->VerPessoa();
            echo "<hr>";
            $pessoaME = new HerancaJuridica('Douglas Nunes', 27,'TSBM');
            $pessoaME->Formar('Analise e Desenvolvimento de sistemas');
            $pessoaME->Formar('Redes de  computadores');
            $pessoaME->Envelhecer();
            $pessoaME->VerPessoa();
            $pessoaME->Contratar('Marcos'); 
            $pessoaME->VerEmpresa();
            echo "<pre>";
            
            print_r($pessoaME);
            echo "</pre>";
            //print_r($pessoa);
            //print json_encode($pessoa);
        ?>
    </body>
</html>