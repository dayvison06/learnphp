<?php

// Condicional simples
$numero = 50;

if($numero >= 50):
    echo "O numero é maior ou igual a 50";
else:
    echo "O numero não é maior ou igual a 50";
endif;

//  Condicional ternária
echo "<hr>";
echo ($numero <= 50) ? "Isso ai" : "Não é não";
echo "<hr>";

// While & While

$contador = 1;
while ($contador <= 10):
    echo "Contador é $contador"."<br>";
    $contador++;
endwhile;

echo "<hr>";

$contador = 1;

do{
    echo "Contador é $contador <br>";
    $contador++;
}while ($contador <= 10);
echo "<hr>";

// For, geralemnte usado para o numero de repetições previamente entendidas
$num = 9;

echo "Tabuada de $num:";
echo "<br>";
for ($contador = 0; $contador <= 10; $contador++):
    echo "$num x $contador = ". ($contador*8)."<br>";
endfor;


?>