<?php
class ItemVenda 
{
    private $id;
    private $idVenda;
    private $idProduto;
    private $quantidade;
    private $precoVenda;

    public function __construct($id, $idVenda, $idProduto, $quantidade, $precoVenda) {
        $this->id = $id;
        $this->idVenda = $idVenda;
        $this->idProduto = $idProduto;
        $this->quantidade = $quantidade;
        $this->precoVenda = $precoVenda;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id): self {
        $this->id = $id;
        return $this;
    }

    public function getIdVenda() {
        return $this->idVenda;
    }

    public function setIdVenda($idVenda): self {
        $this->idVenda = $idVenda;
        return $this;
    }

    public function getIdProduto() {
        return $this->idProduto;
    }

    public function setIdProduto($idProduto): self {
        $this->idProduto = $idProduto;
        return $this;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade): self {
        $this->quantidade = $quantidade;
        return $this;
    }

    public function getPrecoVenda() {
        return $this->precoVenda;
    }

    public function setPrecoVenda($precoVenda): self {
        $this->precoVenda = $precoVenda;
        return $this;
    }
}
