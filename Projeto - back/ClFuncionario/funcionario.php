<?php
    class Funcionario{
    private $idfuncionario;
    private $nome;
    private $descricao;
    private $salario;
    private $idade;
    private $cpf;
    public function __construct($idfuncionario,$nome,$descricao,$salario,$idade,$cpf){
        $this->idfuncionario =$idfuncionario;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->salario = $salario;
        $this->idade = $idade;
        $this->cpf = $cpf;
    }
	/**
	 * @return mixed
	 */
	public function getIdfuncionario() {
		return $this->idfuncionario;
	}
	
	/**
	 * @param mixed $idfuncionario 
	 * @return self
	 */
	public function setIdfuncionario($idfuncionario): self {
		$this->idfuncionario = $idfuncionario;
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
	public function getSalario() {
		return $this->salario;
	}
	
	/**
	 * @param mixed $salario 
	 * @return self
	 */
	public function setSalario($salario): self {
		$this->salario = $salario;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getIdade() {
		return $this->idade;
	}
	
	/**
	 * @param mixed $idade 
	 * @return self
	 */
	public function setIdade($idade): self {
		$this->idade = $idade;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCpf() {
		return $this->cpf;
	}
	
	/**
	 * @param mixed $cpf 
	 * @return self
	 */
	public function setCpf($cpf): self {
		$this->cpf = $cpf;
		return $this;
	}
}

?>