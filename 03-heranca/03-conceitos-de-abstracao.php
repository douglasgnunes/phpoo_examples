<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHP - Conceitos de Abstração</title>
    </head>
    <body>
        <?php
            require('./inc/Config.inc.php'); 
            // $conta = new Abstracao('Douglas Nunes', 500);
            // $conta2 = new Abstracao('Kelen', 300);
            // $conta->Depositar(1000);
            // $conta->Sacar(500);
            // $conta->Transferir(500 ,$conta);
            // $conta->Transferir(500,$conta2);
            // echo "<pre>";
            // var_dump($conta,$conta2);
            // echo "</pre>";
            $cc = new AbstracaoCC('Douglas',0,1000);
            $cp = new AbstracaoCP('Douglas', 0);

            $cc->VerSaldo();
            $cp->VerSaldo();
            echo "<pre>";
            var_dump($cc,$cp);
            echo "</pre>";
        ?>
    </body>
</html>