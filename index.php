<?php
include_once 'metodos/conexao.php';

include_once 'includes/header.php';

include_once 'includes/mensagem.php';
session_unset();

$sql = "SELECT * FROM proprietario";
$resultado = mysqli_query($connect, $sql);

$proprietarios = array();
if(mysqli_num_rows($resultado) > 0):
    while($row = mysqli_fetch_array($resultado)):
        $proprietarios[] = $row;
    endwhile;
endif;

$sql2 = "SELECT imovel.idimovel, imovel.proprietario_fk, proprietario.nome 
        FROM imovel 
        INNER JOIN proprietario 
        ON imovel.proprietario_fk = proprietario.idproprietario";
$resultado2 = mysqli_query($connect, $sql2);
$p = array();
if(mysqli_num_rows($resultado2) > 0):
    while($row2 = mysqli_fetch_array($resultado2)):
        $p[] = $row2;
    endwhile;
endif;

?>


<div class="container">
    <h1>Intersol PHP</h1>
    <div id="botoes">
        <button class="botaoShow" id="botaoProprietario">Tabela Proprietários</button>
        <button class="botaoShow" id="botaoImovel">Tabela Imóveis</button>
    </div>
    <div id="divProprietarios">
        <table>
            <thead>
                <tr id="head">
                    <td>ID</td>
                    <td>Nome</td>
                    <td>Endereço</td>
                    <td></td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <?php 
                    if(mysqli_num_rows($resultado) > 0):
                        foreach ($proprietarios as $proprietario) { ?>
                            <tr>
                                <td id="first"><?php echo $proprietario['idproprietario'] ?></td>
                                <td><?php echo $proprietario['nome'] ?></td>
                                <td><?php echo $proprietario['endereco'] ?></td>
                                <td class="tdIcon"><a href="alterarProprietario.php?id=<?php echo $proprietario['idproprietario']; ?>"><div class="icone edit"><i class="fas fa-user-edit"><span class="tooltiptext">Alterar</span></i></div></a></td>
                                <td id="last" class="tdIcon"><a href="metodos/deletar.php?idproprietario=<?php echo $proprietario['idproprietario']; ?>"><div class="icone delete"><i class="fas fa-trash"><span class="tooltiptext">Excluir</span></i></div></a></td>
                            </tr>
                    <?php 
                        }
                    else: 
                    ?>
                        <tr>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                    <?php 
                    endif;
                    ?>
            </tbody>
        </table>
    </div>
    <div id="divImoveis">
        <table >
            <thead>
                <tr id="head">
                    <td>ID Imóvel</td>
                    <td>ID Proprietário</td>
                    <td>Nome</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <?php 
                    if(mysqli_num_rows($resultado2) > 0):
                        foreach ($p as $prop) { ?>
                            <tr>
                                <td id="first"><?php echo $prop['idimovel'] ?></td>
                                <td><?php echo $prop['proprietario_fk'] ?></td>
                                <td><?php echo $prop['nome'] ?></td>
                                <td class="tdIcon"><a href="detalhes.php?id=<?php echo $prop['idimovel']; ?>"><div class="icone calc"><i class="fas fa-calculator"><span class="tooltiptext">Ver Cálculos</span></i></div></a></td>
                                <td class="tdIcon"><a href="alterarImovel.php?id=<?php echo $prop['idimovel']; ?>"><div class="icone edit"><i class="fas fa-user-edit"></i><span class="tooltiptext">Alterar</span></div></a></td>
                                <td id="last" class="tdIcon"><a href="metodos/deletar.php?idimovel=<?php echo $prop['idimovel']; ?>"><div class="icone delete"><i class="fas fa-trash"></i><span class="tooltiptext">Excluir</span></div></a></td>
                            </tr>
                    <?php 
                        }
                    else: 
                    ?>
                        <tr>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                    <?php 
                    endif;
                    ?>
            </tbody>
        </table>
    </div>
</div>

<?php 
include_once 'includes/footer.php';
?>