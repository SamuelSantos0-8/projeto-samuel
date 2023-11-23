<?php 
  class DAOGrupo {  
    public function listaTodos(){
       $lista = [];
       $pst =Conexao::getPreparedStatement('select * from grupo;');
       $pst -> execute();
       $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
       return $lista;
    }
    public function inclui(grupo $grupo){
        $sql = 'insert into grupo(idGrupo,tipo) values (?,?);';
        $pst = Conexao::getPreparedStatement($sql);
        $pst -> bindValue(1,$grupo->getIdgrupo());
        $pst -> bindValue(2,$grupo->getTipo());

        if($pst->execute()){
            return true;
        } else{
            return false;
        }
    }
    public function exclui($id){
        $sql = 'delete from grupo where idGrupo=?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1,$id);
        if($pst->execute()){
            return true;
        }else{
            return false;
        }
    }
    public function altera(grupo $grupo){
        $sql = 'update grupo set tipo = ? where idGrupo= ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $grupo->getTipo());
        $pst->bindValue(2, $grupo->getIdgrupo());
;
       
       
        if($pst->execute()){
             return true;
        }else{ 
            return false;
        };
    }

}



?>