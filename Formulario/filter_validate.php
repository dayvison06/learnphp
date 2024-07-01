<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    if(isset($_POST['enviar-formulario'])):
        // Array criado para armazenar mensagens de erro
        $erros = array();
        
        // VALIDAÇÕES

        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        echo $nome;
        // valida se a idade não é um inteiro e exibe erro solicitando correção
        // Implementado a  validação se o campo esta vazio
        if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):   
            if($_POST['idade'] == null):
                $erros[] = 'O campo <strong>Idade</strong> esta vazio';    
            else:
                $erros[] = 'Idade precisa ser número inteiro';
            endif;
        endif; 

        if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):      
            $erros[] = 'Email inválido';
        endif;

        if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):      
            $erros[] = 'Peso precisa ser um float';
        endif;

        if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):      
            $erros[] = 'IP inválido';
        endif;

        if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)):      
            $erros[] = 'URL inválida';
        endif;
        //EXIBINDO MENSAGENS
        // verifica se o array não esta vazio e lista os erros capturados
        if(!empty($erros)):
            foreach ($erros as $erro):
                echo "<li> $erro </li>";
            endforeach;
        else:
            echo "Parabéns, seus dados estão corretos";
        endif;

    endif;

    ?>

    <!-- Arquivo dados receberá os dados do formulario -->

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

        Nome: <input type="text" name="nome"><br>
        Idade: <input type="text" name="idade"><br>
        Email: <input type="email" name="email"><br>
        Peso: <input type="text" name="peso"><br>
        IP: <input type="text" name="ip"><br>
        URL: <input type="text" name="url"><br>

        <input type="submit" name="enviar-formulario">
 
    </form>
</body>

</html>