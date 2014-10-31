<?php

class Amigo extends Base
{
    private $ID;
    private $UsuarioID;
    private $UsuarioAmigoID;
    
    public function getClassName()
    {
        return "Amigo";
    }
    function __construct($UsuarioID, $UsuarioAmigoID) {
        $this->UsuarioID = $UsuarioID;
        $this->UsuarioAmigoID = $UsuarioAmigoID;
    }

    public function getUsuarioID() {
        return $this->UsuarioID;
    }

    public function getUsuarioAmigoID() {
        return $this->UsuarioAmigoID;
    }

    public function setUsuarioID(Usuario $UsuarioID) {
        $this->UsuarioID = $UsuarioID;
    }

    public function setUsuarioAmigoID(Usuario $UsuarioAmigoID) {
        $this->UsuarioAmigoID = $UsuarioAmigoID;
    }

    public function getID() {
        return $this->ID;
    }
    
    public function SalvaObjeto($Objeto) {
        parent::SalvaObjeto($Objeto);
    }

    


}
