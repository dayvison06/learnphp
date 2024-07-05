<?php

// class Pessoa{
//     private $nome;

//     // get e setters para definir e recuperar um valor a um atributo através de métodos
//     public function setNome($nome){
//         $this->nome = $nome;
//     }

//     public function getNome(){
//         return $this->nome;
//     }

    
// }


// $pessoa = new Pessoa();
// $pessoa->setNome("Jegue");
// echo $pessoa->getNome();

class Animal{
    private $nome;

    public function __set($nome, $valor){
        $this->nome = $valor;
    }

    public function __get($nome)
    {
        return $this->nome;
    }

    public function __toString()
    {
        return "Tentei imprimir o objeto";
    }
}

$animal = new Animal();
$animal->nome = "Vinicius";

var_dump($animal);