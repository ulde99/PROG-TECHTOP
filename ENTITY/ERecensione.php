<?php

class ERecensione implements JsonSerializable{
    private $IDRecensione;
    private $Valutazione;
    private $Messaggio;
    private $IDMittente;
    private $IDDestinatario;
	private $IDProdotto;

    public function __construct($IDRecensione,$Valutazione,$Messaggio,$IDMittente,$IDDestinatario,$IDProdotto){
        $this->IDRecensione=$IDRecensione;
        $this->Valutazione=$Valutazione;
        $this->Messaggio=$Messaggio;
        $this->IDMittente=$IDMittente;
        $this->IDDestinatario=$IDDestinatario;
		$this->IDProdotto=$IDProdotto;

    }
	/**
	 * @return mixed
	 */
	public function getIDDestinatario() {
		return $this->IDDestinatario;
	}
	
	/**
	 * @param mixed $IDDestinatario 
	 * @return self
	 */
	public function setIDDestinatario($IDDestinatario): self {
		$this->IDDestinatario = $IDDestinatario;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getIDMittente() {
		return $this->IDMittente;
	}
	
	/**
	 * @param mixed $IDMittente 
	 * @return self
	 */
	public function setIDMittente($IDMittente): self {
		$this->IDMittente = $IDMittente;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getMessaggio() {
		return $this->Messaggio;
	}

	/**
	 * @param mixed $Messaggio 
	 * @return self
	 */
	public function setMessaggio($Messaggio): self {
		$this->Messaggio = $Messaggio;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getValutazione() {
		return $this->Valutazione;
	}

	/**
	 * @param mixed $Valutazione 
	 * @return self
	 */
	public function setValutazione($Valutazione): self {
		$this->Valutazione = $Valutazione;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getIDRecensione() {
		return $this->IDRecensione;
	}

	/**
	 * @param mixed $IDRecensione 
	 * @return self
	 */
	public function setIDRecensione($IDRecensione): self {
		$this->IDRecensione = $IDRecensione;
		return $this;
	}
    public function jsonSerialize()
    {
        return
            [
                'IDRecensione'   => $this->getIDRecensione(),
                'Valutazione' => $this->getValutazione(),
                'Messaggio'   => $this->getMessaggio(),
                'IDMittente'   => $this->getIDMittente(),
                'IDDestinatario' => $this->getIDDestinatario(),
				'IDProdotto' => $this->getIDProdotto()
            ];
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
}


?>