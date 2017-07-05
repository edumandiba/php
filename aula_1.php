<?php
echo "Meu <strong>primeiro- modificado para teste</strong> programa". "<br>";
echo "Acrescentei esta linha". "<br>";
echo "muito legal o git". "<br>";

echo "Criando um conflito" . "<br>";

// escopo de variáveis , coloco a palavra global para que a variaval $nome possa ser usada fora do escopo da funcao nome.
// na funcao nome 2 , ou eu utilizo a palavra global antes de $nome ou defino um nome por exemplo $nome = "carlos".
$nome = "Eduardo";
function nome(){

global $nome;
echo $nome;
}

function nome2(){
   global $nome;
    echo $nome;
}
nome($nome);
echo "<br>";
    nome2 ($nome);
?>
