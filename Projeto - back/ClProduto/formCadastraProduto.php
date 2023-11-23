<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
</head>
<body>
<form action="CadastraProduto.php" method="post">

        <label for="descricao">Descrição</label>
        <input type="text" name="descricao" id="descricao"><br>

        <label for="preco">Preço</label>
        <input type="text" name='preco' id='preco'><br>
        
        <button>Salvar</button>
    
    <label for="fkidgrupo">foreingkey</label>
    <select name="fkidgrupo" id="fkidgrupo">
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
    </form>
    <form action="ExcluiProduto.php" method="post">
        
        <label for="idProduto">para exlcuir insira o ID: </label>
        <input type="text" name="idcform" id="ID">
        <button>enviar</button>
    </form>
    <a href="../index.php"> Voltar</a>
    <a href="listaProduto.php">Lista de Produtos</a>    


</body>
</html>