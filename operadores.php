<?php


// O primeiro operador de atribuição é o =

$nome = "Eduardo" ;


// O segundo é o ponto (abaixo utilizamos ele no echo)

echo $nome ." Voce está estudando? <br>" ;

        //o terceiro é os dois ultimos juntos         
$nome .= " :Estou gostando" ;
    echo $nome;

// utilizando o +=- perceba a ordem abaixo

$valorTotal = 0;
$valorTotal += 100;
$valorTotal += 25;
$valorTotal -= 10;

echo "<br> O valor total do carrinho com desconto de R$10,00 é: ". $valorTotal;

$valorTotal *= .1;
 echo "<br> O valor total do carrinho com 10% de desconto é: ". $valorTotal;          
         
            ?>
