<?php
include_once 'metodos/conexao.php';

include_once 'includes/header.php';

if(isset($_GET['id'])):
    $id = mysqli_escape_string($conn, $_GET['id']);
    $sql = "SELECT * FROM imovel WHERE idimovel = '$id'";

    $resultado = mysqli_query($conn, $sql);
    $dados = mysqli_fetch_array($resultado);

    $idproprietario = $dados['proprietario_fk'];
    
    $sql2 = "SELECT * FROM proprietario WHERE idproprietario = '$idproprietario'";
    $resultado2 = mysqli_query($conn, $sql2);
    $proprietario = mysqli_fetch_array($resultado2);
endif;

?>


<div class="container">
    <div class="detalhes">
        <h1>Imóvel</h1>
        <div class="md">
            <h3>ID Imóvel: <?php echo $dados['idimovel']; ?></h3>
            <h3>ID Proprietário: <?php echo $proprietario['idproprietario']; ?></h3>
        </div>
        <h3><?php echo $proprietario['nome']; ?></h3>
        <div class="md">
            <h3>Área do Terreno: <?php echo $dados['areadoterreno']; ?>m²</h3>
            <h3>Área construída: <?php echo $dados['areaconstruida']; ?>m²</h3>
            <h3>Área total: <?php echo $dados['areatotal']; ?>m²</h3>
        </div>
        <div class="md">
            <h3>Valor Venal Terreno: R$<?php echo $dados['valorvenalterreno']; ?></h3>
            <h3>Valor Venal Construção: R$<?php echo $dados['valorvenalconstrucao']; ?></h3>
            <h3>Valor Venal Total: R$<?php echo $dados['valorvenaltotal']; ?></h3>
        </div>
        <hr>
        <div class="md">
            <h3>Aliquota: <?php echo $dados['aliquota']; ?>%</h3>
            <h3>Aliquota Aplicada: <?php echo $dados['aliquotaaplicada']; ?>%</h3>
        </div>
        <h3>Valor Imposto: R$<?php echo $dados['valordoimposto']; ?></h3>
        
    </div>
    
</div>
<?php 
include_once 'includes/footer.php';
?>