<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição</title>
    <link rel="stylesheet" href="../CSS/estilo-Exclui.css">
</head>
<body>

<?php
    define('BASE', 'C:/xampp/htdocs/projeto/');
    // define('BASE', $_SERVER['DOCUMENT_ROOT'].'/projeto');
    require_once BASE . '/Banco/Conexao.php';
    require_once BASE . '/ClFuncionario/funcionario.php';
    require_once BASE . 'ClFuncionario/DAOFuncionario.php';
    
    $dao = new DAOFuncionario();
    
    $id = $_POST['idf'];
    $nom = $_POST['nome'];
    $desc = $_POST['descricao'];
    $salario = $_POST['salario'];
    $cp = $_POST['cpf'];
    $idad = $_POST['idade'];


    $Funcionario = new Funcionario(
        $id,
        $nom,
        $desc,
        $salario,        
        $idad,
        $cp
    );


    if($dao->altera($Funcionario)){
        ?>
        <div class="Titulo">
        <h1>Mudou</h1>
        </div>
        <?php
    }else{
        ?>
        <div class="Titulo">
        <h1>Não Mudou</h1>
        </div>
        <?php
    }
?>   
<div class="container">
<div class="box">
    <form action="../Menu.php" class="formBotao">
        <input type="submit" Value="Menu" class="btn">
    </form>

    <form action="ListaCliente.php" class="formBotao">
        <input type="submit" Value="Lista" class="btn">
    </form>

</div>
</div>

</body>
</html>