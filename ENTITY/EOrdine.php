<?php
class EOrdine{
    private $Prodotti=array();
    private $IDUtente;
    private $DataAcquisto;
    
    public function __construct($Prodotti, $IDUtente, $DataAcquisto){
        $this->Prodotti=$Prodotti;
        $this->IDUtente=$IDUtente;
        $this->DataAcquisto=$DataAcquisto;
    }
	/**
	 * @return mixed
	 */
	public function getDataAcquisto() {
		return $this->DataAcquisto;
	}
	
	/**
	 * @param mixed $DataAcquisto 
	 * @return self
	 */
	public function setDataAcquisto($DataAcquisto): self {
		$this->DataAcquisto = $DataAcquisto;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getIDUtente() {
		return $this->IDUtente;
	}
	
	/**
	 * @param mixed $IDUtente 
	 * @return self
	 */
	public function setIDUtente($IDUtente): self {
		$this->IDUtente = $IDUtente;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getProdotti() {
		return $this->Prodotti;
	}

	/**
	 * @param mixed $Prodotti 
	 * @return self
	 */
	public function setProdotti($Prodotti): self {
		$this->Prodotti = $Prodotti;
		return $this;
	}
    //aggiungi prodotto all'ordine
        public function addProdottoOrdine(EProdotto $Prodotti) {
		array_push($this->Prodotti, $Prodotti);
    }
    
}
?>