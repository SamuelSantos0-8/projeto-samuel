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
        define('BASE', 'C:/xampp/htdocs/projeto/');
        // define('BASE', $_SERVER['DOCUMENT_ROOT'].'/projeto');
        require_once BASE . '/Banco/Conexao.php';
        require_once BASE . '/BAGUIDEVENDA/Venda.php';
        require_once BASE . 'BAGUIDEVENDA/DAOVenda.php';

        $cliente = $_POST['cliente'];

        $venda = new Venda(null, $cliente, null, 0, null);

        $daoVenda = new DaoVenda();

        if($idDaVenda = $daoVenda->abrirVenda($venda)) {
            //echo 'Venda cadastrada com sucesso. Código: ';
            session_start();
            $_SESSION['vendaaberta'] = $idDaVenda;
            header("location: formCadastroItemVenda.php");
        } else {
            echo 'Deu ruim.';
        }

        ?>
    </body>
</html>

