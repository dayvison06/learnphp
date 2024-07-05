<?php

class Pedido
{

    public $numero;
    public $cliente;

}

class Cliente{
    public $nome;
    public $endereco;
}

$cliente = new Cliente();
$cliente->nome = "Damastor Correia";
$cliente->endereco = "Rua Andromeda, Nº: 133";

$pedido = new Pedido();
$pedido->numero = "123";
// Associação entre o objeto Pedido e Cliente
$pedido->cliente = $cliente;

// A associação de objetos é utilizado para uma classe 
//acessar os atributos da outra, passando diretamente as informações, da classe respectiva

$dados = array(
    'numero' => $pedido->numero,
    'nome_cliente' => $pedido->cliente->nome,
    'endereco_cliente' => $pedido->cliente->endereco
);

var_dump($dados);