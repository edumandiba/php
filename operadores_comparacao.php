<?php


// operadores comparacao

// maior ou menor
echo "O valores que estamos utilizando respectivanmente como variáveis é o 2 e o 10 <br>";

echo " utilizando o maior " . "<br>";
$a = 2;
$b =  10;
var_dump ($a>$b) ;
echo "<br>";

// maior ou menor

echo " utilizando o menor " . "<br>";
$a = 2;
$b =  10;
var_dump ($a<$b) ;
echo "<br>";

echo "<hr>";

echo " utilizando o menor e igual " . "<br>";
$a = 2;
$b =  10;
var_dump ($a<=$b) ;
echo "<br>";
  
echo "<hr>";

echo " utilizando o maior e igual " . "<br>";
$a = 2;
$b =  10;
var_dump ($a>=$b) ;
echo "<br>";

echo "<hr>";

echo " utilizando igual igual " . "<br>";
$a = 2;
$b =  10;
var_dump ($a==$b) ;
echo "<br>";

echo "<hr>";
echo "<hr>";

echo "Observaçao: se vc utilizar apenas 1 igual, vc tem um operador de atribuição, ou seja ele atribui o valor vide exemplo abaixo que ele atribuiu o valor $b para $a (2=10) por isso deu 10 <br>";
    
    var_dump($a=$b);
echo "<hr>";

echo "<hr>";

echo " utilizando 3 igual = = = (identico) tem que ter o mesmo valor e ser do mesmo tipo a varíavel (mudei as variáveis para 55.0 e 55.0 " . "<br>";
$a = 55.0;
$b = 55.0;
var_dump ($a===$b) ;
echo "<br>";

echo "<hr>";
    
echo " utilizando 3 != (diferente)  <br>";
$a = 2;
$b = 10;
var_dump ($a!=$b) ;
echo "<br>";

echo "<hr>";
    
echo " utilizando 3 !== (validando o tipo de dado)  <br>";
$a = 2;
$b = 10;
var_dump ($a!=$b) ;
echo "<br>";

            ?>
