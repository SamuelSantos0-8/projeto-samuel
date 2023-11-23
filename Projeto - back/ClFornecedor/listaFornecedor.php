<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista dos Fornecedores</title>
    <link rel="stylesheet" href="../CSS/estilo-lista.css">
</head>
<body>
    <div class="Titulo">
    <h1>Listagem de Fornecedores</h1>
    </div>
    <div class="container">
    <div class="box">
    <table id="tabela">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>telefone</th>
            <th>email</th>
            <th>endereco</th>
            <th>cnpj</th>
            <th>Ações</th>
        </tr>
        <?php
        define('BASE', 'C:/xampp/htdocs/projeto/');
        // define('BASE', $_SERVER['DOCUMENT_ROOT'].'/projeto');
        require_once BASE . '/Banco/Conexao.php';
        require_once BASE . 'ClFornecedor/DAOFornecedor.php'; 

            $dao = new DAOFornecedor();
            $lista =$dao->listaTodos();
        foreach($lista as $linha){
                echo '<tr>';
                echo '<td>'.$linha['idFornecedor'].'</td>';
                echo '<td>'.$linha['nome'].'</td>';
                echo '<td>'.$linha['Telefone'].'</td>';
                echo '<td>'.$linha['email'].'</td>';
                echo '<td>'.$linha['endereco'].'</td>';
                echo '<td>'.$linha['cnpj'].'</td>';           
                
            
        ?>
        <td>
        <form action="excluirFonecedor.php" method="post" class="formBotao">
                <input type="hidden" name="idcform" value="<?= $linha['idFornecedor'] ?>">
                <input type='submit' class="btn" value="Exluir">
                </form>
                <form action="formAlteraFornecedor.php" method="post" class="formBotao">
                <input type="hidden" name="id" id="id" value="<?= $linha['idFornecedor'] ?>">
                <input type="hidden" name="nome" id="nome" value="<?= $linha['nome'] ?>">
                <input type="hidden" name="Telefone" id="Telefone" value="<?= $linha['Telefone'] ?>">
                <input type="hidden" name="email" id="email" value="<?= $linha['email'] ?>">
                <input type="hidden" name="endereco" id="endereco" value="<?= $linha['endereco'] ?>">
                <input type="hidden" name="cnpj" id="cnpj" value="<?= $linha['cnpj'] ?>">
                <input type='submit' class="btn" value="Editar">
        </form>
        </td>
            <?php
                echo '</tr>';
        }
            
        ?>
    </table>
    <form action="../Menu.php" class="formBotao">
        <input type="submit" Value="Voltar" class="btn">
    </form>
    </div>
    </div>
    
</body>
</html>