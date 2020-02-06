<?php
include_once 'includes/header.php';
?>


<div class="container">
    <div class="formulario">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <h2>Preencha os dados do Imóvel</h2>
            <div class="item">
                <label for="endereco">Endereço</label>
                <input type="text" id="endereco" name="endereco">
            </div>

            <div class="item">
                <label for="areaterreno">Área do Terreno</label>
                <input type="nmber" id="areaterreno" name="areaterreno">
            </div>

            <div class="item">
                <label for="areaconstruida">Área Construida</label>
                <input type="number" id="areaconstruida" name="areaconstruida">
            </div>

            <div class="item">
                <label for="areatotal">Aliquota</label>
                <input type="number" id="aliquota" name="aliquota">
            </div>

            <div class="item">
                <label for="aliquota">Área Venal Terreno</label>
                <input type="number" id="aliquota" name="aliquota">
            </div>

            <div class="item">
                <label for="areatotal">Área Venal Construção</label>
                <input type="number" id="aliquota" name="aliquota">
            </div>

            <div class="item">
                <label for="aliquotaaplicada">Aliquota Aplicada</label>
                <input type="number" id="aliquotaaplicada" name="aliquotaaplicada">
            </div>
            
            <button type="submit">Cadastrar</button>
        </form>
    </div>
    
</div>
    
<?php 
include_once 'includes/footer.php'
?>