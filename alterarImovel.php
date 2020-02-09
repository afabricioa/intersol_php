<?php
require_once 'metodos/conexao.php';
include_once 'includes/header.php';

if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);
    $sql = "SELECT * FROM imovel WHERE idimovel = '$id'";

    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;

?>


<div class="container">
    <div class="formulario">
        <form action="metodos/editarImovel.php" method="post">
            <h2>Preencha os dados do Imóvel</h2>
            <input type="hidden" name="idimovel" value="<?php echo $dados['idimovel'] ?>">
            <input type="hidden" name="idproprietario" value="<?php echo $dados['idproprietario'] ?>">
            <div class="item">
                <label for="endereco">Endereço</label>
                <input type="text" id="endereco" name="endereco" value="<?php echo $dados['endereco'] ?>">
            </div>

            <div class="item">
                <label for="areaterreno">Área do Terreno</label>
                <input type="number" id="areaterreno" step=".01" name="areaterreno" value="<?php echo $dados['areadoterreno'] ?>">
            </div>

            <div class="item">
                <label for="areaconstruida">Área Construida</label>
                <input type="number" id="areaconstruida" step=".01" name="areaconstruida" value="<?php echo $dados['areaconstruida'] ?>">
            </div>

            <div class="item">
                <label for="aliquota">Aliquota</label>
                <input type="number" id="aliquota" step=".01" name="aliquota" value="<?php echo $dados['aliquota'] ?>">
            </div>

            <div class="item">
                <label for="valorvenalterreno">Valor Venal Terreno</label>
                <input type="number" id="valorvenalterreno" step=".01" name="valorvenalterreno" value="<?php echo $dados['valorvenalterreno'] ?>">
            </div>

            <div class="item">
                <label for="valorvenalconstrucao">Valor Venal Construção</label>
                <input type="number" id="valorvenalconstrucao" step=".01" name="valorvenalconstrucao" value="<?php echo $dados['valorvenalconstrucao'] ?>">
            </div>

            <div class="item">
                <label for="aliquotaaplicada">Aliquota Aplicada</label>
                <input type="number" id="aliquotaaplicada" step=".01" name="aliquotaaplicada" value="<?php echo $dados['aliquotaaplicada'] ?>">
            </div>
            
            <button type="submit" class="botao" name="botao-update">Alterar</button>
        </form>
    </div>
    
</div>
    
<?php 
include_once 'includes/footer.php'
?>