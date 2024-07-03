<?php

Class Pessoa{
    const nome = "Dayvison";

    public function exibirNome(){
        echo self::nome;
    }
}


Class Rodrigo extends Pessoa{
    const nome = "Oliveira";

    public function exibirNome(){
        echo parent::nome;
    }
}

$Rodrigo = new Rodrigo();
$Rodrigo->exibirNome();