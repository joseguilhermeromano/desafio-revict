<?php 
class Dividas {
  private $id;
  private $nome;
  private $tipo;
  private $descricao;
  private $valor;
  private $data_vencimento;

  //Getters

  public function getId(){
    return $this->id;
  }

  public function getNome(){
    return $this->nome;
  }

  public function getTipo(){
    return $this->tipo;
  }

  public function getDescricao(){
    return $this->descricao;
  }

  public function getValor(){
    return $this->valor;
  }

  public function getDataVencimento(){
    return $this->data_vencimento;
  }

  //Setters

  public function setId($id){
    $this->id = $id
  }

  public function setNome($nome){
    $this->nome = $nome;
  }

  public function setTipo($tipo){
    $this->tipo = $tipo;
  }

  public function setDescricao($descricao){
    $this->descricao = $descricao;
  }

  public function setValor($valor){
    $this->valor = $valor;
  }

  public function setDataVencimento($data_vencimento){
    $this->data_vencimento = $data_vencimento;
  }


}

?>