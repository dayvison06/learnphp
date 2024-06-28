<?php

// Declação de um array
$nomes = array("Rodrigo", "Filipim", "Danilo", "Timótio");

// Exibe se é um array retorno true or false, com o is_array;
if(is_array($nomes)):
    echo "É um array";
else:
    echo "Não é um array";
endif;

echo "<hr>";

// Valida se um valor existe no array em questão, "Rodrigo" em [nomes], retorna true or false (1 ou 0)
if(in_array("Filipim", $nomes)):
    echo "Existe no array";
else:
    echo "Não existe no array";
endif;
echo "<hr>";
// // Retonar um novo array passando as chaves como parametro
$feira = [0=>"Tomate",1=>"Pêra",2=>"Maça",3=>"Repolho",4=>"Coloral",5=>"Alface",6=>"Banana",7=>"Beterraba"];
$keys = array_keys($feira);
print_r($keys);

// Retonar um novo array passando os valores como parametro
echo "<hr>";
$values = array_values($feira);
print_r($values);
echo "<hr>";
var_dump($values);
echo "<hr>";

// Testando a exibição dos arrays $Keys e $Values, entendido que essa opção é valida caso o array seja associativo, contendo chave "=>".
// Dessa forma, é possível capturar as chaves do array, somente ou os valores.

foreach($keys as $item){
    echo $item."<br>";
}

// Array_pop exclui a ultima posição do array

$carros = array("Camaro", "Uno de Escada", "Gol quadrado");
print_r($carros);
echo "<hr>";
echo array_pop($carros);
echo "<hr>";
print_r($carros);
echo "<hr>";

// Array_shift exclui a primeira posição do array

array_shift($carros);

// Array_merge, junta o conteúdo dos 2 arrays, incluindo chave e valor
$motos = array("moto1"=>"Pop100", "moto2"=>"Titan Start 160", "moto3"=>"Bros 160");
$veiculos = array_merge($carros, $motos);
print_r($veiculos);

//Array_unshift, adiciona um ou mais elementos no inicio do array
// adiciona os elementos no inicio do array

echo "<hr>";
$frutas = array("Uva", "Laranja", "Damasco");
array_unshift($frutas, "Manga", "Graviola", "Acerola"); 
print_r($frutas);
echo "<br>";

// array_unshift($frutas, "Manga", "Graviola", "Acerola"); adiciona os elementos no fim do array
array_push($frutas, "Manga", "Graviola", "Acerola");
echo "<hr>";
print_r($frutas);


// array_combine, cria um array utilizando valores chaves de um array e junta aos valores de outro array.
echo "<hr>";
$keys = array("Campeão", "Vice", "Terceiro");
$valores = array("Vasco", "Flamengo", "Botafogo");

$timesFut = array_combine($keys, $valores);
print_r($timesFut);

// array_sum, soma todos os valores dentro de um array
echo "<hr>";
$soma = array(1,2,3,4,5,6,7,8);
echo array_sum($soma);

// explode, transforma string em array
echo "<hr>";
$data  = "30/02/2018";
// Primero argumento é o separador o segundo é o array
$novaData = explode('/', $data);
print_r($novaData);
echo "<hr>";
$frase = "joao corre por cima da ponte";
$frase_array = explode(" ", $frase);
print_r($frase_array);

// implode, transforma array em string
echo "<hr>";
$nomes_pessoas = ["Rodrigo", "Carlos", "Neusa", "Frederico"];
// Primero argumento é o separador o segundo é o array
$string = implode(",",$nomes_pessoas);

print_r($string);
?>