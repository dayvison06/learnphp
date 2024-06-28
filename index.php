<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $nome = "Olá Maradona";

    var_dump($nome);

    // Veirifica se é uma string
    if (is_string($nome)) :
        echo ("É uma string");
    else :
        echo ("Não é uma string");
    endif;

    echo ("<hr>");

    // Int
    $idade = 10;
    var_dump($idade);
    if (is_int($idade)) :
        echo ("É uma inteiro");
    else :
        echo ("Não é  um inteiro");
    endif;
    echo ("<hr>");

    // Validação se é um float
    $altura = 1.77;
    var_dump($altura);
    if (is_float($altura)) :
        echo ("É um float");
    else :
        echo ("Não é float");
    endif;

    echo ("<hr>");

    // Validação se é um array, teste criando array
    $array = array("Id1", "Id2", "Id3", 1, 2, 3, 4.5, true);
    var_dump($array);

    if (is_array($array)) :
        foreach ($array as $item) {
            echo $item;
            echo ("<hr>");
        }
    else :
        echo ("Não é um array");
    endif;

    ?>

<a href="/dev/poo.php">Página POO</a>

</body>

</html>