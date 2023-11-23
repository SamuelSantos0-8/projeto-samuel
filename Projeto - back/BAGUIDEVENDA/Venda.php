<?php

class Venda
{
    private $id;
    private $cliente;
    private $data;
    private $valor;
    private $aberta;

    public function __construct($id, $cliente, $data, $valor, $aberta) {
        $this->id = $id;
        $this->cliente = $cliente;
        $this->data = $data;
        $this->valor = $valor;
        $this->aberta = $aberta;
    }
 
    public function getId() {
        return $this->id;
    }

    public function setId($id): self {
        $this->id = $id;
        return $this;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function setCliente($cliente): self {
        $this->cliente = $cliente;
        return $this;
    }

    public function getData() {
        return $this->data;
    }

    public function setData($data): self {
        $this->data = $data;
        return $this;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor): self {
        $this->valor = $valor;
        return $this;
    }

    public function getAberta() {
        return $this->aberta;
    }

    public function setAberta($aberta): self {
        $this->aberta = $aberta;
        return $this;
    }
}