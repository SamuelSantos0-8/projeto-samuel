
<?php
    define('BASE', 'C:/xampp/htdocs/projeto/');
        // define('BASE', $_SERVER['DOCUMENT_ROOT'].'/projeto');
        require_once BASE . '/Banco/Conexao.php';
        require_once BASE . 'ClCliente/DAOCliente.php'; 
        
            $dao = new DAOCliente();
            $lista =$dao->listaTodos();

            echo json_encode($lista);





?>