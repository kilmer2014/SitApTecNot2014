<?php

class Publicacao extends Base
{
    private $ID;
    private $Titulo;
    private $Conteudo;
    private $TipoPublicacao;
    private $TipoPrivacidade;
    private $UsuarioID;
    private $DataCriacao;
    private $DataUltimaEdicao;
    private $CategoriaID;
    
    function __construct($Titulo, $Conteudo, $TipoPublicacao, $TipoPrivacidade, $Data, $UsuarioID, $CategoriaID, $DataCriacao, $DataUltimaEdicao) {
        $this->Titulo = $Titulo;
        $this->Conteudo = $Conteudo;
        $this->TipoPublicacao = $TipoPublicacao;
        $this->TipoPrivacidade = $TipoPrivacidade;
        $this->Data = $Data;
        $this->UsuarioID = $UsuarioID;
        $this->CategoriaID = $CategoriaID;
        $this->DataCriacao = $DataCriacao;
        $this->DataUltimaEdicao = $DataUltimaEdicao;
    }

        public function getDataCriacao() {
        return $this->DataCriacao;
    }

    public function setDataCriacao($DataCriacao) {
        $this->DataCriacao = $DataCriacao;
    }

    public function getDataUltimaEdicao() {
        return $this->DataUltimaEdicao;
    }

    public function setDataUltimaEdicao($DataUltimaEdicao) {
        $this->DataUltimaEdicao = $DataUltimaEdicao;
    }

        
    public function getClassName()
    {
        return "Publicacao";
    }
    
    public function setID($ID) {
        $this->ID = $ID;
    }

        public function getID() {
        return $this->ID;
    }

    public function getTitulo() {
        return $this->Titulo;
    }

    public function getConteudo() {
        return $this->Conteudo;
    }

    public function getTipoPublicacao() {
        return $this->TipoPublicacao;
    }

    public function getTipoPrivacidade() {
        return $this->TipoPrivacidade;
    }

    public function getUsuarioID() {
        return $this->UsuarioID;
    }
 
    public function setTitulo($Titulo) {
        $this->Titulo = $Titulo;
    }

    public function setConteudo($Conteudo) {
        $this->Conteudo = $Conteudo;
    }

    public function setTipoPublicacao($TipoPublicacao) {
        $this->TipoPublicacao = $TipoPublicacao;
    }

    public function setTipoPrivacidade($TipoPrivacidade) {
        $this->TipoPrivacidade = $TipoPrivacidade;
    }

    public function setUsuarioID(Usuario $UsuarioID) {
        $this->UsuarioID = $UsuarioID;
    }
    
    public function getCategoriaID() {
        return $this->CategoriaID;
    }

    public function setCategoriaID(Categoria $CategoriaID) {
        $this->CategoriaID = $CategoriaID;
    }

        public function SalvaObjeto($Objeto) {
        parent::SalvaObjeto($Objeto);
    }

}
