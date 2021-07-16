<!DOCTYPE html>
<html>
    <head>
        <meta>
        <title>PHP - Interação de Objetos</title>
    </head>
    <body>
        <?php
            require('./class/InteracaoClasse.class.php');
            require('./class/InteracaoDeObjetos.class.php');
            $douglas = new InteracaoClasse('Douglas Nunes', 30,'Programador',300);
            $marcos = new InteracaoClasse('Marcos', 20, 'Web Design', 100);
            $tsbm = new InteracaoDeObjetos('TSBM TECNOLOGIA');
            $tsbm->Contratar($douglas, 'WebMaster', 36000);
            $tsbm->Pagar();
            $tsbm->Promover('Gerente de Projetos', 60000);
            $tsbm->Pagar();            
            $tsbm->Contratar($marcos,'Designer', 2100);
            $tsbm->Pagar();
            $tsbm->Pagar();
            $tsbm->Promover('Administrador de Projetos');
            $tsbm->Funcionarios($douglas);
            $tsbm->Pagar();
            $tsbm->Demitir(110000);
            echo "<pre>";
            var_dump($douglas,$marcos,$tsbm);
            echo "</pre>"; 
        ?>
    
    </body>

</html>