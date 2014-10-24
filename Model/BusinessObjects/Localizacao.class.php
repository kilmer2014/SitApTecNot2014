<?php

//include ("class/BaseObjects/Base.class.php");

class Localizacao extends Base
{
    private $ID;
    private $UsuarioID;
    private $Latitude;
    private $Longitude;
    private $Data;
    
    function __construct($UsuarioID, $Latitude, $Longitude, $Data) {
        $this->UsuarioID = $UsuarioID;
        $this->Latitude = $Latitude;
        $this->Longitude = $Longitude;
        $this->Data = $Data;
    }
    public function setID($ID) {
        $this->ID = $ID;
    }

        public function getClassName()
    {
        return "Localizacao";
    }
    public function getID() {
        return $this->ID;
    }

        public function getUsuarioID() {
        return $this->UsuarioID;
    }

    public function getLatitude() {
        return $this->Latitude;
    }

    public function getLongitude() {
        return $this->Longitude;
    }

    public function getData() {
        return $this->Data;
    }

    public function setUsuarioID(Usuario $UsuarioID) {
        $this->UsuarioID = $UsuarioID;
    }

    public function setLatitude($Latitude) {
        $this->Latitude = $Latitude;
    }

    public function setLongitude($Longitude) {
        $this->Longitude = $Longitude;
    }

    public function setData($Data) {
        $this->Data = $Data;
    }

    public function SalvaObjeto($Objeto) 
    {
        parent::SalvaObjeto($Objeto);
    }


}
