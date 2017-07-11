<?php
// Estruturas de controle

echo "aula estruturas de contrle " . "<hr>";

echo " Estrutura if <br>";
    
    $qualSuaidade = 30;
$idadeCrianca = 12;
$idadeMaior = 18 ;
$idadeMelhor = 65;

if($qualSuaidade < $idadeCrianca)
{ echo " Trata-se de uma criança" ;
}

else if ($qualSuaidade < $idadeMaior) {
    echo "Trata-se de um adolescente" ;
}



else if ($qualSuaidade < $idadeMelhor) {
    echo " Trata-se de um adulto " ;
}



else  {
    echo "idoso" ;
}

echo " <hr>";

echo " Ao utilizar a estrutura if lembrar que o else entra depois de else if. Devemos fazer as condições else if antes e caso nenhuma seja satisfeita, aí entramos com else <br> <hr>";

echo "<br>";
echo "Exemplo de um operador ternário -> operador de uma linha só veja abaixo que vc coloca a condição no echo , o ? quer dizer então, e os resultado posssiveis que serão escritos ficam separados por 2 pontos, vide abaixo: <br>";

echo ($qualSuaidade < $idadeMaior) ? 'Menor de Idade' : 'Maior de Idade'  ;

?>
