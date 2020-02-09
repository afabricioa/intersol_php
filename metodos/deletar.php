<?php

require_once 'conexao.php';

if(isset($_GET['idproprietario'])):
    $id = mysqli_escape_string($connect, $_GET['idproprietario']);
    $sql = "SELECT * FROM proprietario WHERE idproprietario = '$id'";

    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
elseif(isset($_GET['idimovel'])):
    $id = mysqli_escape_string($connect, $_GET['idimovel']);
    $sql = "SELECT * FROM imovel WHERE idimovel = '$id'";

    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>


<!DOCTYPE html>
  <html>
    <head>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="../css/main.css"></link>
        <script src="https://kit.fontawesome.com/a5ce98459f.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <title>Intersol Soluções WEB</title>
    </head>

    <body>
        <nav>
        <ul>
            <li>
            <a id="home" href="../index.php">Início</a>
            </li>
            <li>
            <a href="../proprietario.php">Proprietário</a>
            </li>
            <li>
            <a href="../imovel.php">Imóvel</a>
            </li>
        </ul>
        </nav>

        <div class="containerDeletar">
            <div class="divDeletar">
                <?php if(isset($_GET['idproprietario'])): ?>
                    <h2>Deseja excluir o registro do Proprietário abaixo?</h2>
                    <form action="deletarProprietario.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $dados['idproprietario']; ?>">
                        <div class="item">
                            <h3>Nome: <?php echo $dados['nome'] ?></h2>
                        </div>
                        <div class="item">
                            <h3>Endereço: <?php echo $dados['endereco'] ?></h2>
                        </div>

                        <button class="botao" type="submit" name="botao-excluir">Excluir</button>
                    </form>
                    
                <?php
                    elseif(isset($_GET['idimovel'])):
                ?>
                    <h2>Deseja excluir o registro do Imóvel abaixo?</h2>
                    <form action="deletarImovel.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $dados['idimovel']; ?>">
                        <div class="item">
                            <h3>ID Imóvel: <?php echo $dados['idimovel'] ?></h2>
                        </div>
                        <div class="item">
                            <h3>ID Proprietário: <?php echo $dados['proprietario_fk'] ?></h2>
                        </div>
                        <div class="item">
                            <h3>Endereço do Imóvel: <?php echo $dados['endereco'] ?></h2>
                        </div>

                        <button class="botao" type="submit" name="botao-excluir">Excluir</button>
                    </form>
                <?php 
                    endif; 
                ?>
            </div>
        </div>
            
    </body>
</html>
