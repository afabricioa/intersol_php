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

  if(isset($_POST['botao-cadastrar'])):
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

    

    $sql = "INSERT INTO imovel (endereco, areadoterreno, areaconstruida, 
    areatotal, aliquota, valorvenalterreno, valorvenalconstrucao, valorvenaltotal, 
    aliquotaaplicada, valordoimposto, proprietario_fk) 
            VALUES ('$endereco', '$areaterreno', '$areaconstruida', '$areatotal', '$aliquota',
                    '$valorvenalterreno', '$valorvenalconstrucao', '$valorvenaltotal', '$aliquotaaplicada',
                    '$valordoimposto', '$idproprietario')";

    if(mysqli_query($conn, $sql)):
      header('Location: ../index.php?sucesso');
    else:
      echo("Error description: " . $conn -> error);
    endif;
  endif;
?>