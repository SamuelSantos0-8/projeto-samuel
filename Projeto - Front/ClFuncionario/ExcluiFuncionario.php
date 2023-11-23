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
require_once BASE . '/ClFuncionario/funcionario.php';
require_once BASE . 'ClFuncionario/DAOFuncionario.php';

$dao = new DAOFuncionario();


$idC = $_POST['idf'];

if ($dao->exclui($idC)) {
    echo 'dont tienes mais';
}else{

    echo'não excroiu';
}

?><br>

<a href="../index.php">voltar</a>
<a href="listaFuncionario.php">Lista de Funcionarios</a>
</body>
</html>
