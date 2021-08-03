<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHP - Operador de resolução de escopo</title>
        <!--Operador de resolução de escopo com ele posso acessar os membros da classe assim como utilizamos o -> -->
    </head>
    <body>
      <?php
        require('./inc/Config.inc.php');

        $produto = new ResolucaoDeEscopo('livro de PHP', 59.90);
        $digital = new ResolucaoDeEscopoDigital('livro de PHP', 39.90);
        $produto->Vender();
        $produto->Vender();
        $produto->Vender();
        $digital->Vender();
        $digital->Vender();
        //$produto->Relatorio(); #Vai chamar o metodo pq estou apenas executando e não interagindo
        #Seria mais interessante utilizar Operador de resolução de escopo assim não uso o objeto e sim diretamente a classe
        ResolucaoDeEscopo::Relatorio();
        echo  "o produto Livro PHP vendeu " . ResolucaoDeEscopo::$Vendas . "<br>"; #nesse caso acesso diretamente o atributo estatico da classe
        echo ResolucaoDeEscopoDigital::$Digital . "livros digitais <br>";
        echo ResolucaoDeEscopo::$Vendas - ResolucaoDeEscopoDigital::$Digital . "Livros impressos";
        var_dump($produto,$digital);
      ?>
    </body>
</html>