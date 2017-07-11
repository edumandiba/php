<?php
// Estruturas de controle

echo "Laços de reptetição for, for it, while. Nesta aula aprenderemos for <br> <br>";
echo "fazendo um forcom decremento <br> <br>";
for ($i= 1000; $i>=10; $i-=50){
    
    echo" O número é : " . $i . "<br>";

}
    echo"<hr>";   
  echo "<br> <br> fazendo um for com incremento <br> <br>";
for ($i= 1; $i<=100; $i+=5){
    
    echo" O número é : " . $i . "<br>";

}      



  echo"<hr>";   
  echo "<br> <br> fazendo um for com incremento e anulando uma determinada faixa com if anulando de 100 a 500 <br> <br>";
for ($i= 1; $i<=1000; $i+=25){
    
    if ($i >100 && $i <500) continue; //notem que nesse caso nao precisa abrir chaves
    
    echo" O número é : " . $i . "<br>";

}      


  echo"<hr>";   
  echo "<br> <br> fazendo um for com incremento e anulando uma determinada faixa com if anulando de 100 a 500  e parando em um determinado valor se encontrar o valor 886 (breack) <br> <br>";
for ($i= 1; $i<=1000; $i+=30){
    
    if ($i >100 && $i <500) continue; //notem que nesse caso nao precisa abrir chaves
    if ($i === 721) break; //notem que nesse caso nao precisa abrir chaves
    
    echo" O número é : " . $i . "<br>";

}      
?>
