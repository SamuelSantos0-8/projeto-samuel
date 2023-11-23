<?php
    class Fornecedor{
        private $idFornecedor;
        private $nome;
        private $Telefone;
        private $email;
        private $endereco;
        private $cnpj;
        public function __construct($idFornecedor,$nome,$Telefone,$email,$endereco,$cnpj){
            $this->idFornecedor =$idFornecedor;
            $this->nome = $nome;
            $this->Telefone = $Telefone;
            $this->email = $email;
            $this->endereco = $endereco;
            $this->cnpj = $cnpj;
        }
	/**
	 * @return mixed
	 */
	public function getIdFornecedor() {
		return $this->idFornecedor;
	}
	
	/**
	 * @param mixed $idFornecedor 
	 * @return self
	 */
	public function setIdFornecedor($idFornecedor): self {
		$this->idFornecedor = $idFornecedor;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getNome() {
		return $this->nome;
	}
	
	/**
	 * @param mixed $nome 
	 * @return self
	 */
	public function setNome($nome): self {
		$this->nome = $nome;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getTelefone() {
		return $this->Telefone;
	}
	
	/**
	 * @param mixed $Telefone 
	 * @return self
	 */
	public function setTelefone($Telefone): self {
		$this->Telefone = $Telefone;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEmail() {
		return $this->email;
	}
	
	/**
	 * @param mixed $email 
	 * @return self
	 */
	public function setEmail($email): self {
		$this->email = $email;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEndereco() {
		return $this->endereco;
	}
	
	/**
	 * @param mixed $endereco 
	 * @return self
	 */
	public function setEndereco($endereco): self {
		$this->endereco = $endereco;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCnpj() {
		return $this->cnpj;
	}
	
	/**
	 * @param mixed $cnpj 
	 * @return self
	 */
	public function setCnpj($cnpj): self {
		$this->cnpj = $cnpj;
		return $this;
	}
}
?>