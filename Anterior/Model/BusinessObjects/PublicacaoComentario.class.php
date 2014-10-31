<?php

class PublicacaoComentario extends Base
{
    private $ID;
    private $PublicacaoID;
    private $UsuarioID;
    private $Comentario;
    private $Data;
    
    
    function __construct($PublicacaoID, $UsuarioID, $Comentario, $Data) {
        $this->PublicacaoID = $PublicacaoID;
        $this->UsuarioID = $UsuarioID;
        $this->Comentario = $Comentario;
        $this->Data = $Data;
    }

    
    public function getClassName()
    {
        return "PublicacaoComentario";
    }
    
    public function getID() {
        return $this->ID;
    }

    public function getPublicacaoID() {
        return $this->PublicacaoID;
    }

    public function getUsuarioID() {
        return $this->UsuarioID;
    }

    public function getComentario() {
        return $this->Comentario;
    }

    public function getData() {
        return $this->Data;
    }

    public function setPublicacaoID($PublicacaoID) {
        $this->PublicacaoID = $PublicacaoID;
    }

    public function setUsuarioID($UsuarioID) {
        $this->UsuarioID = $UsuarioID;
    }

    public function setComentario($Comentario) {
        $this->Comentario = $Comentario;
    }

    public function setData($Data) {
        $this->Data = $Data;
    }

    public function SalvaObjeto($Objeto) {
        parent::SalvaObjeto($Objeto);
    }

}
