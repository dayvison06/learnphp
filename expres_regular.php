<?php

// Valida se as palavras informadas em $string é valida através da $padrao
$string = "2";
$padrao = "/^[a-z0-9]{1,5}$/";

$email = "contato@gmail.com";
$default = "/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br)$/i";

if(preg_match($padrao, $string)):
    echo "Válido";
    echo "<hr>";
    echo $string;
else:
    echo "Inválido";
    echo "<hr>";
endif;

?>