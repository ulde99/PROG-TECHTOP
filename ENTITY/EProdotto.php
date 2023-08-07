<?php
/**
 * Summary of EProdotto
 */
class EProdotto implements JsonSerializable{
    private $IDProdotto;
    /**
     * Summary of Marca
     * @var 
     */
    private $Marca;
    /**
     * Summary of Modello
     * @var 
     */
    private $Modello;
    /**
     * Summary of Descrizione
     * @var 
     */
    private $Descrizione;
    /**
     * Summary of Prezzo
     * @var 
     */
    private $Prezzo;
    /**
     * Summary of IDUtente
     * @var 
     */
    private $IDUtente;

    private $IDUtenteC;
    private bool $ControlloAcquisto;

    private $Categoria;

    private $idFoto; //idFoto senza costruttore getter e setter poichè già presenti nella classe EFoto
    
    /**
     * Summary of Costruttore Prodotto
     * @param mixed $Marca
     * @param mixed $Modello
     * @param mixed $Descrizione
     * @param mixed $Prezzo
     * @param mixed $IDUtente
     */
    public function __construct($IDProdotto,$Marca, $Modello, $Descrizione, $Prezzo, $IDUtente,$IDUtenteC=null, $ControlloAcquisto,$Categoria){
        $this->IDProdotto=$IDProdotto;
        $this->Marca=$Marca;
        $this->Modello=$Modello;
        $this->Descrizione=$Descrizione;
        $this->Prezzo=$Prezzo;
        $this->IDUtente=$IDUtente;
        $this->IDUtenteC=$IDUtenteC;
        $this->ControlloAcquisto=$ControlloAcquisto;
        $this->Categoria=$Categoria;
        //manca la foto
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
	public function getPrezzo() {
		return $this->Prezzo;
	}
	
	/**
	 * @param mixed $Prezzo 
	 * @return self
	 */
	public function setPrezzo($Prezzo): self {
		$this->Prezzo = $Prezzo;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getDescrizione() {
		return $this->Descrizione;
	}

	/**
	 * @param mixed $Descrizione 
	 * @return self
	 */
	public function setDescrizione($Descrizione): self {
		$this->Descrizione = $Descrizione;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getMarca() {
		return $this->Marca;
	}

	/**
	 * @param mixed $Marca 
	 * @return self
	 */
	public function setMarca($Marca): self {
		$this->Marca = $Marca;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getModello() {
		return $this->Modello;
	}
    /**
	 * @param mixed $Modello
	 * @return self
	 */
	public function setModello($Modello): self {
		$this->Modello = $Modello;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getIDUtenteC() {
		return $this->IDUtenteC;
	}
	
	/**
	 * @param mixed $IDUtenteC 
	 * @return self
	 */
	public function setIDUtenteC($IDUtenteC): self {
		$this->IDUtenteC = $IDUtenteC;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function getControlloAcquisto() {
		return $this->ControlloAcquisto;
	}
	
	/**
	 * @param bool $ControlloAcquisto 
	 * @return self
	 */
	public function setControlloAcquisto($ControlloAcquisto): self {
		$this->ControlloAcquisto = $ControlloAcquisto;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCategoria() {
		return $this->Categoria;
	}
	
	/**
	 * @param mixed $Categoria 
	 * @return self
	 */
	public function setCategoria($Categoria): self {
		$this->Categoria = $Categoria;
		return $this;
	}
	/**
	 * @return mixed
	 */
	public function getIDProdotto() {
		return $this->IDProdotto;
	}
	
	/**
	 * @param mixed $IDProdotto 
	 * @return self
	 */
	public function setIDProdotto($IDProdotto): self {
		$this->IDProdotto = $IDProdotto;
		return $this;
	}
	public function jsonSerialize()
    {
        return
            [
                'Marca'   => $this->getMarca(),
                'Modello' => $this->getModello(),
                'Prezzo'   => $this->getPrezzo(),
                'Descrizione'   => $this->getDescrizione(),
                'IDUtente'   => $this->getIDUtente(),
                'IDUtenteC'   => $this->getIDUtenteC(),
                'Categoria'   => $this->getCategoria(),
                'ControlloAcquisto'   => $this->getControlloAcquisto(),
				'idFoto'   => $this->getIdFoto(),
                
            ];

    }
}


?>