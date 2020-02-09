<?php

require_once 'metodos/conexao.php';

include_once 'includes/header.php';

if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);
    $sql = "SELECT * FROM proprietario WHERE idproprietario = '$id'";

    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>


<div class="container">
    <div class="formulario">
        <form action="metodos/editarProprietario.php" method="post">
            <h2>Preencha os dados do Proprietário</h2>
            <input type="hidden" name="id" value="<?php echo $dados['idproprietario']; ?>">
            <div class="item">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" value="<?php echo $dados['nome'] ?>">
            </div>
            <div class="item">
                <label for="endereco">Endereço</label>
                <input type="text" id="endereco" name="endereco" value="<?php echo $dados['endereco'] ?>">
            </div>
            
            <button type="submit" class="botao" name="botao-update">Alterar</button>
            
        </form>
    </div>
</div>
    
<?php 
include_once 'includes/footer.php'
?>