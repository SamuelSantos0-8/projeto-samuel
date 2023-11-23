<?php
    define('BASE', 'C:/xampp/htdocs/projeto/');
    // define('BASE', $_SERVER['DOCUMENT_ROOT'].'/projeto');
    require_once BASE . '/Banco/Conexao.php';
    require_once BASE . '/ClCliente/cliente.php';
    require_once BASE . 'ClCliente/DAOCliente.php';

    $dao = new DAOCliente();
    
    
    $idC = $_POST['idc'];
    
    
    if ($dao->exclui($idC)) {
        
        
        echo '{mensagem: "dont tienes mais"}';
        
    }else{

       echo '{mensagem: "Não Excluiu"}';
    }
?>
