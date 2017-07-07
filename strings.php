<?php
// Entendendo aspas duplas e simples

$nome = "Eduardo";
$sobrenome = 'Gomes';

echo "<hr>";
echo " Estou colocando a variável definida com aspas duplas dentro de aspas duplas no echo, vide abaixo o que acontece <br>";
echo " Meu nome , $nome $sobrenome, foi dado pela minha mãe ";

echo "<hr>";

echo " Vou colocar as variáveis dentro de aspas simples no echo , vide abaixo <br>";
echo ' Meu nome , $nome $sobrenome, foi dado pelo meu pai <br> <br> ';
echo " *** Conclui-se que dentro de aspas duplas aparecem os nomes e dentro de aspas simples aparecem os nomes das variáveis <br> ";
    echo " *** Isso que acontece dentro das aspas duplas chamamos de - INTERPOLAÇÃO DE VARIÁVEIS - de uma certa forma subsituição a concatenação..... <br> ";

echo "<hr>";

echo "<br> FUNÇÕES NATIVAS PARA STRINGS <br> " ;

echo " *** função strtoupper passa tudo para maiúsculo - vou escrever meu nome em minúsculo eduardo gomes *** <br> ";
    
    $meunome = "eduardo gomes";
echo "<br>" .  strtoupper($meunome). "<br>";




echo " <br>*** função strtolower passa tudo para minúsculo - vou escrever meu nome em maiúsculo RITA DE CÁSSIA *** <br> ";
    
    $meunome = "RITA DE CASSIA";
echo "<br>" .  strtolower($meunome). "<br>";


echo " <br>*** Funções ucwords e ucfirst respectivamente, mudei o nome para giovanni gomes - tudo minusculo - : ***<br> ";
    
    $meunome = "giovanni gomes";
echo "<br>" .  ucwords($meunome). "<br>";
echo "<br>" .  ucfirst($meunome). "<br>";


echo " <br>*** Função str_replace troca uma coisa por outra coisa - troca uma letra por outra na variável ...vou trocar a letra a por o na livrariaprana   ";
    
    $empresa = "livrariaprana";
$empresa =  str_replace("a", "o", $empresa) ;
echo "<br> $empresa <br>";
echo "<hr>";






echo " <br>*** Função str_position  utilizando a frase  - Eu adoro fazer compras na livraria prana - vom procurar a palavra livraria...vide resposta:   ";
    
    $frase = "Eu adoro fazer compras na livraria prana";
$q =  strpos($frase, "livraria") ;
echo "<br>";
var_dump($q);
echo "<br> $q <br>";


echo " <br>*** Função substr utilizando a frase  - Eu adoro fazer compras na livraria prana - vou procurar o texto que fica antes da livraria..vide resposta:   ";
    
$frase = "Eu adoro fazer compras na livraria prana";
$q =  strpos($frase, "livraria") ;
echo "<br>";
var_dump($q);
$texto = substr($frase,0, $q);
echo "<br>";
var_dump($texto);
echo "<br> $q <br>";

echo " vou utilizar strlen <br> ";
$palavra = "livraria";
$texto2 = substr($frase, $q +strlen ($palavra),strlen($frase));

echo "<br>";
var_dump($texto2);

echo "<hr>";








?>
