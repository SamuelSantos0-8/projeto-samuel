<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../CSS/estilo-edita.css">
</head>
<body>
    
    
    <?PHP 
    define('BASE', 'C:/xampp/htdocs/projeto/');
    // define('BASE', $_SERVER['DOCUMENT_ROOT'].'/projeto');
    require_once BASE . '/Banco/Conexao.php';
    require_once BASE . '/Clgrupo/grupo.php';
    require_once BASE . 'Clgrupo/DAOGrupo.php';

    $tip = $_POST['tip'];

    $grupo = new grupo(
        $tip,
        0,
        0,
    );


    $dao = new DAOGrupo();
    if($dao->inclui($grupo)) {
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
    
        <form action="ListaGrupo.php" class="formBotao">
            <input type="submit" Value="Lista" class="btn">
        </form>
    
    </div>
    </div>
    </body>

</html>

