<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
</head>
<body>
    <h1>Cadastro de Cliente</h1>
    <form action="cadastraCliente.php" method="post">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="Nome"><br>

        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf"><br>

        <label for="idade">Idade</label>
        <input type="text" name="idade" id="idade"><br>
        <select name="fkidCliente" id="fkidCliente">
   
   <?php
    define('BASE', 'C:/xampp/htdocs/projeto/');
    require_once BASE. '/ClCliente/DAOCliente.php';
    require_once BASE. '/Banco/Conexao.php';
    $dao = new DAOCliente();
    $lista = $dao ->listatodos();

    foreach($lista as $Cliente){
        
       echo'<option value="'.$Cliente['idCliente'].'">'.$Cliente['nome'].'</option>';
    
    }
    ?>
    </select>

    <select name="fkidfuncionario" id="fkidfuncionario">
   
   <?php
        define('BASE', 'C:/xampp/htdocs/projeto/');
    require_once BASE. '/ClFuncionario/DAOFuncionario.php';
    require_once BASE. '/Banco/Conexao.php';
    $dao = new DAOFuncionario();
    $lista = $dao ->listatodos();

    foreach($lista as $Funcionario){
        
       echo'<option value="'.$Funcionario['idFuncionario'].'">'.$Funcionario['nome'].'</option>';
    
    }?>
    </select>


        <button>Salvar</button>
    </form>

    <a href="../index.php"> Voltar</a>

</body>
</html>