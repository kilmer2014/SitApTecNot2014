<?php

class PublicacaoLike extends Base
{
    private $ID;
    private $PublicacaoID;
    private $UsuarioID;
    private $SePositivo;
    
    function __construct($PublicacaoID, $UsuarioID, $SePositivo) {
        $this->PublicacaoID = $PublicacaoID;
        $this->UsuarioID = $UsuarioID;
        $this->SePositivo = $SePositivo;
    }

    public function getClassName()
    {
        return "PublicacaoLike";
    }
    
    public function getPublicacaoID() {
        return $this->PublicacaoID;
    }

    public function getUsuarioID() {
        return $this->UsuarioID;
    }

    public function getSePositivo() {
        return $this->SePositivo;
    }

    public function setPublicacaoID(Publicacao $PublicacaoID) {
        $this->PublicacaoID = $PublicacaoID;
    }

    public function setUsuarioID(Usuario $UsuarioID) {
        $this->UsuarioID = $UsuarioID;
    }

    public function setSePositivo($SePositivo) {
        $this->SePositivo = $SePositivo;
    }

    public function getID() {
        return $this->ID;
    }
    
    public function SalvaObjeto($Objeto) {
        parent::SalvaObjeto($Objeto);
    }



}
