<?php
    define('BASE', 'C:/xampp/htdocs/projeto/');
    // define('BASE', $_SERVER['DOCUMENT_ROOT'].'/projeto');
    require_once BASE . '/Banco/Conexao.php';
    require_once BASE . '/ClCliente/cliente.php';
    require_once BASE . 'ClCliente/DAOCliente.php';
    
    $dao = new DAOCliente();
    
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $cp = $_POST['cp'];
    $idad = $_POST['idad'];

    $Cliente = new Cliente(
        $id,
        $nom,        
        $cp,
        $idad
    );


    if($dao->altera($Cliente)){
        
        
        echo '{mensagem: "Mudou"}';

    }else{
        echo '{mensagem: "Não Mudou"}';
    }    
?>
