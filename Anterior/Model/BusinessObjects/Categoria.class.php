<?php

class Categoria extends Base
{
    private $ID;
    private $NomeCategoria;
    private $DescCategoria;
    
    function __construct($ID, $NomeCategoria, $DescCategoria) {
        $this->ID = $ID;
        $this->NomeCategoria = $NomeCategoria;
        $this->DescCategoria = $DescCategoria;
    }
    
         
    public function getClassName()
    {
        return "Categoria";
    }
    
    
    public function getID() {
        return $this->ID;
    }

    public function setID($ID) {
        $this->ID = $ID;
    }

    public function getNomeCategoria() {
        return $this->NomeCategoria;
    }

    public function setNomeCategoria($NomeCategoria) {
        $this->NomeCategoria = $NomeCategoria;
    }

    public function getDescCategoria() {
        return $this->DescCategoria;
    }

    public function setDescCategoria($DescCategoria) {
        $this->DescCategoria = $DescCategoria;
    }


    
}

?>
