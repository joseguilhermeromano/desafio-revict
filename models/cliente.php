<?php 

class Cliente {
  private $id;
  private $nome;
  private $sobrenome;
  private $cpf;

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

  //Setters

  public function setId($id){
    return $this->id;
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

}

?>