<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Funcionario</title>
    <link rel="stylesheet" href="../CSS/estilo-edita.css">
</head>
<body>
<div class="Titulo">
    <h1>Editar Funcionarios</h1>
</div>
<div class="container">
    <div class="box">
    <?php
    $id = $_POST['id'];    
    $nom = $_POST['nome'];    
    $desc = $_POST['descricao'];
    $sal = $_POST['salario'];
    $idad = $_POST['idade'];
    $cpf = $_POST['cpf'];
    ?>
<form action="alteraFuncionario.php" method="post" class="formLogin">
        <input type="hidden" name="idf" id="id" value="<?= $id ?>"><br>

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="<?= $nom?>"><br>

        <label for="desc">Descrição</label>
        <input type="text" name='descricao' id='descricao' value="<?= $desc ?>"><br>

        <label for="salario">Salário</label>
        <input type="text" name="salario" id='salario' value="<?= $sal ?>"><br>

        <label for="idade">Idade</label>
        <input type="text" name="idade" id="idade" value="<?= $idad ?>"><br>
        
        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf" value="<?= $cpf ?>"><br>

        <input class="btn" type="submit" Value="Salvar">
    </form>
    <form action="../Menu.php" class="formBotao">
            <input type="submit" Value="Menu" class="btn">
        </form>
        <form action="ListaFuncionario.php" class="formBotao">
            <input type="submit" Value="Lista" class="btn">
        </form>
    </div>
    </div>
</div>
</body>
</html>