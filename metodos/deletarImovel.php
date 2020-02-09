<?php

    require_once 'conexao.php';

    function clear($input){
        global $connect;

        $var = mysqli_escape_string($connect, $input);

        $var = htmlspecialchars($var);

        return $var;
    }

    if(isset($_POST['botao-excluir'])):
        $idimovel = $_POST['id'];
        $sql = "DELETE FROM imovel WHERE idimovel = '$idimovel'";

        if(mysqli_query($connect, $sql)):
            header('Location: ../index.php?sucesso');
        else:
        
            header('Location: ../index.php?falha');
        endif;
    endif;