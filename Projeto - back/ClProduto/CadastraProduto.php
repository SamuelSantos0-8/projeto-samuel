<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
define('BASE', 'C:/xampp/htdocs/projeto/');
// define('BASE', $_SERVER['DOCUMENT_ROOT'].'/projeto');
require_once BASE . '/Banco/Conexao.php';
require_once BASE . '/ClProduto/Produto.php';
require_once BASE . 'ClProduto/DAOProduto.php';
    
    

    $desc = $_POST['descricao'];
    $preco = $_POST['preco'];
    $fkidGrupo = $_POST['fkidgrupo'];
    var_dump($fkidGrupo);
    $produto  = new Produto(
    0,
    $desc,
    $preco,
    $fkidGrupo,

);

$dao = new DAOProduto();
if($dao->inclui($produto)) {
    echo 'Salvou';
}else{
    echo 'Não Salvou';

}
?>   

#<?php
 #   require_once BASE. 'Clgrupo/grupo';
  #  require_once BASE. 'Clgrupo/DAOGrupo';
   # $fkidGrupo = $_POST['idgrupo'];
    
   # $grupo = new grupo($tipo,null,$fkidProduto);
   # $dao = new DAOGrupo();
   # if($dao-> inclui($grupo)){
   #     echo'esse carai salvô';
   # }else{
   #     echo'agora deu o carai memo deu a porra fodeu foi tudo';
   #    echo'<iframe width="560" height="315" src="https://www.youtube.com/embed/ns_15sFOLoQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
   # 
   # }

 #?>
<a href="../index.php">Voltar</a>
<a href="listaProduto.php">Lista de Produtos</a>
</body>
</html>


