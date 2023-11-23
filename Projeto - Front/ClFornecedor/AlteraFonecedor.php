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
    <a href="listaFornecedor.php">Lista Fornecedor</a>


<?php
    define('BASE', 'C:/xampp/htdocs/projeto/');
    // define('BASE', $_SERVER['DOCUMENT_ROOT'].'/projeto');
    require_once BASE . '/Banco/Conexao.php';
    require_once BASE . '/ClFornecedor/Fornecedor.php';
    require_once BASE . 'ClFornecedor/DAOFornecedor.php';
    
    $dao = new DAOFornecedor();
    
    $id = $_POST['idFornecedor'];
    $nom = $_POST['nome'];
    $cnpj = $_POST['cnpj'];
    $tel = $_POST['telefone'];       
    $email = $_POST['email'];
    $endere = $_POST['endereco'];
    $fornecedor = new Fornecedor(
        $id,
        $nom,
        $tel,        
        $email,
        $endere,
        $cnpj
    );


    if($dao->altera($fornecedor)){
        echo 'mudô';
    }else{
        echo 'Não mudô';
    }
?>   
</body>
</html>