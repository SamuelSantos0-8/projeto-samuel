<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionarios</title>
    <link rel="stylesheet" href="../CSS/estilo-edita.css">
</head>
<body>
    <div id="Titulo">
    <h1>Cadastro de Cliente</h1>    
    </div>
    
    <div class="container">
        <div class="box">

    <form action="CadastraFuncionario.php" method="post" class="formLogin">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="Nome"><br>

        <label for="desc">Descrição</label>
        <input type="text" name='descricao' id='descricao'><br>

        <label for="salario">Salário</label>
        <input type="text" name="salario" id='salario'><br>

        <label for="idade">Idade</label>
        <input type="text" name="idade" id="idade"><br>
        
        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf"><br>

        <input type="submit" value="Salvar" class="btn">
    </form>
    <form action="../Menu.php" class="formBotao">
        <input type="submit" Value="voltar" class="btn">
    </form>
    
    </div>
    
    </div>


</body>
</html>