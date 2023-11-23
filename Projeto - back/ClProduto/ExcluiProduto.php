<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
define('BASE', 'C:/xampp/htdocs/projeto/');
// define('BASE', $_SERVER['DOCUMENT_ROOT'].'/projeto');
require_once BASE . '/Banco/Conexao.php';
require_once BASE . '/ClProduto/Produto.php';
require_once BASE . 'ClProduto/DAOProduto.php';

$dao = new DAOProduto();
$idc = $_POST['idc'];

if ($dao->exclui($idc)) {
    echo 'dont tienes mais';
}else{

    echo'não excroiu';
}

?><br>

<a href="../index.php">voltar</a>
<a href="listaProduto.php">Lista de Produtos</a>
</body>
</html>
