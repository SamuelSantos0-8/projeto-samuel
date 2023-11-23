<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Produto</title>
    <link rel="stylesheet" href="../CSS/estilo-edita.css">
</head>
<body>
<?php
    $id = $_POST['idproduto'];
    $desc = $_POST['descricao'];
    $preco = $_POST['preco'];
    $fkid = $_POST['fkid'];
?>

<div class="Titulo">
    <h1>Editar Cliente</h1>
</div>
<div class="container">
    <div class="box">
<form action="alteraProduto.php" method="post" class="formLogin">


        <input type="hidden" name="idProduto" id="idProduto" value="<?= $id?>"><br>

        <label for="desc">Descrição</label>
        <input type="text" name='descricao' id='descricao' value="<?= $desc?>"><br>

        <label for="preco">Preco</label>
        <input type="text" name="preco" id='preco' value="<?= $preco?>"><br>

        <label for="fkidGrupo">fkidGrupo</label>
        <select name="fkidGrupo" id="fkidGrupo"><br>
        <?php
        define('BASE', 'C:/xampp/htdocs/projeto/');
        require_once BASE. '/Clgrupo/DAOGrupo.php';
        require_once BASE. '/Banco/Conexao.php';
        $dao = new DAOGrupo();
        $lista = $dao ->listatodos();

        foreach($lista as $grupo){
            
        echo'<option value="'.$grupo['idGrupo'].'">'.$grupo['tipo'].'</option>';
        
        }
    ?>
        </select>
        <input type="submit" Value="Salvar" class="btn">
    </form>
    <div class="botoes">
        <form action="../Menu.php" class="formBotao">
            <input type="submit" Value="Menu" class="btn">
        </form>
        <form action="ListaProduto.php" class="formBotao">
            <input type="submit" Value="Lista" class="btn">
        </form>
    </div>
    </div>    
</body>
</html>