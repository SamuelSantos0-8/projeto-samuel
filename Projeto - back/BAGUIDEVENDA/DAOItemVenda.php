<?php
class DaoItemVenda
{
    public function listaPorVenda($idVenda)
    {
        $lista = [];
        $sql = 'select id, idVenda, idProduto, quantidade, precoVenda, quantidade*precoVenda as subtotal from itemvenda where idVenda = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $idVenda);
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }
    
    public function procuraUm($id)
    {
        $lista = [];
        $sql = 'select * from itemvenda where id = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $id);
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }

    public function inclui(ItemVenda $itemVenda)
    {
        $sql = 'insert into itemvenda (idVenda, idProduto, quantidade, precoVenda) values (?,?,?,?);';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $itemVenda->getIdVenda());
        $pst->bindValue(2, $itemVenda->getIdProduto());
        $pst->bindValue(3, $itemVenda->getQuantidade());
        $pst->bindValue(4, $itemVenda->getPrecoVenda());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function exclui($id)
    {
        $sql = 'delete from itemvenda where id = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $id);
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function altera(ItemVenda $itemVenda)
    {
        $sql = 'update venda set idVenda = ?, idProduto = ?, quantidade = ?, precoVenda = ? where id = ?;';
        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $itemVenda->getIdVenda());
        $pst->bindValue(2, $itemVenda->getIdProduto());
        $pst->bindValue(3, $itemVenda->getQuantidade());
        $pst->bindValue(4, $itemVenda->getPrecoVenda());
        $pst->bindValue(5, $itemVenda->getId());
        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }
}

