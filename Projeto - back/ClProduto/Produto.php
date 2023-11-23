<?php
class Produto {
	private $idProduto;
	private $descricao;
	private $preco;

	private $fkidGrupo;
	public function __construct($idProduto,$descricao,$preco,$fkidGrupo){
		$this->idProduto =$idProduto;
		$this->descricao = $descricao;
		$this->preco = $preco;
		$this->fkidGrupo = $fkidGrupo;


	}
	/**
	 * @return mixed
	 */
	public function getIdProduto() {
		return $this->idProduto;
	}
	
	/**
	 * @param mixed $idProduto 
	 * @return self
	 */
	public function setIdProduto($idProduto): self {
		$this->idProduto = $idProduto;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getDescricao() {
		return $this->descricao;
	}
	
	/**
	 * @param mixed $descricao 
	 * @return self
	 */
	public function setDescricao($descricao): self {
		$this->descricao = $descricao;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getPreco() {
		return $this->preco;
	}
	
	/**
	 * @param mixed $preco 
	 * @return self
	 */
	public function setPreco($preco): self {
		$this->preco = $preco;
		return $this;
	}


	/**
	 * @return mixed
	 */
	public function getFkidGrupo() {
		return $this->fkidGrupo;
	}
	
	/**
	 * @param mixed $fkidGrupo 
	 * @return self
	 */
	public function setFkidGrupo($fkidGrupo): self {
		$this->fkidGrupo = $fkidGrupo;
		return $this;
	}
}


?>