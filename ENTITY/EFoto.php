<?php

/**
 * Summary of EFoto
 */

class EFoto implements JsonSerializable
{
    /**
     * @var  id Foto
     */
    private  $idFoto;
    /**
     * @var  nome Foto
     */
    private  $nomeFoto;
    /**
     * @var mixed dimensione Foto
     */
    private $size;
    /**
     * @var mixed MIME type Foto
     */
    private $tipo;
    /**
     * @var mixed Foto
     */
    private $foto;
    //

    public function __construct( $idFoto,  $nomeFoto,  $size, $tipo, $foto)
    {
        $this->idFoto = $idFoto;
        $this->nomeFoto = $nomeFoto;
        $this->size = $size;
        $this->tipo = $tipo;
        $this->foto = base64_encode($foto);
    }

    //

    /**
     * @return  id Foto
     */
    public function getIdFoto()
    {
        return $this->idFoto;
    }

    /**
     * @param  $idFoto id Foto
     */
    public function setIdFoto( $idFoto): void
    {
        $this->idFoto = $idFoto;
    }

    /**
     * @return  nome Foto
     */
    public function getNomeFoto()
    {
        return $this->nomeFoto;
    }

    /**
     * @param  $nomeFoto nome Foto
     */
    public function setNomeFoto( $nomeFoto): void
    {
        $this->nomeFoto = $nomeFoto;
    }

    /**
     * @return mixed dimensione Foto
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param mixed $size dimensione Foto
     */
    public function setSize( $size): void
    {
        $this->size = $size;
    }

    /**
     * @return mixed MIME type Foto
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo MIME type Foto
     */
    public function setTipo($tipo): void
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed Foto
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * @param mixed $foto Foto
     */
    public function setFoto($foto): void
    {
        $this->foto = $foto;
    }
    
    //

    /**
     * Verificano la corrispondenza con il valore in input con i requisiti richiesti
     * @param $tipo valore inserito
     * @return bool
     */
    public function valPic($tipo) {
        if($tipo=="image/jpeg" || $tipo=="image/png")
            return true;
        else
            return false;
    }

    public function jsonSerialize ()
    {
        return
            [
                'idFoto'   => $this->getIdFoto(),
                'nomeFoto' => $this->getNomeFoto(),
                'size' => $this->getSize(),
                'tipo'  =>  $this->getTipo(),
                'foto'  =>  $this->getFoto()
            ];
    }




}