<?php 

class Cliente {
  private $id;
  private $nome;
  private $sobrenome;
  private $cpf;
  private $dividas;
  private $created_at;
  private $updated_at;

  public function __construct(){
    $this->dividas = new ArrayObject();
  }

  //Getters

  public function getId(){
    return $this->id;
  }

  public function getNome(){
    return $this->nome;
  }

  public function getSobrenome(){
    return $this->sobrenome;
  }

  public function getCpf(){
    return $this->cpf;
  }

  public function getDividas(){
    return $this->dividas;
  }

  public function getCreatedAt(){
    return $this->created_at;
  }

  public function getUpdatedSt(){
    return $this->updated_at;
  }

  //Setters

  public function setId($id){
    $this->id = $id;
  }

  public function setNome($nome){
    $this->nome = $nome;
  }

  public function setSobrenome($sobrenome){
    $this->sobrenome = $sobrenome;
  }

  public function setCpf($cpf){
    $this->cpf = $cpf;
  }

  public function setDividas($dividas){
    $this->dividas = $dividas;
  }

  public function setCreatedAt($created_at){
    $this->created_at = $created_at;
  }

  public function setUpdatedAt($updated_at){
    $this->updated_at = $updated_at;
  }

}

?>