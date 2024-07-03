<?php

Class Login{
    public static $user;

    public static function verificaLogin(){
        echo "O usuário ".self::$user." está logado!";
    }

    public function sairSistema(){
        echo "O usuário deslogou";
    }
}

// Quando utilizado um método estático, não é necessário instanciar o mesmo.
Login::$user = "admin";
Login::verificaLogin();

Login::sairSistema();
$login->sairSistema();