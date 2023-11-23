
<?php
 header("Access-Control-Allow-Origin: *");
    define('BASE', 'C:/xampp/htdocs/projeto samuel/projeto - back/');
        // define('BASE', $_SERVER['DOCUMENT_ROOT'].'/projeto');
        require_once BASE . 'Banco/Conexao.php';
        require_once BASE . 'ClCliente/DAOCliente.php'; 
        
            $dao = new DAOCliente();
            $lista =$dao->listaTodos();

            echo json_encode($lista);





?>