<?php

class Newsletter
{
    public function cadastrarEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) :
            // Forma de lançar uma exceção, passando uma mensagem e o código do erro;
            throw new Exception('E-mail inválido', 1);
        else :
            echo "Email Cadastrado!";
        endif;
    }
}

$newsletter = new Newsletter();

// Com trycatch é possível rodar o códig oe em caso de falha retornar o erro de forma personalizavel
try {
    $newsletter->cadastrarEmail("teste@");
} catch (Exception $e) {
    echo "Mensagem: " . $e->getMessage() . "<br>";
    echo "Code: " . $e->getCode() . "<br>";
    echo "Linha: " . $e->getLine() . "<br>";
    echo "Arquivo: " . $e->getFile() . "<br>";
}
