<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Fornecedores</title>
    <link rel="stylesheet" href="../CSS/estilo.css">
</head>
<body>
    
    <div class="container">
        <div class="box">

    <form action="cadastraFornecedor.php" method="post" class="formLogin">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="Nome"><br>

        <label for="telefone">telefone: </label>
        <input type="text" name='telefone' id='Telefone'><br>


        <label for="email">Email</label>
        <input type="text" name="email" id="email"><br>

        <label for="endereço">Endereço</label>
        <input type="text" name="endereco" id="endereco"><br>

        <label for="cnpj">CNPJ</label>
        <input type="text" name="cnpj" id="cnpj"><br>

        <input type="submit" value="Salvar" class="btn">
    </form>
  
    <form action="../Menu.php" class="formLogin">
        <input type="submit" value="Voltar" class="btn">
    </form>
    

</body>
</html>