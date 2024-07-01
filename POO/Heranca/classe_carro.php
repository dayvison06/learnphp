<?php

class Veiculo
{
    public $modelo;
    public $cor;
    public $ano;

    public function Andar()
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
}

// Classe Moto herdado atributos e métodos de Veiculo
class Moto extends Veiculo
{

    public function darGrau()
    {
        echo "Dando grau...";
    }

}


// Instancia da Classe Carro
$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "Vermelho";
$carro->ano = 2008;
$carro->Andar();
echo "<br>";
$carro->ligarLimpador();
var_dump($carro);

//Instancia da Classe Moto
$moto = new Moto();
$moto->modelo = "Honda";
$moto->cor = "Azul";
$moto->ano = 2019;
$moto->Parar();
echo "<br>";
$moto->darGrau();
var_dump($moto);
