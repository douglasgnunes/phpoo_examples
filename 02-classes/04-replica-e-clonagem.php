<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <title>PHP - Réplica e Clonagem</title>
        </head>
        <body>
            <?php
                require('./class/ReplicaClonagem.class.php');
                $readA = new ReplicaClonagem("posts","categoria = 'noticias'",'ORDER BY data DESC');
                $readA->Ler();

                //No mesmo objeto posso mudar o termo e está realizando outro select ex:
                $readA->setTermos("categoria = 'internet'");
                $readA->Ler();

                #clonando readA 
                $readB = $readA;
                $readB->setTermos("categoria = 'redes sociais'");
                $readB->Ler();

                $readC = clone($readB);
                $readC->setTabela('comentarios');
                $readC->setTermos("post = 25");
                $readC->Ler();
                var_dump($readA,$readB,$readC);
                #Se o metodo ler ficar em baixo para todos os $read se for replicado teremos complitos nesses casos usamos o clone
                #Nesse formato eu  ocupo o mesmo espaço na memória para executar funcoes diferentes
            ?>
        </body>
    </html>
