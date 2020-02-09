<?php
include_once 'metodos/conexao.php';
include_once 'includes/header.php';

$sql = "SELECT * FROM proprietario";
$resultado = mysqli_query($connect, $sql);

$proprietarios = array();

if(mysqli_num_rows($resultado) > 0):
    while($row = mysqli_fetch_array($resultado)):
        $proprietarios[] = $row;
    endwhile;
endif;
?>


<div class="container">
    <div class="formulario">
        <form action="metodos/salvarImovel.php" method="post">
            <h2>Preencha os dados do Imóvel</h2>
            <div class="item">
                <select name="idproprietario">       
                    <?php 
                        if(mysqli_num_rows($resultado) > 0): 
                    ?>
                            <option  value='' selected disabled>Selecione um proprietário</option>
                    <?php
                            foreach ($proprietarios as $proprietario) { 
                    ?>
                        <option value='<?php echo $proprietario['idproprietario'] ?>'><?php echo $proprietario['idproprietario'].' - '.$proprietario['nome'] ?></option>
                    <?php 
                        }
                        else:
                    ?>
                            <option  value='' selected disabled>Nenhum proprietário cadastrado</option>
                    <?php 
                        endif;
                    ?>
                </select>
            </div>
            <div class="item">
                <label for="endereco">Endereço</label>
                <input type="text" id="endereco" name="endereco">
            </div>

            <div class="item">
                <label for="areaterreno">Área do Terreno</label>
                <input type="number" id="areaterreno" step=".01" name="areaterreno">
            </div>

            <div class="item">
                <label for="areaconstruida">Área Construida</label>
                <input type="number" id="areaconstruida" step=".01" name="areaconstruida">
            </div>

            <div class="item">
                <label for="aliquota">Aliquota</label>
                <input type="number" id="aliquota" step=".01" name="aliquota">
            </div>

            <div class="item">
                <label for="valorvenalterreno">Valor Venal Terreno</label>
                <input type="number" id="valorvenalterreno" step=".01" name="valorvenalterreno">
            </div>

            <div class="item">
                <label for="valorvenalconstrucao">Valor Venal Construção</label>
                <input type="number" id="valorvenalconstrucao" step=".01" name="valorvenalconstrucao">
            </div>

            <div class="item">
                <label for="aliquotaaplicada">Aliquota Aplicada</label>
                <input type="number" id="aliquotaaplicada" step=".01" name="aliquotaaplicada">
            </div>
            
            <button class="botao" type="submit" name="botao-cadastrar">Cadastrar</button>
        </form>
    </div>
    
</div>
    
<?php 
include_once 'includes/footer.php'
?>