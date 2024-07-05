<?php

class Pessoa
{
    public $idade;

    // Metodo utilizando quando "clone" é utilizado para uma variavel
    public function __clone(){
        echo "Clonagem de objeto";
    }
}

$pessoa = new Pessoa();

$pessoa->idade = 12;



// Clonagem serve para criar uma cópia da variavel instanciada, podendo passar métodos diferentes. fazendo a mesma referencia
// Sem precisar instanciar novamente a variavel "$pessoa2" a um "new Pessoa";
$pessoa2 = clone $pessoa;
$pessoa2->idade = 35;
