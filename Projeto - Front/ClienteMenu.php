<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
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
    <H1><img src="Image/Logo.png" id="imagecagada"alt="">Infomágica Eletronics</H1>
    
    <div class="container">
    <div class="box">

    <form action="./ClCliente/formCliente.php" class="formLogin">
        <input type="submit" value="Cadastrar Cliente" class="btn">    
    </form> 
    <form action="./ClCliente/ListaCliente.html" class="formLogin">
    <input type="submit" Value="Lista de Cliente" class="btn">
    </form>
    <form action="Menu.php" class="formLogin">
    <input type="submit" Value="Voltar" class="btn">
    </form>
    </div>
    </div>
</body>
</html>