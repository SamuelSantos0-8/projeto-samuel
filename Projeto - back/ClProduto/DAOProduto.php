<?php
 class DAOProduto {  
    public function listaTodos(){
       $lista = [];
       $pst =Conexao::getPreparedStatement('select * from produto;');
       $pst -> execute();
       $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
       return $lista;
    }
    public function inclui(Produto $produto){
        var_dump($produto);
        $sql = 'insert into produto(descricao,preco,fkidGrupo) values (?,?,?);';
        $pst = Conexao::getPreparedStatement($sql);
        $pst -> bindValue(1,$produto->getDescricao());
        $pst -> bindValue(2,$produto->getPreco());
        $pst -> bindValue(3,$produto->getFkidGrupo());

        if($pst->execute()){
            return true;
        } else{
            return false;
        }
    }
    public function exclui($id){
        $sql = 'delete from produto where idProduto=?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1,$id);
        if($pst->execute()){
            return true;
        }else{
            return false;
        }
    }
    public function altera(Produto $produto){
        $sql = 'update produto set descricao= ?, preco = ?, fkidGrupo = ? where idProduto = ? ';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $produto->getDescricao());
        $pst->bindValue(2, $produto->getPreco());
        $pst->bindValue(3, $produto->getFkidGrupo());
        $pst->bindValue(4, $produto->getIdProduto());
        if($pst->execute()){
            return true;
        }else{ 
           return false;
        };

    }

}




?>