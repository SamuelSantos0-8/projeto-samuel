<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Venda</title>
    <link rel="stylesheet" href="../CSS/estilo-lista.css">
</head>

<body>
    
    <div class="container1">
        <div class="box">

        
    <form action="cadastraItemVenda.php" method="post" class="formBotao">

        <label for="idproduto">Produto</label><br>
        <select name="idproduto" id="idproduto">
            <?php
            define('BASE', 'C:/xampp/htdocs/projeto/');
            // define('BASE', $_SERVER['DOCUMENT_ROOT'].'/projeto');
            require_once BASE . '/Banco/Conexao.php';
            require_once BASE . '/ClProduto/Produto.php';
            require_once BASE . 'ClProduto/DAOProduto.php';
            $daoProduto = new DAOProduto();
            $lista = $daoProduto->listaTodos();
            foreach ($lista as $produto) {
                echo '<option value="' . $produto['idProduto'] . '">' . $produto['descricao'] . ' - ' . $produto['preco'] . '</option>';
            }
            ?>
        </select><br>
        <label for="quantidade">Quantidade</label><br>
        <input type="number" name="quantidade" id="quantidade"><br>
        <input type="submit" value="Adicionar" class="btn">
    </form>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>PRODUTO</th>
            <th>QUANTIDADE</th>
            <th>PRECO</th>
            <th>SUBTOTAL</th>
        </tr>
        <?php
        // define('BASE', $_SERVER['DOCUMENT_ROOT'].'/projeto');
        require_once BASE . '/Banco/Conexao.php';
        require_once BASE . '/BAGUIDEVENDA/ItemVenda.php';
        require_once BASE . 'BAGUIDEVENDA/DAOItemVenda.php';


        $daoItemVenda = new DaoItemVenda();
        session_start();
        $lista = $daoItemVenda->listaPorVenda($_SESSION['vendaaberta']);
        $total = 0;
        foreach ($lista as $registro) {
            echo '<tr>';
            echo '<td>' . $registro['id'] . '</td>';
            echo '<td>' . $registro['idProduto'] . '</td>';
            echo '<td>' . $registro['quantidade'] . '</td>';
            echo '<td>' . $registro['precoVenda'] . '</td>';
            echo '<td>' . $registro['subtotal'] . '</td>';
            echo '</tr>';
            $total += $registro['subtotal'];
        }
        ?>
    </table>

    <form action="fecharVenda.php" method="post" class="formBotao">
        <input type="hidden" name="idvenda" id="idvenda" value="<?= $_SESSION['vendaaberta'] ?>">
        <label>Total = <?= 'R$' . sprintf("%.2f", $total) ?></label><br>
        <input type="submit" value="Fechar venda" class="btn">
    </form>
    </div>
    </div>
</body>

</html>