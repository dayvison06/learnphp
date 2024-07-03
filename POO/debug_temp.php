<?php

$strandA = "ZXYC";
$strandB = "ZXYF";

$tamanhoA = strlen($strandA);
$tamanhoB = strlen($strandB);

$count = 0;

if ($tamanhoA == $tamanhoB) :
    for ($i = 0; $i < $tamanhoA; $i++) {

        if ($strandA[$i] != $strandB[$i]) :
            
            
            var_dump($strandA[$i]);
            var_dump($strandB[$i]);
        endif;
        $count += $i;
    }
else:
    echo "Tamanho diferentes";
endif;

echo $count;