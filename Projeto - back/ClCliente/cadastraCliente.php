   <?PHP 
    define('BASE', 'C:/xampp/htdocs/projeto samuel/projeto - back');
    // define('BASE', $_SERVER['DOCUMENT_ROOT'].'/projeto');
    require_once BASE . '/Banco/Conexao.php';
    require_once BASE . '/ClCliente/cliente.php';
    require_once BASE . '/ClCliente/DAOCliente.php';

    $nom = $_POST['nome'];
    $cp = $_POST['cpf'];
    $idad = $_POST['idade'];

    $Cliente = new Cliente(
        0,
        $nom,
        $cp,
        $idad
    );


    $dao = new DAOCliente();
    if($dao->inclui($Cliente)) {
    
        
        echo '{"mensagem": "Salvo com sucesso"}';
        
        
    }else{
       
        echo '{"mensagem": "Não Salvou"}';
        
    }


    ?>

