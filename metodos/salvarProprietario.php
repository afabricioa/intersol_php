<?php
    require_once 'conexao.php';

        //clear
    function clear($input){
        global $connect;
        //proteção sql injection
        $var = mysqli_escape_string($connect, $input);
        //proteção xss
        $var = htmlspecialchars($var);
        return $var;
    }

    if(isset($_POST['botao-cadastrar'])): //verifica se o botão de cadastrar foi acionado
        //filtra os valores que vieram do formulário
        $nome = clear($_POST['nome']); 
        $endereco = clear($_POST['endereco']);

        $sql = "INSERT INTO proprietario (nome, endereco) VALUES ('$nome', '$endereco')";

        if(mysqli_query($connect, $sql)):
            echo("Error description: id: " . mysql_error($sql));
            header('Location: ../index.php?sucesso');
        else:
            echo("Error description: id: " . mysql_error($sql));
            header('Location: ../index.php?erro');
        endif;
    endif;