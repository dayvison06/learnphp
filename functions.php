<?php

// Declarando uma função com parametro

function exibirNome($nome){
    echo "Meu nome é $nome";
}

exibirNome("Dembele");

echo "<hr>";

function calcularMedia($nome, $n1, $n2, $n3, $n4){
    $media = ($n1 + $n2 + $n3 + $n3) / 4;

if($media >= 7):
    echo "$nome foi aprovado com a média $media";
else:
    echo "$nome foi reprovado";
endif;
}

// Inserir o nome do aluno e 4 notas para ter a media
calcularMedia("Nicolas",5,7,9,10);
?>