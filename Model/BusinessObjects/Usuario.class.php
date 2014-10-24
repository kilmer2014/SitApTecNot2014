<?php

 
class Usuario extends Base
{
  private $ID;
  private $Login;
  private $Senha;
  private $Email;
  private $Nome;
  private $SobreNome;
  private $Foto;
  private $Status;
  private $Sexo;
  private $Relacionamento;
  private $SeAtivo; //0- Não 1-Sim
 
  /**
   * 
   * @param type $Login
   * @param type $Senha
   * @param type $Email
   * @param type $Nome
   * @param type $SobreNome
   * @param type $Sexo 0-Masculino 1-Feminino
   * @param type $Relacionamento 0-Solteiro 1-Namorando 2-Casado
   * @param type $SeAtivo 0-Sim 1-Não
   */
  

  public function getFoto() {
      return $this->Foto;
  }

  public function setFoto($Foto) {
      $this->Foto = $Foto;
  }

    function __construct($Login, $Senha, $Email, $Nome, $SobreNome, $Foto, $Status, $Sexo, $Relacionamento, $SeAtivo) {
      $this->Login = $Login;
      $this->Senha = $Senha;
      $this->Email = $Email;
      $this->Nome = $Nome;
      $this->SobreNome = $SobreNome;
      $this->Foto = $Foto;
      $this->Status = $Status;
      $this->Sexo = $Sexo;
      $this->Relacionamento = $Relacionamento;
      $this->SeAtivo = $SeAtivo;
  }

  public function setID($ID) {
      $this->ID = $ID;
  }
  
  public function getID() {
      return $this->ID;
  }

   public function getClassName()
  {
      return "Usuario";
  }

  
  public function getLogin() {
      return $this->Login;
  }

  public function getSenha() {
      return $this->Senha;
  }

  public function getEmail() {
      return $this->Email;
  }

  public function getNome() {
      return $this->Nome;
  }

  public function getSobreNome() {
      return $this->SobreNome;
  }

  public function getStatus() {
      return $this->Status;
  }

  public function getSexo() {
      return $this->Sexo;
  }

  public function getRelacionamento() {
      return $this->Relacionamento;
  }

  public function getSeAtivo() {
      return $this->SeAtivo;
  }

  /**
   * 
   * @param  $Login string
   */
  public function setLogin($Login) {
      $this->Login = $Login;
  }
  
  /**
   * 
   * @param $Senha string
   */
  public function setSenha($Senha) {
      $this->Senha = $Senha;
  }

  /**
   * 
   * @param $Email string
   */
  public function setEmail($Email) {
      $this->Email = $Email;
  }

  /**
   * 
   * @param $Nome string
   */
  public function setNome($Nome) {
      $this->Nome = $Nome;
  }

  /**
   * 
   * @param $SobreNome string
   */
  public function setSobreNome($SobreNome) {
      $this->SobreNome = $SobreNome;
  }

  /**
   * 
   * @param $Status string
   */
  public function setStatus($Status) {
      $this->Status = $Status;
  }

  /**
   * 
   * @param $Sexo 0- Masculino 1- Feminino
   */
  public function setSexo($Sexo) {
      $this->Sexo = $Sexo;
  }

  /**
   * 
   * @param $Relacionamento 0-Solteiro 1-Namorando 2-Casado
   */
  public function setRelacionamento($Relacionamento) {
      $this->Relacionamento = $Relacionamento;
  }

  /**
   * 
   * @param $SeAtivo 0-Não 1-Sim
   */
  public function setSeAtivo($SeAtivo) {
      $this->SeAtivo = $SeAtivo;
  }
    
  public function SalvaObjeto($Objeto) 
  {
      parent::SalvaObjeto($Objeto);
  }

}
