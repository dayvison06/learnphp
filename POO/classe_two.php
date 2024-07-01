<?php

// Criando um classe
class Pessoa{
    // Atributos da classe Pessoa
    public $nome;
    public $idade;

    //Métodos ou funções
    //Funções dentro de uma classe tornam-se métodos
    public function Falar(){
        // Para utilizar atributos ou métodos dentro do escopo da classe é necessário usar "$this->"
        echo $this->nome." de ".$this->idade. " acabou de falar";
    }

    // Chamando um método dentro de outro
    public function Andar(){
        echo $this->Falar();
    }
}

// Instânciando uma classe
$dayvison = new Pessoa();
// Acessando um atributo de uma clase
// Atribuindo um valor para o atributo "nome" 
$dayvison->nome = "Dayvison Rocha Pereira";
$dayvison->idade = 23;

// Utilizando um método existente em uma classe
$dayvison->Falar();

// Exibindo o valor atribuído aos atributos

// echo $dayvison->nome;
// echo $dayvison->idade;
