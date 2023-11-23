<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/estilo.css">
</head>

<body>
    <div class="Titulo">
        <img src="Image/Logo.png" id="imagecagada" alt="">
        <h1>Infomágica Eletronics</h1>

    </div>



    <div class="container">
        <div class="box">

            <h1>Login</h1>
            <form action="Menu.php" class="formLogin">
                <label for="">Email</label>
                <input type="email" name="email" placeholder="Digite seu e-mail" autofocus="true"><br>
                <label for="Senha">Senha</label>
                <input type="password" name="senha" placeholder="Digite seu e-mail"><br>

                <input type="submit" classe="btn" value="Entrar">
            </form>

        </div>
    </div>

    <!--
    <label for="id_estrangeiro">foreingkey</label>
    <select name="id estrangeiro" id="id estrangeiro">
    #<?php
    #require_once '../../dao/DaoClasse.php';
    #$daoClasse = new DAOClasse();
    #$lista = $daoClasse->listatodos();
    #foreach($lista as $classe){
    #    echo'<option value="'.$classe['id'].'">'.$classe['nome'].'</option>';
    #
    #}
    #?>
    
    </select>
-->
    <!--no cadastra
 #<?php
 #require_once '../pasta/fds';
 #$idclasse = $_POST['idClasse'];
 
 #$classe = new classefds(null, $idforeignkey,$nome,$fds);
 #$daoclasse = new daoClasse();
 #if($daoClasse-> inclui($classe)){
 #    echo'esse carai salvô'
 #}else{
 #    echo'agora deu o carai memo deu a porra fodeu foi tudo';
 #    echo'<iframe width="560" height="315" src="https://www.youtube.com/embed/ns_15sFOLoQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
 #
 #}
#
 #?>
 -->

</body>

</html>