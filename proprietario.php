<?php

include_once 'includes/header.php';
?>


<div class="container">
    <div class="formulario">
        <form action="metodos/salvarProprietario.php" method="post">
            <h2>Preencha os dados do Proprietário</h2>
            <div class="item">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome">
            </div>
            <div class="item">
                <label for="endereco">Endereço</label>
                <input type="text" id="endereco" name="endereco">
            </div>
            
            <button class="botao" type="submit" name="botao-cadastrar">Cadastrar</button>
            
        </form>
    </div>
</div>
    
<?php 
include_once 'includes/footer.php'
?>