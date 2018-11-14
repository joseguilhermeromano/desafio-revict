<?php 
class Divida {
  private $id;
  private $nome;
  private $descricao;
  private $valor_total;
  private $data_processamento;
  private $qtd_parcelas;
  private $status;
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

  public function getDataProcessamento(){
    return $this->data_processamento;
  }

  public function getQtdParcelas(){
    return $this->qtd_parcelas;
  }

  public function getStatus(){
    return $this->status;
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

  public function setDataProcessamento($data_processamento){
    $this->data_processamento = $data_processamento;
  }

  public function setQtdParcelas($parcelas){
    $this->qtd_parcelas = $parcelas;
  }

  public function setStatus($status){
    $this->status = $status;
  }

  public function setCreatedAt($created_at){
    $this->created_at = $created_at;
  }

  public function setUpdatedAt($updated_at){
    $this->updated_at = $updated_at;
  }


}

?>