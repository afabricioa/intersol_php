<?php
    require_once 'conexao.php';

        //clear
    function clear($input){
        global $conn;
        //proteção sql injection
        $var = mysqli_escape_string($conn, $input);
        //proteção xss
        $var = htmlspecialchars($var);
        return $var;
    }

    if(isset($_POST['botao-cadastrar'])): //verifica se o botão de cadastrar foi acionado
        //filtra os valores que vieram do formulário
        $nome = $_POST['nome']; 
        $endereco = $_POST['endereco'];

        echo "entrou";
        $sql = "INSERT INTO proprietario (nome, endereco) VALUES ('$nome', '$endereco')";
        echo("Error description: id: " . mysql_error($sql));
        if(mysqli_query($conn, $sql)):
            echo("Error description: id: " . mysql_error($sql));
            header('Location: ../index.php?sucesso');
        else:
            echo("Error description: id: " . mysql_error($sql));
            header('Location: ../index.php?erro');
        endif;
    endif;