<?php

class Veiculo
{
    //Quando protected só é acessivel por métodos da propria classe ou de classe herdeira
    protected $modelo;
    //Quando private, só é acessível por métodos da propria clase.
    private $cor;
    public $ano;

    public function Andar()
    {
        echo "Andou";
    }

    public function Parar()
    {
        echo "Parou";
    }

    public function getModelo(){
        return $this->modelo;    
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

}

// Classe Carro herdado atributos e métodos de Veiculo
class Carro extends Veiculo
{

    public function ligarLimpador()
    {
        echo "Limpando...";
    }

    public function getCor(){
        return $this->cor;    
    }

    public function setCor($cor){
        $this->cor = $cor;
    }
}

// Classe Moto herdado atributos e métodos de Veiculo
class Moto extends Veiculo
{

    public function darGrau()
    {
        echo "Dando grau...";
    }

    public function getCor(){
        return $this->cor;    
    }

    public function setCor($cor){
        $this->cor = $cor;
    }
}


// Instancia da Classe Carro
$carro = new Carro();
// $carro->modelo = "Gol";
$carro->setModelo("Gol");
// $carro->cor = "Vermelho";
$carro->setCor("Amarelo");
$carro->ano = 2008;
$carro->Andar();
echo "<br>";
$carro->ligarLimpador();
var_dump($carro);

//Instancia da Classe Moto
$moto = new Moto();
// $moto->modelo = "Honda";
$moto->setModelo("Honda");
$moto->setCor("Azul");
$moto->ano = 2019;
$moto->Parar();
echo "<br>";
$moto->darGrau();
var_dump($moto);
