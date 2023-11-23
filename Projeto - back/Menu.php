<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="./CSS/estilo-menu.css">
</head>
<body>
<div class="Titulo">
        <img src="Image/Logo.png" id="imagecagada" alt="">
        <h1>Infomágica Eletronics</h1>
</div>
<div class="container">
<div class="box">
    <div class="formLogin">
        
        <form action="ClienteMenu.php" >
        <input type="submit" class="btn" value="Cliente">
        </form>
        <form action="FuncionarioMenu.php">
        <input type="submit" class="btn" value="Funcionario">
        </form>
        <form action="FornecedorMenu.php">
        <input type="submit" class="btn" value="Fornecedor"></button>
        </form>
        <form action="ProdutoMenu.php">
        <input type="submit" class="btn" value="Produto">
        </form>
        <form action="Clgrupo/ListaGrupo.php">
        <input type="submit" class="btn" value="Lista de Grupo">
        </form>
        <form action="BAGUIDEVENDA/lsita.php">
        <input type="submit" class="btn" value="Lista de Venda">
        </form>
        <form action="BAGUIDEVENDA/formCadastroVenda.php">
        <input type="submit" class="btn" value="Cadastrar Venda">
        </form>
     
        
    </div>
</div>
</div>
    
</body>
</html>



