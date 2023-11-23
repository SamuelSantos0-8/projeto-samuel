<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Grupo</title>
    <link rel="stylesheet" href="../CSS/estilo-edita.css">
</head>
<?php
    
    $tip = $_POST['tip'];
    $id = $_POST['idc'];
    
?>

<body>
<div class="Titulo">
    <h1>Editar Cliente</h1>
</div>
<div class="container">
    <div class="box">

<form action="AlterarGrupo.php" method="post" class="formLogin">

        <label for="nome">Tipo</label>
        <input type="text" name="tipo" id="tipo" value="<?= $tip ?>"><br>
    
        <input type="hidden" name="idgrupo" id="idgrupo" value="<?= $id ?>"><br>

        <input class="btn" type="submit" Value="Salvar">
    </form>
    <div class="botoes">
        <form action="../Menu.php" class="formBotao">
            <input type="submit" Value="Menu" class="btn">
        </form>
        <form action="ListaGrupo.php" class="formBotao">
            <input type="submit" Value="Lista" class="btn">
        </form>
    </div>
    </div>
</body>
</html>  