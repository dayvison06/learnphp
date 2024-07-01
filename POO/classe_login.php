<?php

// Criação da classe Login
class Login{
    // Atributos da clase Login
    // Atributos privados "private" só podem ser modificados de fora da classe através de métodos (Get e Set)
    private $email;
    private $senha;

    // Pega o valor do atributo email
    public function getEmail(){
        return $this->email;
    }

    // Define o valor do atributo email
    public function setEmail($e){
        // Criando um Sanitiza para limpar o e-mail caso seja informado exemplo: teste()/@tres.com, removendo os caracteres como "()/".
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;

        

    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($s){
        $this->senha = $s;
    }

    // Criação de método logar para administrar a função de login
    public function Logar(){
        if($this->email == "teste@teste.com" and $this->senha == "123456"):
            echo "Logado com sucesso!";
        else:
            echo "Dados inválidos";
        endif;

    }
}


$logar = new Login();
$logar->setEmail("teste@teste.com");
$logar->setSenha("123456");
$logar->Logar();

echo "<hr>";
echo $logar->getEmail();
echo "<br>";
echo $logar->getSenha();

//PUBLIC

// // Instanciamento de classe para usar os metodos

// $logar = new Login();

// // Passando os valores aos atributos enquanto os mesmos estão definidos como "Public"

// $logar->email = "teste@teste.com";
// $logar->senha = "123456";

// // Chamando o método Logar

// $logar->Logar();