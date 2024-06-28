<?php

// formata um numero, desde a quantidade casa decimal quanto os separadores "," e "."

$db = 1234.56;
$preco = number_format($db, 2, ",", ".");
echo "O valor do produto é R$ $preco";
echo"<hr>";

// Arrendonda o numero para o valor mais proximo

echo round(3.49);
echo"<hr>";

// Arrendonda o numero sempre pra cima

echo ceil(3.40);

echo"<hr>";

// Arrendonda o numero sempre pra baixo

echo floor(8.90);

echo"<hr>";

// Gera numeros randomicamentes baseados na faixa definida

echo rand(1, 20);
?>