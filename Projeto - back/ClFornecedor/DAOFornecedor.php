<?php 
  class DAOFornecedor {  
    public function listaTodos(){
       $lista = [];
       $pst =Conexao::getPreparedStatement('select * from fornecedor;');
       $pst -> execute();
       $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
       return $lista;
    }
    public function inclui(Fornecedor $fornecedor){
        $sql = 'insert into fornecedor(nome,Telefone,email,endereco,cnpj) values (?,?,?,?,?);';
        $pst = Conexao::getPreparedStatement($sql);
        $pst -> bindValue(1,$fornecedor->getNome());
        $pst -> bindValue(2,$fornecedor->getTelefone());
        $pst -> bindValue(3,$fornecedor->getEmail());
        $pst -> bindValue(4,$fornecedor->getEndereco());
        $pst -> bindValue(5,$fornecedor->getCnpj());


        if($pst->execute()){
            return true;
        } else{
            return false;
        }
    }
    public function exclui($id){
        $sql = 'delete from fornecedor where idFornecedor=?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1,$id);
        if($pst->execute()){
            return true;
        }else{
            return false;
        }
    }
    public function altera(Fornecedor $fornecedor){
        $sql = 'update fornecedor set nome = ?, Telefone=?, email=?, endereco=?, cnpj=? where idFornecedor=?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst -> bindValue(1,$fornecedor->getNome());
        $pst -> bindValue(2,$fornecedor->getTelefone());
        $pst -> bindValue(3,$fornecedor->getEmail());
        $pst -> bindValue(4,$fornecedor->getEndereco());
        $pst -> bindValue(5,$fornecedor->getCnpj());
        $pst -> bindValue(6,$fornecedor->getIdFornecedor());
       
       
        if($pst->execute()){
             return true;
        }else{ 
            return false;
        };
    }

}



?>