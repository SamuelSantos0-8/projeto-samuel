<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluido</title>
    <link rel="stylesheet" href="../CSS/estilo-Exclui.css">
</head>
<body>

<?php
    define('BASE', 'C:/xampp/htdocs/projeto/');
    // define('BASE', $_SERVER['DOCUMENT_ROOT'].'/projeto');
    require_once BASE . '/Banco/Conexao.php';
    require_once BASE . '/ClGrupo/grupo.php';
    require_once BASE . 'ClGrupo/DAOGrupo.php';

    $dao = new DAOGrupo();
    
    
    $id = $_POST['idc'];
    
    
    if ($dao->exclui($id)) {
        ?>
        <div class="Titulo">
        <h1>Excluiu com sucesso</h1>
        </div>
        <?php
    }else{
        ?>
        <div class="Titulo">
        <h1>Não Excluiu</h1>
        </div>
        <?php
    }
?>
</body>
<div class="container">
    <div class="box">
    

    <form action="../Menu.php" class="formBotao">
        <input type="submit" Value="Menu" class="btn">
    </form>

    <form action="ListaGrupo.php" class="formBotao">
        <input type="submit" Value="Lista" class="btn">
    </form>

    </div>
    </div>
</html>
