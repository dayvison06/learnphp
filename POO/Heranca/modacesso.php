<?php

class Veiculo
{
    public $modelo;
    public $cor;
    public $ano;

    private function Andar()
    {
        echo "Andou";
    }

    public function Parar()
    {
        echo "Parou";
    }

}

// Classe Carro herdado atributos e métodos de Veiculo
class Carro extends Veiculo
{

    public function ligarLimpador()
    {
        echo "Limpando...";
    }

    public function mostrarAcao(){
        $this->Andar();
    }
}

$carro = new Carro();
$carro->mostrarAcao();
