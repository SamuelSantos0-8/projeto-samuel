<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="../index.php"> Voltar</a>
    <a href="listaFornecedor.php">Lista de Fornecedores</a> 
<?php
    define('BASE', 'C:/xampp/htdocs/projeto/');
    // define('BASE', $_SERVER['DOCUMENT_ROOT'].'/projeto');
    require_once BASE . '/Banco/Conexao.php';
    require_once BASE . '/ClFornecedor/Fornecedor.php';
    require_once BASE . 'ClFornecedor/DAOFornecedor.php';

    $dao = new DAOFornecedor();
    
    
    $idC = $_POST['idcform'];
    
    
    if ($dao->exclui($idC)) {
        echo 'dont tienes mais';
    }else{

        echo'não excroiu';
    }
?>
</body>
</html>
