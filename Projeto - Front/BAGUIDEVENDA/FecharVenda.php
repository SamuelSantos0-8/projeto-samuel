<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Venda</title>
    </head>
    <body>
        <h1>Cadastro de Venda</h1>
        <?php
        require_once '../banco/Conexao.php';
        require_once 'DaoVenda.php';

        $idvenda = $_POST['idvenda'];

        $daoVenda = new DaoVenda();

        if($idDaVenda = $daoVenda->fecharVenda($idvenda)) {
            session_start();
            unset($_SESSION['vendaaberta']);
            header("location: lsita.php");
        } else {
            echo 'Deu ruim.';
        }

        ?>
    </body>
</html>

