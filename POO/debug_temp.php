<?php

//Resistor Color

// $strandA = "A";
// $strandB = "A";

// $tamanhoA = strlen($strandA);
// $tamanhoB = strlen($strandB);

// $count = 0;

// if ($tamanhoA == $tamanhoB) :
//     for ($i = 0; $i < $tamanhoA; $i++) {

//         if ($strandA[$i] != $strandB[$i]) :
//             $count++;
//         endif;
//     }
//     echo "Distancia é $count";
// else :
//     echo "Tamanho diferentes";
// endif;

// ==============================================
// $array = ['black','brown','red','orange','yellow','green','blue','violet','grey','white'];
// $colors = ['brown', 'black', 'Aviao'];

// $busca = array_search($colors[0], $array);
// $busca2 = array_search($colors[1], $array);

// $juntar = "$busca"."$busca2";
// echo (string)$juntar;

// ==============================================

$proverbio = [];

if (count($palavras) === 0);

for ($i = 0; $i < count($palavras) - 1; $i++) {
    $proverbio[] = "For want of a " . $palavras[$i] . " the " . $palavras[$i + 1] . " was lost.";
}

$proverbio[] = "And all for the want of a " . $palavras[0] . ".";

$proverb = [];
if (count($words) === 0) return $proverb;

for ($i = 0; $i < count($words) - 1; $i++)
{
    $proverb[] = "For want of a " . $words[$i] . " the " . $words[$i+1] . " was lost.";           
}

$proverb[] = "And all for the want of a " . $words[0] . ".";
return $proverb;