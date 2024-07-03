<?php
require 'loja.php';
require '../Models/produto.php';

//o Namespace permite que seja utilizado uma classe de um ambiente no arquivo
// podendo passar os métodos da classe em questão;

//forma de declarar o namespace para utilizar a classe Produto contida na pasta "Models"
use Models\Produto as pModel; // utilizar "as" permite atribuir um apelido para trabalhar com a classe.
use Classes\Loja as lojaClass;

$produto = new pModel();
$produto->sumUp();