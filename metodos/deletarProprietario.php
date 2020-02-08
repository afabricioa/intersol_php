<?php

    require_once 'conexao.php';

    function clear($input){
        global $connect;

        $var = mysqli_escape_string($connect, $input);

        $var = htmlspecialchars($var);

        return $var;
    }

    if(isset($_POST['clickDeletarProprietario'])):
        $sql = "DELETE FROM proprietario WHERE idproprietario = '$id'";

        if(mysqli_query($connect, $sql)):
        
        header('Location: ../index.php');
        else:
        
        header('Location: ../index.php');
        endif;
    endif;