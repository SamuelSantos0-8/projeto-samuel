<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="../CSS/estilo-lista.css">
</head>
<body>
<div class="Titulo">
        <h1>Listagem de Produtos</h1>
    </div>
    
    <div class="container">
    <div class="box">
    <table border="1" id="tabela">
        <tr>
            <th>ID</th>
            <th>Descrção</th>
            <th>Preço</th>
            <th>fkidgrupo</th>
            <th>Opções</th>

        </tr>
        <?php 
        
            define('BASE', 'C:/xampp/htdocs/projeto/');
            // define('BASE', $_SERVER['DOCUMENT_ROOT'].'/projeto');
            require_once BASE . '/Banco/Conexao.php';
            require_once BASE . 'ClProduto/DAOProduto.php'; 
            require_once BASE . 'Clgrupo/DAOGrupo.php'; 

            $dao = new DAOProduto();
            $lista =$dao->listaTodos();
            foreach($lista as $linha){
                echo '<tr>';
                echo '<td>'.$linha['idProduto'].'</td>';
                echo '<td>'.$linha['descricao'].'</td>';
                echo '<td>'.$linha['preco'].'</td>';
                echo '<td>'.$linha['fkidGrupo'].'</td>';
            
            ?>
                <td>
                <form action="ExcluiProduto.php" method="post" class="formBotao">
                <input type="hidden" name="idc" value="<?= $linha['idProduto'] ?>">
                <input type="submit" Value="Excluir" class="btn">
                </form>
                <form action="formAlteraProduto.php" method="post" class="formBotao">
                <input type="hidden" name="idproduto" id="idproduto" value="<?= $linha['idProduto'] ?>">
                <input type="hidden" name="descricao" id="descricao" value="<?= $linha['descricao'] ?>">
                <input type="hidden" name="preco" id="preco" value="<?= $linha['preco'] ?>">
                <input type="hidden" name="fkid" id="fkid" value="<?= $linha['fkidGrupo'] ?>">
                <input type="submit" Value="Editar" class="btn">
                </form>
            </td>
                <?php
                echo '</tr>';
            }
        ?>
    </table>
    <a href="../index.php">Voltar</a>
</body>
</html>
