<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Funcionarios</title>
    <link rel="stylesheet" href="../CSS/estilo-lista.css">
</head>
<body>
    <div class="Titulo">
        <h1>Listagem de Funcionarios</h1>
    </div>
    
    <div class="container">
    <div class="box">
    <table border="1" id="tabela">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>descrição</th>
            <th>Salário</th>
            <th>Idade</th>
            <th>CPF</th>
            <th>Opções</th>

        </tr>
        <?php 
        
            define('BASE', 'C:/xampp/htdocs/projeto/');
            // define('BASE', $_SERVER['DOCUMENT_ROOT'].'/projeto');
            require_once BASE . '/Banco/Conexao.php';
            require_once BASE . 'ClFuncionario/DAOFuncionario.php'; 
            $dao = new DAOFuncionario();
            $lista =$dao->listaTodos();
            foreach($lista as $linha){
                echo '<tr>';
                echo '<td>'.$linha['idFuncionario'].'</td>';
                echo '<td>'.$linha['nome'].'</td>';
                echo '<td>'.$linha['descricao'].'</td>';
                echo '<td>'.$linha['salario'].'</td>';
                echo '<td>'.$linha['idade'].'</td>';           
                echo '<td>'.$linha['cpf'].'</td>'; 
                ?>
                <td>
                <form action="ExcluiFuncionario.php" method="post" class="formBotao">
                <input type="hidden" name="idf" value="<?= $linha['idFuncionario'] ?>">
                <input type='submit' class="btn" value="Exluir">
                </form>
                <form action="formAlteraFuncio.php" method="post" class="formBotao">    
                <input type="hidden" name="id" id="id" value="<?= $linha['idFuncionario']?>">    
                <input type="hidden" name="nome" id="nome" value="<?= $linha['nome']?>">    
                <input type="hidden" name="descricao" id="descricao" value="<?= $linha['descricao']?>">    
                <input type="hidden" name="salario" id="salario" value="<?= $linha['salario']?>">        
                <input type="hidden" name="idade" id="idade" value="<?= $linha['idade']?>">    
                <input type="hidden" name="cpf" id="cpf" value="<?= $linha['cpf']?>">    
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
</body>
</html>
