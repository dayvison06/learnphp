<?php

Class Animal{
    public function Andar(){
        echo "O animal andou";
    }

    public function Correr(){
        echo "O animal correu";
    }
}

Class Cavalo extends Animal{
    public function Andar(){
        $this->Correr();
    }
    
}

//Instanciando classe Cavalo
echo "Classe Cavalo";
echo "<hr>";
$cavalo = new Cavalo();
$cavalo->Andar();
echo "<hr>";
//Instanciando classe Animal
echo "Classe Animal";
echo "<hr>";
$animal = new Animal();
$animal->Andar();
echo "<hr>";