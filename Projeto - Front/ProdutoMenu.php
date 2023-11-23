<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="CSS/estilo-Cliente.css">

    <style>
        html{
            font-family: sans-serif;
            margin-left: 35px;

        }
        a{
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
    
    <h1>Loja de Manutenção e Informática</h1>
    <div class="container">
        <div class="box">
        <form action="./ClProduto/formCadastraProduto.php" class="formLogin">
        <input type="submit" value="Cadastrar Produto" class="btn">    
        </form> 
        <form action="./ClProduto/listaProduto.php" class="formLogin">
        <input type="submit" Value="Lista de Produtos" class="btn">
        </form>
    
    <form action="Menu.php" class="formLogin">
        <input type="submit" Value="Voltar" class="btn">
    </form>
    </div>
    </div>
</body>
</html>