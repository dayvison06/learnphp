<?php

class Pessoa
{
    public function atribuiNome($nome)
    {
        return "O nome é $nome";
    }
}

class Exibe{
    public $pessoa;
    public $nome;

    public function __construct($nome)
    {
        $this->pessoa = new Pessoa();
        $this->nome = $nome;
    }

    public function exibeNome(){
        echo $this->pessoa->atribuiNome($this->nome);
    }
}

$exibe = new Exibe("Jose");
$exibe->exibeNome();