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
    <a href="listaProduto.php">Lista de Produtos</a>


<?php
    define('BASE', 'C:/xampp/htdocs/projeto/');
    // define('BASE', $_SERVER['DOCUMENT_ROOT'].'/projeto');
    require_once BASE . '/Banco/Conexao.php';
    require_once BASE . '/ClProduto/Produto.php';
    require_once BASE . 'ClProduto/DAOProduto.php';
    
    $dao = new DAOProduto();
    
    $id = $_POST['idProduto'];
    $desc = $_POST['descricao'];
    $fkidGrupo = $_POST['fkidGrupo'];
    $preco = $_POST['preco'];


    $Produto = new Produto(
        $id,
        $desc,
        $preco,
        $fkidGrupo,
        
    );


    if($dao->altera($Produto)){
        echo 'mudô';
    }else{
        echo 'Não mudô';
    }
?>   
</body>
</html>