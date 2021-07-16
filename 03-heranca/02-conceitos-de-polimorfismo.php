<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta>
        <title></title>
    </head>
    <body>
        <?php
            //polimorfismo = varias formas e ele ocorre em Override sobreescrita
            //ex: quando pegamos um método da classe pai e reescrevecom o mesmo nome mesmos parms, mas com comportamento diferente
            //overload = sobrecarga do metodo muda os parametros
            require('./inc/Config.inc.php');
            $x = 'Cadeira';
            $dinheiro = 334.90;

            $boleto = new Polimorfismo($x,$dinheiro);
            $boleto->Pagar();
            echo "<pre>";
            var_dump($boleto);
            echo "</pre>";
            echo "<hr>";

            $deposito = new PolimorfismoDeposito($x, $dinheiro);
            $deposito->Pagar();
            echo "<pre>";
            var_dump($deposito);
            echo "</pre>";
            echo "<hr>";

            $cartao = new PolimorfismoCartao($x,$dinheiro);
            $cartao->Pagar(10);
            echo "<pre>";
            var_dump($cartao);
            echo "</pre>";
            echo "<hr>";
        ?>
    </body>
</html>