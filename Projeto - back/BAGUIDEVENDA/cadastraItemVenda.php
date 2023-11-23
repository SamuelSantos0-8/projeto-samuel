<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Reserva</title>
    </head>
    <body>
        <h1>Cadastro de Reserva</h1>
        <?php
        require_once 'ItemVenda.php';
        require_once '../banco/Conexao.php';
        require_once 'DaoItemVenda.php';


        session_start();

        $idVenda = $_SESSION['vendaaberta'];
        $idProduto = $_POST['idproduto'];
        $quantidade = $_POST['quantidade'];
        

        var_dump($_POST);

        $itemVenda = new ItemVenda(null, $idVenda, $idProduto, $quantidade, 0);

        $daoItemVenda = new DaoItemVenda();

        if($daoItemVenda->inclui($itemVenda)) {
            header("location: formCadastroItemVenda.php");
        } else {
            echo 'Deu ruim.';
        }

        ?>
    </body>
</html>

