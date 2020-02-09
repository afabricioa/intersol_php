<?php

    require_once 'conexao.php';

    function clear($input){
        global $conn;

        $var = mysqli_escape_string($conn, $input);

        $var = htmlspecialchars($var);

        return $var;
    }

    if(isset($_POST['botao-update'])):
        $idimovel = $_POST['idimovel'];
        $idproprietario = $_POST['idproprietario'];
        $endereco =  $_POST['endereco'];
        $areaterreno =  $_POST['areaterreno'];
        $areaconstruida =  $_POST['areaconstruida'];
        $aliquota =  $_POST['aliquota'];
        $valorvenalterreno =  $_POST['valorvenalterreno'];
        $valorvenalconstrucao =  $_POST['valorvenalconstrucao'];
        $aliquotaaplicada =  $_POST['aliquotaaplicada'];

        $areatotal = $areaterreno + $areaconstruida;
        $valorvenaltotal = $valorvenalterreno + $valorvenalconstrucao;
        $valordoimposto = $valorvenaltotal * $aliquota;

        $sql = "UPDATE imovel SET `endereco` = '$endereco', `areadoterreno` = '$areaterreno', `areaconstruida` = '$areaconstruida', 
                `areatotal` = '$areatotal', `aliquota` = '$aliquota', `valorvenalterreno` = '$valorvenalterreno', `valorvenalconstrucao` = '$valorvenalconstrucao',
                `valorvenaltotal` = '$valorvenaltotal', `aliquotaaplicada` = '$aliquotaaplicada', `valordoimposto` = '$valordoimposto'
                WHERE `idimovel` = '$idimovel'";

        if(mysqli_query($conn, $sql)):
            header('Location: ../index.php?sucesso');
        else:
            echo("Error description: id: ". mysql_error("erro: " . $conn));
            
        endif;
    endif;