<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Listagem de Vendas</title>
        <link rel="stylesheet" href="../CSS/estilo-lista.css">
    </head>

    <body>
        <h1>Listagem de Vendas</h1>
        <div class="container">
            <div class="box">
        <table border="1" id="tabela">
            <tr>
                <th>ID</th>
                <th>CLIENTE</th>
                <th>DATA</th>
                <th>TOTAL</th>
            </tr>
            <?php

            require_once '../banco/Conexao.php';
            require_once 'DaoVenda.php';

            $daoVenda = new DaoVenda();
            $lista = $daoVenda->listaTodos();

            foreach ($lista as $registro) {
                echo '<tr>';
                echo '<td>' . $registro['id'] . '</td>';
                echo '<td>' . $registro['cliente'] . '</td>';
                echo '<td>' . $registro['Ddata'] . '</td>';
                echo '<td>' . $registro['valor'] . '</td>';                
                echo '</tr>';
            }
            ?>
        </table>
        <form action="../Menu.php" class="formBotao">
            <input type="submit" Value="Voltar" class="btn">
        </form>
    </div>
    </div>
        
    </body>

</html>
