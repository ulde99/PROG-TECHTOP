<?php
class EUtente{


    private $Nome;
    private $Cognome;
    private $Username;
    private $Password;
    private $Stato; //verifica il ban
    private $CAP;
    private $Citta;
    private $Via;
    private $Email;
 /**
  * Summary of Admin
  * @var bool
  */
	private bool $Admin; //utente può essere admin (più di un admin)

    /**
     * Summary of Costruttore di Utente
     * @param mixed $Nome
     * @param mixed $Cognome
     * @param mixed $Username
     * @param mixed $Password
     * @param mixed $Stato
     * @param mixed $CAP
     * @param mixed $Citta
     * @param mixed $Via
     * @param mixed $Email
     */
    public function __construct($Nome, $Cognome, $Username, $Password, $Stato, $CAP, $Citta, $Via, $Email,$Admin){
        $this->Nome=$Nome;
        $this->Cognome=$Cognome;
        $this->Username=$Username;
        $this->Password=$Password;
        $this->Stato=$Stato;
        $this->CAP=$CAP;
        $this->Citta=$Citta;
        $this->Via=$Via;
        $this->Email=$Email;
		$this->Admin=$Admin;
     }




    /**
	 * @return mixed
	 */
	public function getNome() {
		return $this->Nome;
	}
	
	/**
	 * @param mixed $Nome 
	 * @return self
	 */
	public function setNome($Nome): self {
		$this->Nome = $Nome;
		return $this;
	}
    /**
	 * @return mixed
	 */
	public function getCognome() {
		return $this->Cognome;
	}
	
	/**
	 * @param mixed $Cognome 
	 * @return self
	 */
	public function setCognome($Cognome): self {
		$this->Cognome = $Cognome;
		return $this;
	}
/**
	 * @return mixed
	 */
	public function getUsername() {
		return $this->Username;
	}
	
	/**
	 * @param mixed $Username 
	 * @return self
	 */
	public function setUsername($Username): self {
		$this->Username = $Username;
		return $this;
	}
    /**
	 * @return mixed
	 */
	public function getPassword() {
		return $this->Password;
	}
	
	/**
	 * @param mixed $Password 
	 * @return self
	 */
	public function setPassword($Password): self {
		$this->Password = $Password;
		return $this;
	}
	/**
	 * @return mixed
	 */
	public function getEmail() {
		return $this->Email;
	}
	
	/**
	 * @param mixed $Email 
	 * @return self
	 */
	public function setEmail($Email): self {
		$this->Email = $Email;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getVia() {
		return $this->Via;
	}
	
	/**
	 * @param mixed $Via 
	 * @return self
	 */
	public function setVia($Via): self {
		$this->Via = $Via;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCitta() {
		return $this->Citta;
	}
	
	/**
	 * @param mixed $Citta 
	 * @return self
	 */
	public function setCitta($Citta): self {
		$this->Citta = $Citta;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCAP() {
		return $this->CAP;
	}
	
	/**
	 * @param mixed $CAP 
	 * @return self
	 */
	public function setCAP($CAP): self {
		$this->CAP = $CAP;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getStato() {
		return $this->Stato;
	}
	
	/**
	 * @param mixed $Stato 
	 * @return self
	 */
	public function setStato($Stato): self {
		$this->Stato = $Stato;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function getAdmin(): bool {
		return $this->Admin;
	}
	
	/**
	 * @param bool $Admin 
	 * @return self
	 */
	public function setAdmin(bool $Admin): self {
		$this->Admin = $Admin;
		return $this;
	}
}

?>