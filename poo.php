<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>POO</h1>
    <?php
    
    class Cliente
    {
        public $nome;
        public $cpf;
        public function atribuirNome($nome)
        {
            $cpf = '123-123-123-12';
            $this->nome = $nome;
            $this->cpf = $cpf;
        }
        
    }

    Class Moto{
        protected $nome;
        public $modelo;

        public function atribuirNomeEModelo(string $nome, int $modelo){
            $this->nome = $nome;
            $this->modelo = $modelo;
        }

    }

    $moto = new Moto();
    $moto->atribuirNomeEModelo("Bros",160);
    
    var_dump($moto);

    $cliente = new Cliente();
    $cliente2 = new Cliente();
    $cliente->atribuirNome("Dayvison");
    $cliente2->atribuirNome("Jeorge");
    var_dump($cliente);
    var_dump($cliente2);
    echo("<hr>");

    $nome='Dayvison';
    function exibeNome(){
        global $nome;
        echo $nome;
    }

    exibeNome();
    echo "<hr>";

    function exibeCidade(){
        global $cidade;
        $cidade = "Rio de Janeiro";
    }

    exibeCidade();
    echo $cidade;
    echo "<hr>";
    ?>



    <a href="/dev/index.php">Página POO</a>
</body>

</html>