<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastra</title>
    <link rel="stylesheet" href="../CSS/estilo-edita.css">
</head>
<body>
    <a href="listaFornecedor.php">Lista de Fornecedores</a>
    <?PHP 
    define('BASE', 'C:/xampp/htdocs/projeto/');
    // define('BASE', $_SERVER['DOCUMENT_ROOT'].'/projeto');
    require_once BASE . '/Banco/Conexao.php';
    require_once BASE . '/ClFornecedor/Fornecedor.php';
    require_once BASE . 'ClFornecedor/DAOFornecedor.php';

    $nom = $_POST['nome'];
    $ema = $_POST['email'];
    $ende = $_POST['endereco'];
    $cnp = $_POST['cnpj'];
    $tele = $_POST['telefone'];

    $fornecedor = new Fornecedor(
        0,
        $nom,
        $tele,
        $ema,
        $ende,
        $cnp
    );


    $dao = new DAOFornecedor();

    if($dao->inclui($fornecedor)) {
        ?>
        <div class="Titulo">
        <h1>Salvo com sucesso</h1>
        </div>
        <?php
    }else{
        ?>
        <div class="Titulo">
        <h1>Não Salvou</h1>
        </div>
        <?php
    }
    


    ?>
    <div class="container">
    <div class="box">
        <form action="../Menu.php" class="formBotao">
            <input type="submit" Value="Menu" class="btn">
        </form>
    
        <form action="listaFornecedor.php" class="formBotao">
            <input type="submit" Value="Lista" class="btn">
        </form>
    
    </div>
    </div>
    </body>
</html>
