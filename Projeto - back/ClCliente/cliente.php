<?php
    class Cliente{
        private $nome;
        private $idCliente;
        private $cpf;
        private $idade;
        public function __construct($idCliente,$nome,$cpf,$idade){
            $this->idCliente =$idCliente;
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->idade = $idade;


        }
        public function getCpf() {
            return $this->cpf;
        }
        
        public function setCpf($cpf): self {
            $this->cpf = $cpf;
            return $this;
        }
        public function getidCliente() {
            return $this->idCliente;
        }
       
        public function setidCliente($idCliente): self {
            $this->idCliente = $idCliente;
            return $this;
        }
        
        public function getNome() {
            return $this->nome;
        }
        
        
        public function setNome($nome): self {
            $this->nome = $nome;
            return $this;
        }

        
        public function getIdade() {
            return $this->idade;
        }
        
        public function setIdade($idade): self {
            $this->idade = $idade;
            return $this;
        }
}
?>