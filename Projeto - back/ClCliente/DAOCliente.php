<?php 
  class DAOCliente {  
    public function listaTodos(){
       $lista = [];
       $pst =Conexao::getPreparedStatement('select * from cliente;');
       $pst -> execute();
       $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
       return $lista;
    }
    public function inclui(Cliente $cliente){
        $sql = 'insert into cliente(nome,idade,cpf) values (?,?,?);';
        $pst = Conexao::getPreparedStatement($sql);
        $pst -> bindValue(1,$cliente->getNome());
        $pst -> bindValue(2,$cliente->getIdade());
        $pst -> bindValue(3,$cliente->getCpf());

        if($pst->execute()){
            return true;
        } else{
            return false;
        }
    }
    public function exclui($id){
        $sql = 'delete from cliente where idCliente=?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1,$id);
        if($pst->execute()){
            return true;
        }else{
            return false;
        }
    }
    public function altera(Cliente $cliente){
        $sql = 'update cliente set nome = ?, cpf=?, idade=? where idCliente=?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $cliente->getNome());
        $pst->bindValue(2, $cliente->getCpf());
        $pst->bindValue(3, $cliente->getIdade());
        $pst->bindValue(4, $cliente->getidCliente());
       
       
        if($pst->execute()){
             return true;
        }else{ 
            return false;
        };
    }

}



?>