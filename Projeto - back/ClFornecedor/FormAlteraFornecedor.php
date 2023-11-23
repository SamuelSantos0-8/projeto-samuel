<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar fornecedor</title>
    <link rel="stylesheet" href="../CSS/estilo-edita.css">
</head>
<body>
<div class="Titulo">
    <h1>Editar Fornecedor</h1>
</div>
<div class="container">
    <div class="box">
<form action="alteraFonecedor.php" method="post" class="formLogin">
        <label for="idFornecedor">ID: </label>
        <input type="text" name="idFornecedor" id="idFornecedor"><br>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="Nome"><br>

        <label for="Telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone"><br>
        
        <label for="Email">Email</label>
        <input type="text" name="email" id="email"><br>

        <label for="endereco">Endereço</label>
        <input type="text" name="endereco" id="endereco"><br>

        <label for="cnpj">CNPJ</label>
        <input type="text" name="cnpj" id="cnpj"><br>

        <input type="submit" Value="Salvar" class="btn">
    </form>
    <form action="../Menu.php" class="formBotao">
            <input type="submit" Value="Menu" class="btn">
        </form>
        <form action="ListaFornecedor.php" class="formBotao">
            <input type="submit" Value="Lista" class="btn">
        </form>
    </div>
    </div>
</body>
</html>