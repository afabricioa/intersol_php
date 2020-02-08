<?php

    require_once 'conexao.php';

    function clear($input){
        global $connect;

        $var = mysqli_escape_string($connect, $input);

        $var = htmlspecialchars($var);

        return $var;
    }

    if(isset($_POST['botao-update'])):
        $id = $_POST['id'];
        $nome = clear($_POST['nome']); 
        $endereco = clear($_POST['endereco']);
        $id = intval($id);

        $sql = "UPDATE proprietario SET `nome` = '$nome', `endereco` = '$endereco' WHERE `idproprietario` = '$id'";

        if(mysqli_query($connect, $sql)):
            header('Location: ../index.php?sucesso');
        else:
            echo("Error description: id: ". var_dump($id) . mysql_error($connect));
            
        endif;
    endif;