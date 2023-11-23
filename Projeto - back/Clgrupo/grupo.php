<?php
    class grupo{
        private $tipo;
        private $idgrupo;
    

    
        public function __construct($tipo,$idgrupo){
            $this->idgrupo =$idgrupo;
            $this->tipo = $tipo;
    

        }
    
	public function getIdgrupo() {
		return $this->idgrupo;
	}
	
	/**
	 * @param mixed $idgrupo 
	 * @return self
	 */
	public function setIdgrupo($idgrupo): self {
		$this->idgrupo = $idgrupo;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getTipo() {
		return $this->tipo;
	}
	
	/**
	 * @param mixed $tipo 
	 * @return self
	 */
	public function setTipo($tipo): self {
		$this->tipo = $tipo;
		return $this;
	}
}
?>