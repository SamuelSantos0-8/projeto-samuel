<?php
 class DAOFuncionario {  
    public function listaTodos(){
       $lista = [];
       $pst =Conexao::getPreparedStatement('select * from funcionario;');
       $pst -> execute();
       $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
       return $lista;
    }
    public function inclui(Funcionario $funcionario){
        $sql = 'insert into funcionario(nome,descricao,salario,idade,cpf) values (?,?,?,?,?);';
        $pst = Conexao::getPreparedStatement($sql);
        $pst -> bindValue(1,$funcionario->getNome());
        $pst -> bindValue(2,$funcionario->getDescricao());
        $pst -> bindValue(3,$funcionario->getSalario());
        $pst -> bindValue(4,$funcionario->getIdade());
        $pst -> bindValue(5,$funcionario->getCpf());

        if($pst->execute()){
            return true;
        } else{
            return false;
        }
    }
    public function exclui($id){
        $sql = 'delete from funcionario where idFuncionario=?';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1,$id);
        if($pst->execute()){
            return true;
        }else{
            return false;
        }
    }
    public function altera(Funcionario $funcionario){
        $sql = 'update funcionario set nome = ?, descricao= ?, salario = ?, idade = ?,cpf=? where idFuncionario = ? ';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $funcionario->getNome());
        $pst->bindValue(2, $funcionario->getDescricao());
        $pst->bindValue(3, $funcionario->getSalario());
        $pst->bindValue(4, $funcionario->getIdade());
        $pst->bindValue(5, $funcionario->getCpf());
        $pst->bindValue(6, $funcionario->getIdfuncionario());
        if($pst->execute()){
            return true;
        }else{ 
           return false;
        };

    }

}




?>