<?php 
class Divida {
  private $id;
  private $nome;
  private $descricao;
  private $valor_total;
  private $data_vencimento;
  private $status;
  private $cliente;
  private $cliente_id;
  private $created_at;
  private $updated_at;

  //Getters

  public function getId(){
    return $this->id;
  }

  public function getNome(){
    return $this->nome;
  }

  public function getDescricao(){
    return $this->descricao;
  }

  public function getValorTotal(){
    return $this->valor_total;
  }

  public function getDataVencimento(){
    return $this->data_vencimento;
  }

  public function getStatus(){
    return $this->status;
  }

  public function getCliente(){
    return $this->cliente;
  }

  public function getClienteId(){
    return $this->cliente_id;
  }

  public function getCreatedAt(){
    return $this->created_at;
  }

  public function getUpdatedAt(){
    return $this->updated_at;
  }

  //Setters

  public function setId($id){
    $this->id = $id;
  }

  public function setNome($nome){
    $this->nome = $nome;
  }

  public function setDescricao($descricao){
    $this->descricao = $descricao;
  }

  public function setValorTotal($valor_total){
    $this->valor_total = $valor_total;
  }

  public function setDataVencimento($data_vencimento){
    $this->data_vencimento = $data_vencimento;
  }

  public function setStatus($status){
    $this->status = $status;
  }

  public function setCliente(Cliente $cliente){
    $this->cliente = $cliente;
  }

  public function setClienteId($cliente_id){
    $this->cliente_id = $cliente_id;
  }

  public function setCreatedAt($created_at){
    $this->created_at = $created_at;
  }

  public function setUpdatedAt($updated_at){
    $this->updated_at = $updated_at;
  }


}

?>