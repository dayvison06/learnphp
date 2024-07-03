<?php

namespace Models;

class Produto
{
    public function mostrarDetalhes()
    {
        echo "Detalhes do produto da pasta Models";
    }

    public function sumUp(string $input) : string
    {
        if (empty($input) && $input != 0) :
            var_dump($input);
            echo 'Required field';
        elseif ((int)$input < 1) :
            var_dump($input);
            echo 'Must be a whole number larger than 0';
        endif;

        

        return '';
    }
}
