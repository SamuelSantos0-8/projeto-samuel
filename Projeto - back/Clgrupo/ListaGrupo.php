<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
    <link rel="stylesheet" href="../CSS/estilo-lista.css">
</head>
<body>
<div class="Titulo">
        <h1>Listagem de Grupos</h1>
    </div>
    <div class="container">
    <div class="box">
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Tipo</th>
            <th>Ações</th>
        </tr>
        
           
        <?php
        define('BASE', 'C:/xampp/htdocs/projeto/');
        // define('BASE', $_SERVER['DOCUMENT_ROOT'].'/projeto');
        require_once BASE . '/Banco/Conexao.php';
        require_once BASE . 'ClGrupo/DAOGrupo.php'; 
        
            $dao = new DAOGrupo();
            $lista =$dao->listaTodos();
            
            foreach($lista as $linha){
                echo '<tr>';
                echo '<td>'.$linha['idGrupo'].'</td>';
                echo '<td>'.$linha['tipo'].'</td>';
                
                
                ?>
                <td>
                <form action="excluiGrupo.php" method="post" class="formBotao">
                <input type="hidden" name="idc" value="<?= $linha['idGrupo'] ?>">
                <input type='submit' class="btn" value="Exluir">
                </form>
                <form action="formAlteraGrupo.php" method="post" class="formBotao">
                <input type="hidden" name="idc" id="idc" value="<?= $linha['idGrupo'] ?>">
                <input type="hidden" name="tip" id="tip" value="<?= $linha['tipo'] ?>">
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
    <form action="formGrupo.php" class="formBotao">
        <input type="submit" Value="Cadastrar" class="btn">
    </form>

    </div>
    </div>
</body>
</html>

                
