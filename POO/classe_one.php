<?php

// Criando um classe
class Pessoa{
    // Atributos da classe Pessoa
    public $nome;
    public $idade;

    //Métodos ou funções
    //Funções dentro de uma classe tornam-se métodos
    public function Falar(){
        echo "Falou";
    }
}

// Instânciando uma classe
$dayvison = new Pessoa();
// Utilizando um método existente em uma classe
$dayvison->Falar();
// Acessando um atributo de uma clase
// Atribuindo um valor para o atributo "nome" 
$dayvison->nome = "Dayvison Rocha Pereira";
$dayvison->idade = 23;
// Exibindo o valor atribuído aos atributos
echo $dayvison->nome;
echo $dayvison->idade;
