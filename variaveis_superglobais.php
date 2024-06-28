<?php

// Globals, variaveis que podem ser acessadas dentro de uma função ou qualquer lugar do script
$x = 10;
$y = 15;

function soma(){
    echo $GLOBALS['x'] + $GLOBALS['y'];
}

echo "<hr>";

soma();

// Informação do servidor e ambiente de execução

echo $_SERVER['PHP_SELF']."<br>";
echo $_SERVER['SERVER_NAME']."<br>";
echo $_SERVER['SCRIPT_FILENAME']."<br>";
echo $_SERVER['DOCUMENT_ROOT']."<br>";
echo $_SERVER['SERVER_PORT']."<br>";
echo $_SERVER['REMOTE_ADDR']."<br>";

