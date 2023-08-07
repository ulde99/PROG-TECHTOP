<?php
/**
 * Summary of ECarrello
 */
class ECarrello{
    
    private $Totale;

    private $Prodotti=array();

    public function __construct($Prodotti,$Totale){
        $this->Prodotti=$Prodotti;
        $this->Totale=$Totale;

    }

	/**
	 * @return mixed
	 */
	public function getTotale() {
		return $this->Totale;
	}
	
	/**
	 * @param mixed $Totale 
	 * @return self
	 */
	public function setTotale($Totale): self {
		$this->Totale = $Totale;
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
    //metodo calcolo totale carrello
    public function addProdottoCarrello(EProdotto $Prodotti) {
		array_push($this->Prodotti, $Prodotti);
    }
    //elimina prodotto al carrello
    public function removeProdotto($pos) {
        unset($this->Prodotti[$pos]);
        $this->Prodotti=array_values($this->Prodotti);
    }
}


?>