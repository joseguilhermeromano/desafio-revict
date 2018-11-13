<?php
class ClienteDAO{
  private $db;

  public function __construct(Database $db){
    $this->db = $db->getConexao();
  }

  public function create(Cliente $cliente){
    $stmt = $this->db->prepare("INSERT INTO cliente(nome, sobrenome, cpf) VALUES(?, ?, ?)");
    $stmt->bindParam(1,$cliente->getNome());
    $stmt->bindParam(2,$cliente->getSobrenome());
    $stmt->bindParam(3,$cliente->getCpf());
    $stmt->execute();
  }
}

?>