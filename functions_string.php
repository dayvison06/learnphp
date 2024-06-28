<?php


// Transforma string em maiuscula

$nome = "dayvison rocha";

echo strtoupper($nome);

echo "<hr>";

// Transforma string em minuscula

$nome_min = "DaYvIsOn ROCHA";

echo strtolower($nome_min);

echo "<hr>";

// Recortar string a partir da posição do elemento

$mensagem = "Olá mundo";
echo substr($mensagem, 2, 4);

// Adiciona preenchimento na string para aumentar espaços, utilizando valores, sinais e afins ou espaço em branco

echo "<hr>";

$objeto = "mouse";
echo str_pad($objeto, 7, "*");

// Realiza a troca de alguma elemento na string por outro

echo "<hr>";

$texto = "A seleção Argentina será campeã da copa do mundo de 2018";
$novoTexto = str_replace("Argentina", "Brasileira", $texto);

echo $novoTexto;

//strpos, retorna a posição de uma palavra no texto
echo "<hr>";

echo strpos($texto, "copa");

//strlen, retorna o tamanho da string
echo "<hr>";
echo strlen($texto);

?>