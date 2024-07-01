<?php

// Classe abstrata serve como uma planta base para as classes herdeiras
abstract class Banco
{
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    public function setSaldo($s){
        $this->saldo = $s;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    // Metodo abstrato é definido como um modelo que as classes herdeiras devem adotar obrigatoriamente, seguindo o mesmo padrão
    abstract protected function Sacar($s);
    abstract protected function Depositar($d);
}

class Itau extends Banco
{

    // Metodo que acessa a classe abstrata para fazer um saque
    public function Sacar($s)
    {
        $this->saldo -= $s;
        echo "<hr> Sacou: $s";
    }

    // Metodo que acessa a classe abstrata para fazer um deposito
    public function Depositar($d)
    {
        $this->saldo += $d;
        echo "<hr> Depositou: $d";
    }
}

$itau = new Itau();
$itau->setSaldo(1000);
echo"<hr> Saldo: ".$itau->getSaldo();
$itau->Sacar(250);
echo"<hr> Saldo: ".$itau->getSaldo();
$itau->Depositar(500);
echo"<hr> Saldo: ".$itau->getSaldo();